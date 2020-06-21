"use strict";

/*!
 * jQuery.BgSwitcher
 *
 * @version  0.4.3
 * @author   rewish <rewish.org@gmail.com>
 * @license  MIT License (https://github.com/rewish/jquery-bgswitcher/blob/master/LICENSE.md)
 * @link     https://github.com/rewish/jquery-bgswitcher
 */
(function ($) {
  'use strict';

  var loadedImages = {},
      slice = Array.prototype.slice,
      toString = Object.prototype.toString,
      corners = ['Top', 'Right', 'Bottom', 'Left'],
      backgroundProperties = ['Attachment', 'Color', 'Image', 'Repeat', 'Position', 'Size', 'Clip', 'Origin'];

  $.fn.bgswitcher = function () {
    var args = arguments,
        instanceKey = BgSwitcher.keys.instance;
    return this.each(function () {
      var instance = $.data(this, instanceKey);

      if (!instance) {
        instance = new BgSwitcher(this);
        $.data(this, instanceKey, instance);
      }

      instance.dispatch.apply(instance, args);
    });
  }; // Backward Compatibility


  $.fn.bgSwitcher = $.fn.bgswitcher;
  /**
   * BgSwitcher
   *
   * @param {HTMLElement} el
   * @constructor
   */

  function BgSwitcher(el) {
    this.$el = $(el);
    this.index = 0;
    this.config = $.extend({}, BgSwitcher.defaultConfig);

    this._setupBackgroundElement();

    this._listenToResize();
  }

  $.extend(BgSwitcher.prototype, {
    /**
     * Dispatch
     *
     * @param {string|Array} one
     */
    dispatch: function dispatch(one) {
      switch (toString.call(one)) {
        case '[object Object]':
          this.setConfig(one);
          break;

        case '[object String]':
          this[one].apply(this, slice.call(arguments, 1));
          break;

        default:
          throw new Error('Please specify a Object or String');
      }
    },

    /**
     * Set config
     *
     * @param {Object} config
     */
    setConfig: function setConfig(config) {
      this.config = $.extend(this.config, config);

      if (typeof this.config.random !== 'undefined') {
        this.config.shuffle = this.config.random;
      }

      this.refresh();
    },

    /**
     * Set images
     *
     * @param {Array} images
     */
    setImages: function setImages(images) {
      this.imageList = new this.constructor.ImageList(images);

      if (this.config.shuffle) {
        this.imageList.shuffle();
      }
    },

    /**
     * Set switch handler
     *
     * @param {Function} fn
     */
    setSwitchHandler: function setSwitchHandler(fn) {
      this.switchHandler = $.proxy(fn, this);
    },

    /**
     * Default switch handler
     *
     * @param {string} type
     * @returns {Function}
     */
    getBuiltInSwitchHandler: function getBuiltInSwitchHandler(type) {
      return this.constructor.switchHandlers[type || this.config.effect];
    },

    /**
     * Refresh
     */
    refresh: function refresh() {
      this.setImages(this.config.images);
      this.setSwitchHandler(this.getBuiltInSwitchHandler());

      this._prepareSwitching();

      if (this.config.start) {
        this.start();
      }
    },

    /**
     * Start switching
     */
    start: function start() {
      if (!this._timerID) {
        this._timerID = setTimeout($.proxy(this, 'next'), this.config.interval);
      }
    },

    /**
     * Stop switching
     */
    stop: function stop() {
      if (this._timerID) {
        clearTimeout(this._timerID);
        this._timerID = null;
      }
    },

    /**
     * Toggle between start/stop
     */
    toggle: function toggle() {
      if (this._timerID) {
        this.stop();
      } else {
        this.start();
      }
    },

    /**
     * Reset switching
     */
    reset: function reset() {
      this.index = 0;

      this._prepareSwitching();
    },

    /**
     * Go to next switching
     */
    next: function next() {
      var max = this.imageList.count();

      if (!this.config.loop && this.index + 1 === max) {
        return;
      }

      if (++this.index === max) {
        this.index = 0;
      }

      this.switching();
    },

    /**
     * Go to previous switching
     */
    prev: function prev() {
      if (!this.config.loop && this.index === 0) {
        return;
      }

      if (--this.index === -1) {
        this.index = this.imageList.count() - 1;
      }

      this.switching();
    },

    /**
     * Select the switching at index
     *
     * @param {number} index
     */
    select: function select(index) {
      if (index === -1) {
        index = this.imageList.count() - 1;
      }

      this.index = index;
      this.switching();
    },

    /**
     * Switching the background image
     */
    switching: function switching() {
      var started = !!this._timerID;

      if (started) {
        this.stop();
      }

      this._createSwitchableElement();

      this._prepareSwitching();

      this.switchHandler(this.$switchable);

      if (started) {
        this.start();
      }
    },

    /**
     * Destroy...
     */
    destroy: function destroy() {
      this.stop();

      this._stopListeningToResize();

      if (this.$switchable) {
        this.$switchable.stop();
        this.$switchable.remove();
        this.$switchable = null;
      }

      if (this.$bg) {
        this.$bg.remove();
        this.$bg = null;
      }

      this.$el.removeAttr('style');
      this.$el.removeData(this.constructor.keys.instance);
      this.$el = null;
    },

    /**
     * Adjust rectangle
     */
    _adjustRectangle: function _adjustRectangle() {
      var corner,
          i = 0,
          length = corners.length,
          offset = this.$el.position(),
          copiedStyles = {
        top: offset.top,
        left: offset.left,
        width: this.$el.innerWidth(),
        height: this.$el.innerHeight()
      };

      for (; i < length; i++) {
        corner = corners[i];
        copiedStyles['margin' + corner] = this.$el.css('margin' + corner);
        copiedStyles['border' + corner] = this.$el.css('border' + corner);
      }

      this.$bg.css(copiedStyles);
    },

    /**
     * Setup background element
     */
    _setupBackgroundElement: function _setupBackgroundElement() {
      this.$bg = $(document.createElement('div'));
      this.$bg.css({
        position: 'absolute',
        // zIndex: (parseInt(this.$el.css('zIndex'), 10) || 0) - 1,
        zIndex: 0,
        opacity: 1,
        overflow: 'hidden'
      });

      this._copyBackgroundStyles();

      this._adjustRectangle();

      if (this.$el[0].tagName === 'BODY') {
        this.$el.prepend(this.$bg);
      } else {
        this.$el.before(this.$bg);
        this.$el.css('background', 'none');
      }
    },

    /**
     * Create switchable element
     */
    _createSwitchableElement: function _createSwitchableElement() {
      if (this.$switchable) {
        this.$switchable.remove();
      }

      this.$switchable = this.$bg.clone();
      this.$switchable.css({
        top: 0,
        left: 0,
        margin: 0,
        border: 'none'
      });
      this.$switchable.appendTo(this.$bg);
    },

    /**
     * Copy background styles
     */
    _copyBackgroundStyles: function _copyBackgroundStyles() {
      var prop,
          copiedStyle = {},
          i = 0,
          length = backgroundProperties.length,
          backgroundPosition = 'backgroundPosition';

      for (; i < length; i++) {
        prop = 'background' + backgroundProperties[i];
        copiedStyle[prop] = this.$el.css(prop);
      } // For IE<=9


      if (copiedStyle[backgroundPosition] === undefined) {
        copiedStyle[backgroundPosition] = [this.$el.css(backgroundPosition + 'X'), this.$el.css(backgroundPosition + 'Y')].join(' ');
      }

      this.$bg.css(copiedStyle);
    },

    /**
     * Listen to the resize event
     */
    _listenToResize: function _listenToResize() {
      var that = this;

      this._resizeHandler = function () {
        that._adjustRectangle();
      };

      $(window).on('resize', this._resizeHandler);
    },

    /**
     * Stop listening to the resize event
     */
    _stopListeningToResize: function _stopListeningToResize() {
      $(window).off('resize', this._resizeHandler);
      this._resizeHandler = null;
    },

    /**
     * Prepare the Switching
     */
    _prepareSwitching: function _prepareSwitching() {
      this.$bg.css('backgroundImage', this.imageList.url(this.index));
    }
  });
  /**
   * Data Keys
   * @type {Object}
   */

  BgSwitcher.keys = {
    instance: 'bgSwitcher'
  };
  /**
   * Default Config
   * @type {Object}
   */

  BgSwitcher.defaultConfig = {
    images: [],
    interval: 5000,
    start: true,
    loop: true,
    shuffle: false,
    effect: 'fade',
    duration: 1000,
    easing: 'swing'
  };
  /**
   * Built-In switch handlers (effects)
   * @type {Object}
   */

  BgSwitcher.switchHandlers = {
    fade: function fade($el) {
      $el.animate({
        opacity: 0
      }, this.config.duration, this.config.easing);
    },
    blind: function blind($el) {
      $el.animate({
        height: 0
      }, this.config.duration, this.config.easing);
    },
    clip: function clip($el) {
      $el.animate({
        top: parseInt($el.css('top'), 10) + $el.height() / 2,
        height: 0
      }, this.config.duration, this.config.easing);
    },
    slide: function slide($el) {
      $el.animate({
        top: -$el.height()
      }, this.config.duration, this.config.easing);
    },
    drop: function drop($el) {
      $el.animate({
        left: -$el.width(),
        opacity: 0
      }, this.config.duration, this.config.easing);
    },
    hide: function hide($el) {
      $el.hide();
    }
  };
  /**
   * Define effect
   *
   * @param {String} name
   * @param {Function} fn
   */

  BgSwitcher.defineEffect = function (name, fn) {
    this.switchHandlers[name] = fn;
  };
  /**
   * BgSwitcher.ImageList
   *
   * @param {Array} images
   * @constructor
   */


  BgSwitcher.ImageList = function (images) {
    this.images = images;
    this.createImagesBySequence();
    this.preload();
  };

  $.extend(BgSwitcher.ImageList.prototype, {
    /**
     * Images is sequenceable
     *
     * @returns {boolean}
     */
    isSequenceable: function isSequenceable() {
      return typeof this.images[0] === 'string' && typeof this.images[1] === 'number' && typeof this.images[2] === 'number';
    },

    /**
     * Create an images by sequence
     */
    createImagesBySequence: function createImagesBySequence() {
      if (!this.isSequenceable()) {
        return;
      }

      var images = [],
          base = this.images[0],
          min = this.images[1],
          max = this.images[2];

      do {
        images.push(base.replace(/\.\w+$/, min + '$&'));
      } while (++min <= max);

      this.images = images;
    },

    /**
     * Preload an images
     */
    preload: function preload() {
      var path,
          length = this.images.length,
          i = 0;

      for (; i < length; i++) {
        path = this.images[i];

        if (!loadedImages[path]) {
          loadedImages[path] = new Image();
          loadedImages[path].src = path;
        }
      }
    },

    /**
     * Shuffle an images
     */
    shuffle: function shuffle() {
      var j,
          t,
          i = this.images.length,
          original = this.images.join();

      if (!i) {
        return;
      }

      while (i) {
        j = Math.floor(Math.random() * i);
        t = this.images[--i];
        this.images[i] = this.images[j];
        this.images[j] = t;
      }

      if (this.images.join() === original) {
        this.shuffle();
      }
    },

    /**
     * Get the image from index
     *
     * @param {number} index
     * @returns {string}
     */
    get: function get(index) {
      return this.images[index];
    },

    /**
     * Get the URL with function of CSS
     *
     * @param {number} index
     * @returns {string}
     */
    url: function url(index) {
      return 'url(' + this.get(index) + ')';
    },

    /**
     * Count of images
     *
     * @returns {number}
     */
    count: function count() {
      return this.images.length;
    }
  });
  $.BgSwitcher = BgSwitcher;
})(jQuery);
"use strict";

