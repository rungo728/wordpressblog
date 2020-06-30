jQuery(function ($) {
  function animation() {
    $(".fadeInUp").each(function () {
      //ターゲットの位置を取得
      let target = $(this).offset().top;
      //スクロール量を取得
      let scroll = $(window).scrollTop();
      //ウィンドウの高さを取得
      let windowHeight = $(window).height();
      //ターゲットまでスクロールするとフェードインする
      if (scroll > target - windowHeight) {
        $(this).css("opacity", "1");
        $(this).css("transform", "translateY(0)");
      }
    });
  }
  animation();
  $(window).scroll(function () {
    animation();
  });
});
