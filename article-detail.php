<div ng-init="initDetail()">

  <div class="container article-container">
    <div class="bzg">
      <div class="bzg_c" data-col="l8">
        
        <div class="breadcrumb">
          <ul class="list-nostyle list-inline">
            <li class="breadcrumb-item"><a class="breadcrumb-anchor" ng-href="#!/articles">Articles</a></li>
            <li class="breadcrumb-item"><a class="breadcrumb-anchor" ng-href="#!/articles/{{article.categoryId}}" ng-bind="article.category"></a></li>
            <li class="breadcrumb-item breadcrumb-item--article"><a class="breadcrumb-anchor" ng-href="#!/article/{{article.id}}" ng-bind="article.title | limitTo: 50"></a></li>
          </ul>
        </div>

        <h1 class="article-title" ng-bind="article.title"></h1>
        <p>
          <i class="fa fa-tag text-blue"></i>
          <strong><span ng-bind="article.dept"></span></strong>
          <span class="space"></span>
          <i class="fa fa-calendar text-blue"></i>
          <strong><span ng-bind="article.date"></span></strong>
        </p>

        <img class="block" ng-src="{{article.thumb}}" alt="{{article.title}}">
        <div class="article-content" ng-bind-html="article.content"></div>

      </div>
      <div class="bzg_c" data-col="l4">
        <div class="article-sidebar">
          <h2 class="section-title section-title--white">Latest</h2>
          <ul class="list-nostyle article-sidebar-list">
            <li class="article-sidebar-item" ng-repeat="articleLatestItem in articleLatest">
              <a class="article-sidebar-anchor" ng-href="#!/article/{{articleLatestItem.id}}">
                <img class="article-sidebar-img" ng-src="{{articleLatestItem.thumb}}" alt="{{articleLatestItem.title}}">
                <p class="article-sidebar-title">
                  <span ng-bind="articleLatestItem.title | limitTo:42"></span><br>
                  <small ng-bind="articleLatestItem.date"></small>
                </p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>