$(function () {
  var navi = $('.Header__naviListItemLink');
  var naviContent = $('.Header__naviContent');
  var menu = $('.js-Header__menu');
  var menuContent = $('.js-Header__menuContent');
  var localNavi = $('.LocalNavi');
  var localNaviCurrent = $('.LocalNavi .is-current');
  var smp = $(window).width() < 768;
  var lazyLoading = $('.lazyload'); // グローバルナビ（PC）

  navi.hover(function () {
    var index = navi.index(this);
    naviContent.removeClass("is-show");
    naviContent.eq(index).addClass("is-show");
  }, function () {
    var index = navi.index(this);
    mouseOut(index);
  });

  function mouseOut(index) {
    var targetContent = naviContent.eq(index);
    targetContent.mouseleave(function () {
      naviContent.removeClass("is-show");
    });
  }

  menu.click(function () {
    menuContent.toggleClass("is-show");
  }); // ローカルナビ（スマホ）

  if (localNavi.length && smp) {
    var position = localNaviCurrent.offset().left;
    var contentWidth = localNaviCurrent.width();
    var windowWidth = $(window).width();
    var isScrollable = position + contentWidth > windowWidth;
    var positionMiddle = position + windowWidth / 2 - contentWidth / 2;
    var $win = $(window),
        $main = $('main'),
        $nav = localNavi,
        navHeight = $nav.outerHeight(),
        navPos = $nav.offset().top,
        fixedClass = 'is-fixed';
    $win.on('load scroll', function () {
      var value = $(this).scrollTop();

      if (value > navPos) {
        $nav.addClass(fixedClass);
        $main.css('margin-top', navHeight);
      } else {
        $nav.removeClass(fixedClass);
        $main.css('margin-top', '0');
      }
    });

    if (isScrollable) {
      localNavi.scrollLeft(positionMiddle);
    }
  }
});