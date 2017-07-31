<template>
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
</template>

<script>
  export default {
    name: 'featured-list',

    props: ['scrollElement'],

    mounted: function () {
      this.scrollElement.article = this.$el.offsetTop
    }
  }
</script>
