<template>
  <div id="app">
    <nav class="sitenav">
      <ul class="sitenav-items list-nostyle list-inline">
        <li class="sitenav-list"><router-link to="/about" class="sitenav-anchor">about</router-link></li>
        <li class="sitenav-list"><router-link to="/articles" class="sitenav-anchor">articles</router-link></li>
        <li class="sitenav-list"><router-link to="/media" class="sitenav-anchor">media</router-link></li>
        <li class="sitenav-list"><router-link to="/connect" class="sitenav-anchor">connect</router-link></li>
      </ul>
    </nav>

    <router-view></router-view>

    
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div>
            <h4 class="margin-low">Connect with us</h4>
            <ul class=" margin-low list-nostyle list-inline">
              <li class="footer-link"><a class="footer-anchor" href="//facebook.com/HMTCFTIf">fb</a></li>
              <li class="footer-link"><a class="footer-anchor" href="//instagram.com/hmtc_its">ig</a></li>
              <li class="footer-link"><a class="footer-anchor" href="//twitter.com/hmtc_its">tw</a></li>
              <li class="footer-link"><a class="footer-anchor" href="//line.me/ti/p/@YCP2851V">line</a></li>
            </ul>
            <small>&copy; 2017 hmtc-its</small>
          </div>
          <div>
            <p>jancuk</p>
          </div>
        </div>
      </div>
    </footer>
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
