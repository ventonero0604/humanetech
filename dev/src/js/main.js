$(function () {

  var navi = $('.Header__naviListItemLink');
  var naviContent = $('.Header__naviContent');
  var menu = $('.js-Header__menu');
  var menuContent = $('.js-Header__menuContent');
  var localNavi = $('.LocalNavi');
  var localNaviCurrent = $('.LocalNavi .is-current');
  var smp = $(window).width() < 768;

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
  if (localNavi.length && smp) {
    var position = localNaviCurrent.offset().left;
    var contentWidth = localNaviCurrent.width();
    var windowWidth = $(window).width();
    var isScrollable = (position + contentWidth) > windowWidth 
    var positionMiddle = position + (windowWidth / 2) - (contentWidth / 2);

    if (isScrollable) {
      localNavi.scrollLeft(positionMiddle);
    }
  }
})