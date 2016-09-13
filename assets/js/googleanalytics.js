  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36021841-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
/*
$(document).ready(function(){
     $('.table img').hide();//ページ上の画像を隠す
});
 
var i = 0;
var int=0;
$(window).bind("load", function() {//ページコンテンツのロードが完了後、機能させる
     var int = setInterval("doThis(i)",500);//フェードするスピード
});
 
function doThis() {
     var images = $('img').length;//画像の数を数える
     if (i >= images) {// ループ
          clearInterval(int);//最後の画像までいくとループ終了
    }
    $('img:hidden').eq(0).fadeIn(500);//一つずつ表示する
    i++;
} 
});
$(function () {
     $('img').error(function(){
          $(this).attr({src:'images/missing.jpg',alt:'画像が見つかりません'});
     });
});*/
