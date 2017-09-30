<div ng-ready="init()" ng-init="resetNav()">
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

  <section class="home-section article-section" ng-controller="articleController" ng-init="initHome()">
    <div class="container">
      <h1 class="section-title">Articles</h1>

      <ul class="media-grid list-nostyle clearfix block">

        <li class="media-grid-item" 
          ng-repeat="articleLatestItem in articleLatest"
          ng-class="{'media-grid-item--large' : $first}"
        >
          <a class="media-grid-anchor" ng-href="#!/article/{{articleLatestItem.id}}">
            <img class="media-grid-img" ng-src="{{articleLatestItem.thumb}}" alt="{{articleLatestItem.title}}">
            <div class="media-grid-desc">
              <small><span ng-bind="articleLatestItem.date"></span> - <span ng-bind="articleLatestItem.dept"></span></small>
              <h3 ng-class="{'media-grid-title--small': !$first}" ng-bind="articleLatestItem.title"></h3>
            </div>
          </a>
        </li>

      </ul>

      <div class="bzg block">
        <div class="bzg_c" data-col="l6">
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
        <div class="bzg_c text-right" data-col="l6">
          <button class="btn" ng-disabled="pagination.currentPage === 1">
            <i class="fa fa-angle-left"></i>
          </button>
          <button class="btn" ng-disabled="pagination.currentPage === pagination.totalPage">
            <i class="fa fa-angle-right"></i>
          </button>
        </div>
      </div>

      <ul class="media-list list-nostyle block">
        <li class="media-list-item" ng-repeat="article in articleList">
          <a class="media-list-anchor" ng-href="#!/article/{{article.id}}">
            <img class="media-list-img block-low" ng-src="{{article.thumb}}" alt="{{article.title}}">
            <div class="media-list-desc">
              <h4 ng-bind="article.title"></h4>
              <small><span ng-bind="article.date"></span> <span ng-bind="article.category"></span></small>
            </div>
          </a>
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