
$(function(){
$(".top").css("display", "none");
setTimeout(function() {
    $('.anime').fadeOut();
  }, 5000);
});

$(function(){
    $(".top").css({opacity:'0'});
    setTimeout(function(){
    $(".top").css("display", "block");
    $(".top").stop().animate({opacity:'1'},1000);
    },5000);
});

//$(function () {
//  var webStorage = function () {
//    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
//      $(".loading").addClass('is-active');
//    } else {
      /*
        初回アクセス時の処理
      */
//      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
//      $(".loading-animation").addClass('is-active'); // loadingアニメーションを表示
//      setTimeout(function () {
        // ローディングを数秒後に非表示にする
//        $(".loading").addClass('is-active');
//        $(".loading-animation").removeClass('is-active');
//      }, 5000); // ローディングを表示する時間

//            $(".top").css("display", "none");
//            setTimeout(function() {
//                $('.anime').fadeOut();
//                }, 5000); 

//                $(".top").css({opacity:'0'});
//                setTimeout(function(){
//                $(".top").css("display", "block");
//                $(".top").stop().animate({opacity:'1'},1000);
//                },5000); 

//                }
//              }
//              webStorage();
//            });
