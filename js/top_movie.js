$(function() {
  var h = $(window).height();
  
  $('#wrap').css('display','none');
  $('#loader-bg ,#loader').height(h).css('display','block');
});
  
$(window).load(function () { //全ての読み込みが完了したら実行
 $('#loader-bg').delay(5000).fadeOut(500);
 $('#loader').delay(5000).fadeOut(500);
  $('#wrap').css('display', 'block');
});
  
//4秒たったら強制的にロード画面を非表示
$(function(){
 setTimeout('stopload()',4000);
});
  
function stopload(){
  $('#wrap').css('display','block');
 $('#loader-bg').delay(4000).fadeOut(500);
 $('#loader').delay(4000).fadeOut(500);
}