<?php
$title = "Index";
include("template/top.php");
?>
  <script>

    $(document).ready(function () {//フォトギャラリー
      slider = $('.bxslider').bxSlider({
        auto: true,
        autoHover: true,
        slideWidth: '800px',
        slideHeight: '400px',
        // デフォでは、スライドを操作するとそこでスライドショーが終了してしまうので、
        // その対策
        onSlideAfter: function () {
          slider.startAuto();
        }
      });
    });


  </script>
  <section id="garelly">
    <ul class="bxslider">
      <li><img src="assets/img/photogarelly/photo1.jpg" alt=""></li>
      <li><img src="assets/img/photogarelly/photo2.jpg" alt=""></li>
      <li><img src="assets/img/photogarelly/photo3.jpg" alt=""></li>
    </ul>
    <!-- <img src="img/pnotogarelly.png" height="240" width="720" alt="フォトギャラリー"> -->
  </section>

  <section id="date">

    <h2 id="date">2014年度祇園祭は11/1,2(土,日) に行われました。<br>ありがとうございました!!</h2>
  </section>

  <section id="caution">
    <h2>注意事項</h2>
    <ol>
      <li>校内ではたとえ成人であっても飲酒・喫煙は厳禁です。</li>
      <li>エレベーターは原則使用できません。</li>
      <li>展示物や校内施設を絶対に破壊しないでください</li>
      <li>ゴミは校内に設置されたゴミ箱に捨ててください。</li>
      <li>このパンフレットは捨てずにお持ち帰りください。</li>
      <li>校内の事故において、祇園祭執行部は一切の責任を負いかねます。</li>
      <li>その他、わからないことやトラブルが発生した場合には、黄色い腕章をつけたスタッフに聞いて頂くか、受付までお越しください。</li>
    </ol>
  </section>


  <section id="twitter">
    <h2><a class="twitter-timeline" href="https://twitter.com/gion_festival" data-widget-id="499285150048350208">@gion_festival
        からのツイート</a></h2>
    <script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
          js = d.createElement(s);
          js.id = id;
          js.src = p + "://platform.twitter.com/widgets.js";
          fjs.parentNode.insertBefore(js, fjs);
        }
      }(document, "script", "twitter-wjs");</script>
  </section>

  <section id="pamphlet">
    <h2>祇園祭のパンフレットが完成しました! </h2>
    <a href="http://www.adjustbook.com/doc/Index/show/us/4793/bk/9108" style="font-size:110%"><img
        src="assets/img/frontCover.jpg" alt="電子パンフレット表紙" width="400"></a>
  </section>

  </div>
<?php include_once('template/bottom.php'); ?>