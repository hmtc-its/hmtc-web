<template>
  <section>
    <sitenav :scrollPointer="scrollPointer" :scrollElement="scrollElement" :scrollSettings="scrollSettings"></sitenav>
    <div class="container">
      <hero></hero>
      <article-list :scrollElement="scrollElement"></article-list>
      <media-list :scrollElement="scrollElement"></media-list>
      <about-list :scrollElement="scrollElement"></about-list>
    </div>
  </section>
</template>

<script>
  import Sitenav from './Sitenav'
  import Hero from './Hero'
  import ArticleList from './ArticleList'
  import MediaList from './MediaList'
  import AboutList from './AboutList'

  export default {
    name: 'home',

    data: function () {
      return {
        scrollElement: {
          article: null,
          media: null,
          about: null
        },

        scrollPointer: {
          onArticle: false,
          onMedia: false,
          onAbout: false
        },

        scrollSettings: {
          offset: 150
        }
      }
    },

    components: {
      ArticleList,
      MediaList,
      Hero,
      Sitenav,
      AboutList
    }

  }
</script>