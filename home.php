<section class="hero">
  <div class="container">
    <img class="site-logo" src="assets/img/logo.png">
    <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
    <!-- <div class="hero-video"></div> -->
    <video class="hero-video" autoplay loop muted>
      <source src="assets/img/home-vid.mp4" type="video/mp4">
    </video>
    <a class="hero-scroll" href="#!">
      <i class="fa fa-angle-down hero-scroll-arrow"></i>
      <strong>scroll down</strong>
    </a>
  </div>
</section>

<section class="home-section article-section" ng-ready="init()">
  <div class="container">
    <h1 class="section-title">Articles</h1>

    <ul class="media-grid list-nostyle clearfix block">
      <li class="media-grid-item media-grid-item--large">
        <a class="media-grid-anchor" ng-href="#!/article/1">
          <img class="media-grid-img" src="assets/img/squareph.png" alt="article">
          <div class="media-grid-desc">
            <h3>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
          </div>
        </a>
      </li>
      <li class="media-grid-item" ng-repeat="x in ['a','b','c','d']">
        <a class="media-grid-anchor" ng-href="#!/article/1">
          <img class="media-grid-img" src="assets/img/squareph.png" alt="article_image">
          <div class="media-grid-desc">
            <p><strong>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</strong></p>
          </div>
        </a>
      </li>
    </ul>

    <div class="bzg block">
      <div class="bzg_c" data-col="l6">
        <form>
          <label class="form-label form-label--filter" for="articleCategory">Filter</label>
          <select class="form-input form-input--category" id="articleCategory" name="articleCategory">
            <option value="">All Categories</option>
            <option value="">Kaderisasi dan Pemetaan</option>
            <option value="">Media dan Informasi</option>
            <option value="">Kegiatan</option>
            <option value="">Sosial Masyarakat</option>
          </select>
        </form>
      </div>
      <div class="bzg_c text-right hide-on-small" data-col="l6">
        <button class="btn btn--trans">
          <i class="fa fa-list"></i>
        </button>
        <button class="btn btn--trans">
          <i class="fa fa-th"></i>
        </button>
      </div>
    </div>

    <ul class="media-list list-nostyle block">
      <li class="media-list-item" ng-repeat="x in ['a','b','c','d','e','f']">
        <a class="media-list-anchor" ng-href="#!/article/1">
          <img class="media-list-img block-low" src="assets/img/wideph.png" alt="article_image">
          <div class="media-list-desc">
            <h4>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h4>
            <small>Wed, Oct 25 2017 - Entrepreneurship</small>
          </div>
        </a>
      </li>
    </ul>

    <ul class="pagination text-center">
      <li ng-repeat="page in [1,2,3,4]">
        <a ng-class="{'is-active': isPageActive === page}" ng-bind="page" href="#!"></a>
      </li>
    </ul>
  </div>
</section>

<section class="home-section media-section">
  <div class="container">
    <h1 class="section-title">Our Media</h1>
    <ul class="media-grid list-nostyle">
      <li class="media-grid-item media-grid-item--large">
        <a class="media-grid-anchor" href="#!">
          <img class="media-grid-img" src="assets/img/squareph.png" alt="article">
        </a>
      </li>
      <li class="media-grid-item" ng-repeat="x in ['a','b','c','d']">
        <a class="media-grid-anchor" href="#!">
          <img class="media-grid-img" src="assets/img/squareph.png" alt="article">
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="home-section story-section">
  <div class="container">
    <h1 class="section-title">Our Story</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque autem voluptas omnis magnam quasi amet reprehenderit fuga corrupti, dolorum laboriosam, aliquam enim iusto ad dolor provident recusandae eligendi maxime sint obcaecati. Voluptas ullam alias architecto asperiores aspernatur amet, nam temporibus eveniet exercitationem. Dicta, deserunt, consectetur ad beatae minima hic praesentium temporibus omnis enim corrupti consequuntur? Aliquam quod, commodi, explicabo qui saepe laborum similique quae, minima sunt quia maxime quasi nulla deserunt a quaerat! Iste, aliquid asperiores sunt accusantium aut nemo dolorem. In beatae optio magnam dolores itaque commodi, inventore ex eum a, error quos accusantium explicabo. Soluta maiores possimus voluptas.</p>
  </div>
</section>