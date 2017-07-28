<template>
  <section class="hero">
    <img class="site-logo" src="../assets/img/logo.png">
    <h1 class="hero-title">himpunan mahasiswa teknik computer-informatika ITS</h1>
    <img class="hero-video" src="../assets/img/home-vid.jpg">
  </section>
</template>

<script>
  export default {
    name: 'hero',
    
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
