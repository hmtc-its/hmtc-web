<div ng-init="initList()">

  <div class="container article-container">
    <div class="bzg">
      <div class="bzg_c" data-col="l8">
        <form>
          <label class="form-label form-label--filter" for="articleCategory"><strong>Articles</strong></label>
          <select class="form-input form-input--category" id="articleCategory" name="articleCategory">
            <option value="">All Categories</option>
            <option value="">Kaderisasi dan Pemetaan</option>
            <option value="">Media dan Informasi</option>
            <option value="">Kegiatan</option>
            <option value="">Sosial Masyarakat</option>
          </select>
        </form>
      </div>
      <div class="bzg_c block text-right" data-col="l4">
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
          <img class="media-list-img block-low" src="assets/img/artikel.jpg" alt="article_image">
          <div class="media-list-desc">
            <h4>[Recap Event] Academy: Technobiz oleh KWU HMTC dan FTIF Festival 2017</h4>
            <small>Wed, Oct 25 2017 - Entrepreneurship</small>
          </div>
        </a>
      </li>
    </ul>


      
  </div>
</div>