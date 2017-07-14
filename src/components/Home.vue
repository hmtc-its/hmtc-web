<template>
  <div>
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
        
      <section class="home-section" id="article">
        <h1 class="section-title">Recent Posts</h1>
        <ul class="article-list list-nostyle">
          <li class="article-list-item" v-for="n in 6">
            <router-link class="article-list-anchor" to="article">
              <div class="article-list-img-container">
                <img class="article-list-img" src="../assets/img/squareph.png" alt="">
              </div>
              <div class="article-list-content-container">
                <h3 class="article-list-title">Title Ipsum Dolor Sit Amet Amet Jabang Bayi</h3>
                <small class="article-list-date"><strong>Jun 21 2017</strong></small>
                <p class="article-list-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eligendi repellat neque facilis lorem...</p>
              </div>
            </router-link>
          </li>
        </ul>
        <div class="text-left">
          <ol class="pagination">
            <li><a class="active" href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
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
  </div>
</template>

<script>
  export default {
    name: 'home',
    methods: {
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
    }
  }
</script>
