<template>
  <div id="app">

    <router-view></router-view>

    
    <footer class="footer">
      <div class="container">
        <div class="footer-container">
          <div>
            <h4 class="margin-low footer-title">Connect with us</h4>
            <ul class=" margin-low list-nostyle list-inline">
              <li class="footer-link"><a class="footer-anchor" href="//facebook.com/HMTCFTIf"><i class="fa fa-facebook"></i></a></li>
              <li class="footer-link"><a class="footer-anchor" href="//instagram.com/hmtc_its"><i class="fa fa-instagram"></i></a></li>
              <li class="footer-link"><a class="footer-anchor" href="//twitter.com/hmtc_its"><i class="fa fa-twitter"></i></a></li>
              <li class="footer-link"><a class="footer-anchor" href="//line.me/ti/p/@YCP2851V"><small>LINE</small></a></li>
            </ul>
            <small>&copy; 2017 hmtc-its</small>
          </div>
          <div>
            <p>Lorem ipsum dolor sit amet</p>
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
