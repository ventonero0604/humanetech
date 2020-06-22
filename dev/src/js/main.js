$(function () {

  var navi = $('.Header__naviListItemLink');
  var naviContent = $('.Header__naviContent');
  var menu = $('.js-Header__menu');
  var menuContent = $('.js-Header__menuContent');
  var localNavi = $('.LocalNavi');
  var localNaviCurrent = $('.LocalNavi .is-current');
  var smp = $(window).width() < 768;
  var lazyLoading = $('.lazyload');

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

  menu.click(function(){
    menuContent.toggleClass("is-show");
  })

  // ローカルナビ（スマホ）
  if (localNavi.length) {
    var position = localNaviCurrent.offset().left;
    var contentWidth = localNaviCurrent.width();
    var windowWidth = $(window).width();
    var isScrollable = (position + contentWidth) > windowWidth 
    var positionMiddle = position + (windowWidth / 2) - (contentWidth / 2);

    if (smp && isScrollable) {
      localNavi.scrollLeft(positionMiddle);
    }

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

  $('.Slider').slick({
    autoplay: true,
    autoplaySpeed: 5000,
  });
})