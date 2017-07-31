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
    
    data: function () {
      return {
        heroVideo: null
      }
    },

    methods: {
      handleScroll: function () {
        let scrolled = window.pageYOffset
        this.heroVideo.style.transform = `translateY(${scrolled * 0.2}px)`
      }
    },

    mounted: function () {
      this.heroVideo = this.$el.querySelector('.hero-video')
      window.addEventListener('scroll', this.handleScroll)
    },

    destroyed: function () {
      window.removeEventListener('scroll', this.handleScroll);
    }

  }
</script>
