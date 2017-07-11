<template>
  <div id="app">
    <nav class="sitenav">
      <ul class="sitenav-items list-nostyle list-inline">
        <li class="sitenav-list"><a class="sitenav-anchor">about</a></li>
        <li class="sitenav-list"><a class="sitenav-anchor">articles</a></li>
        <li class="sitenav-list"><a class="sitenav-anchor">media</a></li>
        <li class="sitenav-list"><a class="sitenav-anchor">connect</a></li>
      </ul>
    </nav>
    <router-view></router-view>
    
    <router-link to="/">Home</router-link>
    <router-link to="/articles">Articles</router-link>
    <router-link to="/about">About</router-link>
  </div>
</template>

<script>
  export default {
    name: 'app'
  }
</script>

<style lang="scss">
  @import "./assets/sass/main.scss";
</style>
