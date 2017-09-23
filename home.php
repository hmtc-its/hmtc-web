<div ng-ready="init()" ng-destroy="destroy()">
  <section class="hero">
    <div class="container">
      <img class="site-logo" src="assets/img/logo.png">
      <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
      <video class="hero-video" autoplay loop muted>
        <source src="assets/img/home-vid.mp4" type="video/mp4">
      </video>
      <div class="hero-scroll" href="#!">
        <i class="fa fa-angle-down hero-scroll-arrow"></i>
        <strong>scroll down</strong>
      </div>
    </div>
  </section>

  <section class="home-section article-section">
    <div class="container">
      <h1 class="section-title">Articles</h1>

      <ul class="media-grid list-nostyle clearfix block">
        <li class="media-grid-item media-grid-item--large">
          <a class="media-grid-anchor" ng-href="#!/article/1">
            <img class="media-grid-img" src="assets/img/artikel.jpg" alt="article">
            <div class="media-grid-desc">
              <small>Wed, 25 Oct 2017 - Entrepreneurship</small>
              <h3>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h3>
            </div>
          </a>
        </li>
        <li class="media-grid-item" ng-repeat="x in ['a','b','c','d']">
          <a class="media-grid-anchor" ng-href="#!/article/1">
            <img class="media-grid-img" src="assets/img/artikel.jpg" alt="article_image">
            <div class="media-grid-desc">
              <small>Wed, 25 Oct 2017 - Entrepreneurship</small>
              <p><strong>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</strong></p>
            </div>
          </a>
        </li>
      </ul>

      <div class="bzg block">
        <div class="bzg_c" data-col="l12">
          <form>
            <label class="form-label form-label--filter" for="articleCategory"><strong>Category</strong></label>
            <select class="form-input form-input--category" id="articleCategory" name="articleCategory">
              <option value="">All Categories</option>
              <option value="">Kaderisasi dan Pemetaan</option>
              <option value="">Media dan Informasi</option>
              <option value="">Kegiatan</option>
              <option value="">Sosial Masyarakat</option>
            </select>
          </form>
        </div>
      </div>

      <ul class="media-list list-nostyle block">
        <li class="media-list-item" ng-repeat="x in ['a','b','c','d','e','f']">
          <a class="media-list-anchor" ng-href="#!/article/1">
            <img class="media-list-img block-low" src="assets/img/artikel.jpg" alt="article_image">
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


  <section class="home-section story-section">
    <div class="container">
      <h1 class="section-title">Our Story</h1>
        <!-- <h3>Himpunan Mahasiswa Teknik Computer-Informatika ITS</h3> -->
        
        <div class="bzg text-left">
          <div class="bzg_c" data-col="l2">
            <img class="img-fit block" src="assets/img/logo.png" alt="hmtc_its" style="display:block">
          </div>
          <div class="bzg_c" data-col="l10">
            <h3>HMTC ITS</h3>  
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident officiis itaque voluptatem nihil placeat sint autem, eaque eveniet necessitatibus dolorum fugit delectus perspiciatis quo ut obcaecati quod. Aliquam odio velit necessitatibus autem qui vero saepe natus porro? Eum, mollitia corporis.</p>
            <a class="btn btn--blue" ng-href="#!/about">See more</a>
          </div>
        </div>
        <div class="bzg text-right">
          <div class="bzg_c" data-col="l10">
            <h3>Kabinet Inspirasi 2016/2017</h3>
            <p>Lorem, ipsum dolor sit amet adipisicing elit. Quas in deleniti, accusantium nemo dicta nihil reprehenderit modi assumenda, odit. Explicabo tempore hic fugit eos suscipit animi quaerat, veritatis ad facere obcaecati officiis, est error esse architecto dignissimos mollitia neque maiores impedit?</p>
            <a class="btn btn--blue" ng-href="#!/about">See more</a>
          </div>
          <div class="bzg_c" data-col="l2">
            <img class="img-fit block" src="assets/img/logo-inspirasi.png" alt="hmtc_its" style="display:block">
          </div>
        </div>
    </div>
  </section>
  <section class="home-section media-section">
    <div class="container">
      <h1 class="section-title">Our Media</h1>
      <slick class="media-slider" slides-to-show="1" slides-to-scroll="1" infinite="true" speed="800" dots="true" fade="true">
        <div class="media-slider-wrapper" ng-repeat="media in [1,2,3,4,5,6,7]">
          <div class="media-slider-item">
            <img class="media-slider-img" src="assets/img/media.jpg" alt="media">
            <div class="media-slider-desc">
              <h2>Bluemagz #10</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis magni sit exercitationem itaque officia corporis nostrum temporibus maxime? Odio animi facere libero, dignissimos accusantium rem dolores iste doloribus perspiciatis. Dolor?</p>
              <a class="btn btn--white" ng-href="#!/media">See more</a>
            </div>
          </div>
        </div>      
      </slick>
    </div>
  </section>

</div>