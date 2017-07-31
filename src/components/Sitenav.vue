<template>
	<nav class="sitenav">
    <ul class="sitenav-items list-nostyle list-inline">
      <li class="sitenav-list"><router-link to="/articles" class="sitenav-anchor" :class="{'is-active': scrollPointer.onArticle}">articles</router-link></li>
      <li class="sitenav-list"><router-link to="/media" class="sitenav-anchor" :class="{'is-active': scrollPointer.onMedia}">media</router-link></li>
      <li class="sitenav-list"><router-link to="/about" class="sitenav-anchor" :class="{'is-active': scrollPointer.onAbout}">story</router-link></li>
      <li class="sitenav-list"><router-link to="/connect" class="sitenav-anchor">connect</router-link></li>
    </ul>
  </nav>
</template>

<script>
  export default {
    name: 'sitenav',
  
    props: ['scrollPointer', 'scrollSettings', 'scrollElement'],

    methods: {
      scrollWatch: function () {
        this.emptyAllPointer()

        if ( window.pageYOffset >= (this.scrollElement.about - this.scrollSettings.offset) ) {
          this.scrollPointer.onAbout = true
        }
        else if ( window.pageYOffset >= (this.scrollElement.media - this.scrollSettings.offset) ) {
          this.scrollPointer.onMedia = true
        }
        else if ( window.pageYOffset >= (this.scrollElement.article - this.scrollSettings.offset) ) {
          this.scrollPointer.onArticle = true
        }
      },

      emptyAllPointer: function () {
        this.scrollPointer.onArticle = false
        this.scrollPointer.onMedia = false
        this.scrollPointer.onAbout = false
      }
    },

    mounted: function () {
      window.addEventListener('scroll', this.scrollWatch)
    },

    destroyed: function () {
      window.removeEventListener('scroll', this.scrollWatch)
    }
    
  }
</script>
