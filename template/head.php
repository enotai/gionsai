
<title>木更津工業高等専門学校 祇園祭2015 公式サイト | <?php echo $title ?></title>
<meta charset="UTF-8">
<link href="assets/css/reset.css" rel="stylesheet" type="text/css">
<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/css/style.css" rel="stylesheet" type="text/css">
<?php
$ua=$_SERVER['HTTP_USER_AGENT'];
$browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
if($browser=='sp'){
  echo '		<link href="assets/css/stylemobile.css" rel="stylesheet" type="text/css">';
}
?>

<meta name="copyright" content="木更津工業高等専門学校 祇園祭実行委員会">
<meta name="keywords" content="木更津高専,木更津工業高等専門学校,祇園祭,文化祭,企画">
<meta name="description" content="木更津高専祇園祭2014の公式ホームページ。企画案内や構内地図、電子パンフレットなどを載せています。twitterもやっています。">

<script type="text/javascript" src="assets/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-navi.js"></script>
<script src="assets/js/jquery.bxslider.js"></script>
<link href="assets/css/jquery.bxslider.css" rel="stylesheet" />


<style type="text/css">
  h2{
    line-height:1.5em;
    padding:0 auto;
  }
</style>
<style type="text/css">
  .title{
  }

  .name{
    text-align:right;
  }

  .text{
    font-size:90%;
    line-height:1.5em;
    white-space:pre-wrap;
    padding-left:30px;
  }

  h2{
    padding:0;
  }


  article{
    padding:10px 0;
    text-indent:1em;
  }

  /*access*/
  .accordion_head,#wrapper_cont{
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    user-select: none;
  }


  #map{
    margin:20px 0px;
    clear:both;
  }
  #access{
    float:left;
    width:480px;
  }

  #timeTable{
    float:right;
    width:320px;
  }

  div.busTable{
    margin:20px 0px;
    text-indent:1em;
  }

  tr{
    text-align:center;
  }

  td{
    margin:0 auto;
    width:200px;
  }

  dl{
    list-style-type:none;
    margin:20px 0px;
  }

  dt{
    margin-top:1em;
  }

  dt:before{
    content:"●";
  }

  dd{
    text-indent:1em;
  }

  .access{
    clear:left;
  }

  .accordion_head{
    font-size:16px;
  //color:#99ffff;
    cursor:pointer;
    text-decoration:underline;
  }
</style>