<?php
$title = "交通案内";
include("template/top.php");
?>

<section id="map">
  <h2>木更津高専までの地図</h2><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3252.868643336694!2d139.95363431487695!3d35.383713780264735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60180b537b92839f%3A0x3addffdb5c4dd3b1!2z54us56uL6KGM5pS_5rOV5Lq6IOWbveeri-mrmOetieWwgumWgOWtpuagoeapn-aniyDmnKjmm7TmtKXlt6Xmpa3pq5jnrYnlsILploDlrabmoKE!5e0!3m2!1sja!2sjp!4v1473603700935" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<section id="access">
  <h2>木更津高専までのアクセス</h2>
  <div class="address">
    <strong>木更津工業高等専門学校</strong><br>
    <address>〒292-0041 木更津市清見台東2-11-1 TEL：0438 (30) 4000 (代表)</address>
  </div>

  <dl>
    <dt>木更津駅からのアクセス</dt>
    <dd>木更津駅からバス (バス乗り場西口2番、東口6番) で15分<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(清見台団地行き/高専前下車)徒歩2分</dd>

    <dt>車でのアクセス</dt>
    <dd>館山自動車道／木更津北I.Cから車で10分</dd>

    <dt>電車でのアクセス</dt>
    <dd>東京駅から／特急にて53分</dd>
    <dd>東京駅から／快速にて1時間20分</dd>

    <dt>高速バスでのアクセス</dt>
    <dd>横浜駅から木更津駅までバス55分</dd>
    <dd>羽田空港から木更津駅までバス37分</dd>
    <dd>東京駅八重洲口から木更津駅までバスで64分</dd>
  </dl>
</section>

<section id="timeTable">

  <h2>木更津高専行きバス時刻表(休日)</h2>

  <span>●木更津駅 ⇒ 木更津高専 (清見台団地線)<br>(所要時間：約12分)</span>

  <div class="busTable">
    <span>3路線統合時刻表<br></span>

    <table>
      <tbody>
      <tr>
        <th>時</th>
        <th>分</th>
      </tr>
      <tr>
        <td>6</td>
        <td>30裏 50西</td>
      </tr>
      <tr>
        <td>7</td>
        <td>10裏 30西 50西</td>
      </tr>
      <tr>
        <td>8</td>
        <td>10西 30裏 50東</td>
      </tr>
      <tr>
        <td>9</td>
        <td>10西 30裏 50西</td>
      </tr>
      <tr>
        <td>10</td>
        <td>10東 30西 50裏</td>
      </tr>
      <tr>
        <td>11</td>
        <td>10西 30東 50西</td>
      </tr>
      <tr>
        <td>12</td>
        <td>10裏 30西 50東</td>
      </tr>
      <tr>
        <td>13</td>
        <td>10西 30西 50裏</td>
      </tr>
      <tr>
        <td>14</td>
        <td>10西 30東 50西</td>
      </tr>
      <tr>
        <td>15</td>
        <td>10裏 30西 50東</td>
      </tr>
      <tr>
        <td>16</td>
        <td>12西 30裏 50西</td>
      </tr>
      <tr>
        <td>17</td>
        <td>10東 30西 50裏</td>
      </tr>
      <tr>
        <td>18</td>
        <td>10西 30西 50東</td>
      </tr>
      <tr>
        <td>19</td>
        <td>15西 40裏</td>
      </tr>
      <tr>
        <td>20</td>
        <td>15西 30裏</td>
      </tr>
      <tr>
        <td>21</td>
        <td>00西 50裏</td>
      </tr>
      </tbody>
    </table>
					<span>
						西:木更津駅西口2番発高専前行き<br>
						東:木更津駅東口6番発高専前行き<br>
						裏:木更津駅東口6番発高専裏行き
					</span>
  </div>

  <!-- ごっちゃになるからいらない
  <div class="busTable">
    <span>木更津駅西口（2番乗場） 発 → 高専前 下車</span>

    <table>
      <tr>
        <th>時</th>
        <th>分</th>
      </tr>
      <tr><td>6</td><td>50</td></tr>
      <tr><td>7</td><td>30 50</td></tr>
      <tr><td>8</td><td>10</td></tr>
      <tr><td>9</td><td>10 50</td></tr>
      <tr><td>10</td><td>30</td></tr>
      <tr><td>11</td><td>10 50</td></tr>
      <tr><td>12</td><td>30</td></tr>
      <tr><td>13</td><td>10 30</td></tr>
      <tr><td>14</td><td>10 50</td></tr>
      <tr><td>15</td><td>30</td></tr>
      <tr><td>16</td><td>12 50</td></tr>
      <tr><td>17</td><td>30</td></tr>
      <tr><td>18</td><td>10 30</td></tr>
      <tr><td>19</td><td>15</td></tr>
      <tr><td>20</td><td>15</td></tr>
      <tr><td>21</td><td>00</td></tr>
    </table>
  </div>
  <div class="busTable">
    <span>	木更津駅東口（6番乗場） 発 → 高専前 下車</span>

    <table>
      <tr>
        <th>時</th>
        <th>分</th>
      </tr>
      <tr><td>6</td><td>--</td></tr>
      <tr><td>7</td><td>--</td></tr>
      <tr><td>8</td><td>50</td></tr>
      <tr><td>9</td><td>--</td></tr>
      <tr><td>10</td><td>10</td></tr>
      <tr><td>11</td><td>30</td></tr>
      <tr><td>12</td><td>50</td></tr>
      <tr><td>13</td><td>--</td></tr>
      <tr><td>14</td><td>30</td></tr>
      <tr><td>15</td><td>50</td></tr>
      <tr><td>16</td><td>--</td></tr>
      <tr><td>17</td><td>10</td></tr>
      <tr><td>18</td><td>50</td></tr>
      <tr><td>19</td><td>--</td></tr>
      <tr><td>20</td><td>--</td></tr>
      <tr><td>21</td><td>--</td></tr>
    </table>
  </div>
  <div class="busTable">
    <span>木更津駅東口（6番乗場） 発 → 高専裏 下車</span>

    <table>
      <tr>
        <th width="20px">時</th>
        <th>分</th>
      </tr>
      <tr><td>6</td><td>30</td></tr>
      <tr><td>7</td><td>10</td></tr>
      <tr><td>8</td><td>30</td></tr>
      <tr><td>9</td><td>30</td></tr>
      <tr><td>10</td><td>50</td></tr>
      <tr><td>11</td><td>--</td></tr>
      <tr><td>12</td><td>10</td></tr>
      <tr><td>13</td><td>50</td></tr>
      <tr><td>14</td><td>--</td></tr>
      <tr><td>15</td><td>10</td></tr>
      <tr><td>16</td><td>30</td></tr>
      <tr><td>17</td><td>50</td></tr>
      <tr><td>18</td><td>--</td></tr>
      <tr><td>19</td><td>40</td></tr>
      <tr><td>20</td><td>30</td></tr>
      <tr><td>21</td><td>50</td></tr>
    </table>
  </div>
  -->

</section>

<?php include_once('template/bottom.php'); ?>