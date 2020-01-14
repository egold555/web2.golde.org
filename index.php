<?php
$lines = file('assets/tags.txt');
$tag = $lines[array_rand($lines)];
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 ie-lt10 no-js" lang="en"><![endif]-->
<!--[if gt IE 9]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<title>Eric's Hosting Computer</title>
<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='stylesheet' href='assets/css/color.css'>
<link rel="icon" href="assets/img/favicon.ico">
<style type="text/css">
html {
    overflow: scroll;
    overflow-x: hidden;
}
::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}

</style>
</head>
<body>

  <!-- preloader -->
  <div id="preloader">
    <img id="preloader-img" src="assets/img/preloader.gif" alt="preloader">
  </div>
  <!-- /preloader -->

  <div id="bg"></div> <!-- background image container -->
  <div id="overlay"></div> <!-- gray overlay container -->

  <!-- intro section -->
  <section id="intro" class="active">
    <div class="tb">
      <div class="tb-cell">
        <div class="inner">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1 tc"> <!-- section wrap -->
                <div class="section-heading">
                  <h1 class="section-title">
                    <span class="letter"></span>ATHLON<span class="color">64</span>. <!-- letter and title-->
                  </h1>
                  <p class="sub-title"><?=$tag?></p> <!-- subtitle -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /intro section -->

  <!-- script start -->
  <script src='assets/js/vendor/jquery-1.11.3.min.js'></script>
  <script src='assets/js/vendor/bootstrap.min.js'></script>
  <script src='assets/js/vendor/plugin.js'></script>
  <!-- <script src='assets/js/vendor/jquery.nouislider.all.min.js'></script> -->
  <!--[if lt IE 10]>
  <script src='assets/js/vendor/ie/jquery.placeholder.min.js'></script>
  <![endif]-->
  <script src='assets/js/single.js'></script>
  <script src='assets/js/main.js'></script>
  <!-- script end -->

</body>
</html>