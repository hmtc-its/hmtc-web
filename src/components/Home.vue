<template>
  <div class="container">
    <section class="hero">
      <img class="site-logo" src="../assets/img/logo.png">
      <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
      <img class="hero-video" src="../assets/img/home-vid.jpg">
    </section>
      
    <section class="home-section" id="about">
      <h1 class="section-title">About</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eligendi repellat neque facilis, ipsum. Incidunt iusto voluptas ad dolorum vel nostrum ab hic, aspernatur quisquam velit, excepturi, commodi, provident quaerat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus et, error excepturi totam aliquam nihil distinctio, aperiam. Necessitatibus, veritatis laboriosam rem sapiente harum! Iste tenetur, blanditiis quia laboriosam quo perferendis!</p>
      <button class="btn btn--blue">Lihat Lebih</button>
    </section>

    <section class="home-section" id="articles">
      <h1 class="section-title">Articles</h1>
    </section>

    <section class="home-section" id="media">
      <h1 class="section-title">Our Media</h1>
    </section>

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
