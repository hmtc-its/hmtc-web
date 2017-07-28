<template>
  <section>
    <nav class="sitenav">
      <ul class="sitenav-items list-nostyle list-inline">
        <li class="sitenav-list"><router-link to="/articles" class="sitenav-anchor">articles</router-link></li>
        <li class="sitenav-list"><router-link to="/media" class="sitenav-anchor">media</router-link></li>
        <li class="sitenav-list"><router-link to="/about" class="sitenav-anchor">story</router-link></li>
        <li class="sitenav-list"><router-link to="/connect" class="sitenav-anchor">connect</router-link></li>
      </ul>
    </nav>
    <div class="container">
      <section class="hero">
        <img class="site-logo" src="../assets/img/logo.png">
        <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
        <img class="hero-video" src="../assets/img/home-vid.jpg">
      </section>
        
      <section class="home-section" id="featured">
        <h1 class="section-title">Featured Articles</h1>
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
      </section>

      <section class="home-section" id="article">
        <div class="bzg">
          <div class="bzg_c" data-col="l8">
            <h1 class="section-title">Recent Articles</h1>
          </div>
          <div class="bzg_c text-right" data-col="l4">
            <form class="">
              <label class="form-label sr-only" for="articleCategory">Category</label>
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
        <div class="bzg_c" data-col="l12" v-show="articleLoading">
          <div class="text-center" style="margin-top:10em">
            <i class="fa fa-circle-o-notch fa-spin fa-3x"></i>
          </div>
        </div>
        <ul class="article-list list-nostyle">
          <li class="article-list-item" v-for="article in articleList[0]">
            <router-link class="article-list-anchor" to="article">
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
      
      <section class="home-section" id="media">
        <h1 class="section-title">Our Media</h1>
      </section>

      <section class="home-section" id="about">
        <h1 class="section-title">Our Story</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eligendi repellat neque facilis, ipsum. Incidunt iusto voluptas ad dolorum vel nostrum ab hic, aspernatur quisquam velit, excepturi, commodi, provident quaerat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus et, error excepturi totam aliquam nihil distinctio, aperiam. Necessitatibus, veritatis laboriosam rem sapiente harum! Iste tenetur, blanditiis quia laboriosam quo perferendis! lorem</p>
        <button class="btn btn--blue">See More</button>
      </section>


    </div>
  </section>
</template>

<script>
  export default {
    name: 'home',

    data: function () {
      return {
        articleList: [],
        articleLoading: true,
        articleTotalPage: 10,
        articleCurrentPage: 0
      }
    },

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
      },
      
      parallax: function () {
        let image = this.$el.querySelector('.hero-video')

        window.onscroll = () => {
          let scrolled = window.pageYOffset
          image.style.transform = `translateY(${scrolled * 0.2}px)`
        }
      }
    },

    mounted: function () {
      this.parallax()
      this.getArticleList(1)
    }
  }
</script>
