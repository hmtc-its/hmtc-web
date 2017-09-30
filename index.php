<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">

  <meta property="og:url" content="hmtc.if.its.ac.id">
  <meta property="og:title" content="HMTC ITS">
  <meta property="og:site_name" content="HMTC ITS - Official Portal">
  <meta property="og:description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta property="og:image" content="assets/img/favicon.png">
  <meta property="og:type" content="website">
  <meta property="fb:app_id" content="">

  <meta name="twitter:card" content="HMTC ITS">
  <meta name="twitter:site" content="HMTC ITS">
  <meta name="twitter:description" content="Himpunan Mahasiswa Teknik Computer-Informatika ITS">
  <meta name="twitter:title" content="HMTC ITS">
  <meta name="twitter:image" content="assets/img/favicon.png">

  <link rel="apple-touch-icon" href="assets/img/favicon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">

  <title>Himpunan Mahasiswa Teknik Computer Informatika ITS</title>

  <link rel="stylesheet" href="assets/css/main.css">
  <script src="assets/js/vendor/modernizr.min.js"></script>
</head>
<body ng-app="hmtc-app" ng-controller="mainController">
  <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->
  <div class="page-loading" ng-class="{'is-hidden': !pageError}">
    <div class="page-loading-container">
      <p><i class="fa fa-frown-o fa-5x"></i></p>
      <p><strong>Sorry, something went wrong. <br>Please reload the page.</strong><p>
    </div>
  </div>
  <div class="page-loading" ng-class="{'is-hidden': !pageLoading}">
    <div class="page-loading-container">
      <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    </div>
  </div>
      
  <div ng-if="!isHome()">
    <a class="btn btn--back">
      <i class="fa fa-arrow-left"></i>
    </a>
    <a class="btn btn--back btn--home" ng-href="#!">
      <i class="fa fa-home"></i>
    </a>
  </div>

  <header>
    <nav class="sitenav">
      <ul class="sitenav-items list-nostyle list-inline">
      <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onArticle}" ng-href="#!/articles">articles</a>
      </li>
      <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onStory}" ng-href="#!/story">story</a>
      </li>
      <li class="sitenav-list">
          <a class="sitenav-anchor" ng-class="{'is-active': navPointer.onMedia}" ng-href="#!/media">media</a>
      </li>
      <li class="sitenav-list">
          <a class="sitenav-anchor" href="#!">connect</a>
      </li>
      </ul>
    </nav>
  </header>

  <main>
    <ng-view></ng-view>
  </main>

  <footer class="footer">
    <div class="container text-center">
          <h4 class="footer-title block-low">Connect with us</h4>
          <ul class=" list-nostyle list-inline block-low">
            <li class="footer-link"><a class="footer-anchor" href="//facebook.com/HMTCFTIf" target="_blank">
              <i class="fa fa-facebook"></i></a>
            </li>
            <li class="footer-link"><a class="footer-anchor" href="//instagram.com/hmtc_its" target="_blank">
              <i class="fa fa-instagram"></i></a>
            </li>
            <li class="footer-link"><a class="footer-anchor" href="//twitter.com/hmtc_its" target="_blank">
              <i class="fa fa-twitter"></i></a>
            </li>
            <li class="footer-link"><a class="footer-anchor" href="//line.me/ti/p/@hmtc_its" target="_blank">
              <small>LINE</small></a>
            </li>
            <li class="footer-link"><a class="footer-anchor" href="//github.com/hmtc-its" target="_blank">
              <i class="fa fa-github"></i></a>
            </li>
          </ul>
          <small>&copy; 2017 Medfo HMTC-ITS</small>
    </div>
  </footer>

  <script>window.myPrefix = '';</script>
  <!-- <script src="https://cdn.polyfill.io/v2/polyfill.js?features=default,promise,fetch"></script> -->
  <script src="assets/js/vendor/jquery.min.js"></script>
  <script src="assets/js/vendor/object-fit-images.min.js"></script>
  <script src="assets/js/vendor/slick.min.js"></script>
  <script src="assets/js/vendor/angular.min.js"></script>
  <script src="assets/js/vendor/angular-slick.min.js"></script>
  <script src="assets/js/vendor/angular-route.min.js"></script>
  <script src="assets/js/vendor/angular-sanitize.min.js"></script>
  <!-- <script src="assets/js/vendor/angular-cookies.min.js"></script> -->
  <!-- <script src="assets/js/vendor/angular-storage.min.js"></script> -->
  <script src="assets/js/main.min.js"></script>
</body>
</html>
