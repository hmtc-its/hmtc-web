<template>
	<section class="home-section" id="article">
    <h1 class="section-title">Articles</h1>
    <div class="featured">
      <div class="featured-left">
        <a><img src="../assets/img/wideph.png" alt=""></a>
      </div>
      <div class="featured-right">
        <a><img src="../assets/img/wideph.png" alt=""></a>
        <a><img src="../assets/img/wideph.png" alt=""></a>
        <a><img src="../assets/img/wideph.png" alt=""></a>
        <a><img src="../assets/img/wideph.png" alt=""></a>
      </div>
    </div>
    <div class="bzg">
      <div class="bzg_c" data-col="l6">
        <form class="margin-med">
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
      <div class="bzg_c text-right" data-col="l6">
        <button class="btn btn--trans">
          <i class="fa fa-list"></i>
        </button>
        <button class="btn btn--trans">
          <i class="fa fa-th"></i>
        </button>
      </div>
    </div>
    <div v-show="articleLoading">
      <div class="text-center" style="margin-top:10em">
        <i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
      </div>
    </div>
    <ul class="article-list list-nostyle">
      <li class="article-list-item" v-for="article in articleList[0]">
        <router-link class="article-list-anchor" :to="{path: '/article/' + article.id}">
          <div class="article-list-img-container">
            <img class="article-list-img" :src="article.img" alt="article_image">
          </div>
          <div class="article-list-content-container">
            <h3 class="article-list-title">{{article.title}}</h3>
            <small class="article-list-date"><strong>{{article.date}}</strong></small>
            <p class="article-list-content">{{article.body}}</p>
          </div>
        </router-link>
      </li>
    </ul>
    <div class="text-left">
      <ol class="pagination" >
        <li v-for="page in articleTotalPage">
          <a :class="{ 'is-active': articleCurrentPage === page }" @click="getArticleList(page)">{{page}}</a>
        </li>
      </ol>
    </div>
  </section>
</template>

<script>
  export default {
    name: 'article-list',

    data: function () {
      return {
        articleList: [],
        articleLoading: true,
        articleTotalPage: 10,
        articleCurrentPage: 0
      }
    },

    props: ['scrollElement'],

    methods: {
      getArticleList: function(page) {
        const articleListAPI = `http://localhost/freeprojects/hmtc-api-php/public/api/getArticles/${page}`
        const articleListPointer = {
          start: (page - 1) * 6 + 1,
          end: (page - 1) * 6 + 6
        }

        this.articleLoading = true
        this.articleList = []
        this.axios.get(articleListAPI)
          .then(res => {
            const response = res.data
              .filter((current, index) => {
                return (index >= articleListPointer.start && index <= articleListPointer.end)
              })
            this.articleList.push(response)
            this.articleTotalPage = res.data[0].total_page
          })
          .then(() => {
            this.articleCurrentPage = page
            this.articleLoading = false
          })
          .catch(err => {
            console.log(err)
          })
      }
    },

    mounted: function () {
      this.getArticleList(1)
      this.scrollElement.article = this.$el.offsetTop
    }
  }
</script>
