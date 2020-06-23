$(function () {

  var navi = $('.Header__naviListItemLink');
  var naviContent = $('.Header__naviContent');
  var menu = $('.js-Header__menu');
  var menuContent = $('.js-Header__menuContent');
  var localNavi = $('.LocalNavi');
  var localNaviCurrent = $('.LocalNavi .is-current');
  var smp = $(window).width() < 768;

  // ハンバーガーメニューの黒いマスク挿入
  if (smp) {
    $('body').append('<div class="Header__menuClose"></div>');
  }

  // グローバルナビ（PC）
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
    })
  }

  // ハンバーガーメニュー 表示
  menu.on("click", function() {
    menuContent.toggleClass("is-show");
    $('.Header__menuClose').toggleClass("is-show")
  })
  // ハンバーガーメニュー 閉じる
  $(document).on("click", ".Header__menuClose", function() {
    menuContent.toggleClass("is-show");
    $('.Header__menuClose').toggleClass("is-show")
  })

  if (localNavi.length) {
    var position = localNaviCurrent.offset().left;
    var contentWidth = localNaviCurrent.width();
    var windowWidth = $(window).width();
    var isScrollable = (position + contentWidth) > windowWidth 
    var positionMiddle = position + (windowWidth / 2) - (contentWidth / 2);

    // localナビのカレント位置調整
    if (smp && isScrollable) {
      localNavi.scrollLeft(positionMiddle);
    }

    // localナビ固定
    var $win = $(window),
    $main = $('main'),
    $nav = localNavi,
    navHeight = $nav.outerHeight(),
    navPos = $nav.offset().top,
    fixedClass = 'is-fixed';

    $win.on('load scroll', function() {
      var value = $(this).scrollTop();
      if ( value > navPos ) {
        $nav.addClass(fixedClass);
        $main.css('margin-top', navHeight);
      } else {
        $nav.removeClass(fixedClass);
        $main.css('margin-top', '0');
      }
    });
  }

  // viewinでコンテンツfadein
  $(window).scroll(function (){
		$('.fadein').each(function(){
			var elemPos = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var windowHeight = $(window).height();
			if (scroll > elemPos - windowHeight + 200){
				$(this).addClass('scrollin');
			}
		});
  });

  // スライドショー
  $('.Slider').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  // menuコンテンツのアコーディオン
  $('.js-openMenuContents').on('click', function() {
    $(this).toggleClass('is-open')
    $(this).next().slideToggle();
  });
})