<div ng-init="init()">
  <div class="container article-container">
    <div class="bzg">
      <div class="bzg_c" data-col="l8">
        <h1 class="article-title" ng-bind="article.title"></h1>
        <p>
          <i class="fa fa-tag text-blue"></i>
          <strong><span ng-bind="article.dept"></span></strong>
          <span class="space"></span>
          <i class="fa fa-calendar text-blue"></i>
          <strong><span ng-bind="article.date"></span></strong>
        </p>
        <img class="block" ng-src="{{article.thumb}}" alt="{{article.title}}">
        <div class="article-content" ng-bind="article.content">

      </div>
      <div class="bzg_c" data-col="l4">
      </div>
    </div>
    </div>
  </div>
</div>