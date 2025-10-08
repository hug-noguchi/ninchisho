$(".slide-items").slick({
  autoplay: true, // 自動再生
	autoplaySpeed: 5000, // 再生速度（ミリ秒設定） 1000ミリ秒=1秒
  centerMode: true,// 前後スライドを部分表示
  centerPadding: '19%',// 両端の見切れるスライド幅
  infinite: true, // 無限スライド
  arrows: true, // 矢印
    dots: true,
  pauseOnFocus: false,//フォーカスで一時停止
  pauseOnHover: false,//マウスホバーで一時停止
  responsive: [
      {
        breakpoint: 780, // 399px以下のサイズに適用
        settings: {
          centerPadding: '8%',// 両端の見切れるスライド幅
        },
      },
    ],
})
	
	.on("afterChange", function(event, slick, currentSlide) {
  switch (currentSlide){
    case 0:
      // 1枚目2週目以降の秒数
      $(this).slick("slickSetOption", "autoplaySpeed", 5000);
      break;
    case 2:
      // 3枚目の秒数
      $(this).slick("slickSetOption", "autoplaySpeed", 5000);
      break;
    default:
      // その他の秒数
      $(this).slick("slickSetOption", "autoplaySpeed", 5000);
      break;
    }
});