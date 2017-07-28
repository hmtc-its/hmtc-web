<template>
  <section>
    <sitenav></sitenav>
    <div class="container">
      <hero></hero>
      <featured-list></featured-list>
      <article-list></article-list>
      <media-list></media-list>
      <section class="home-section" id="about">
        <h1 class="section-title">Our Story</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam eligendi repellat neque facilis, ipsum. Incidunt iusto voluptas ad dolorum vel nostrum ab hic, aspernatur quisquam velit, excepturi, commodi, provident quaerat? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus et, error excepturi totam aliquam nihil distinctio, aperiam. Necessitatibus, veritatis laboriosam rem sapiente harum! Iste tenetur, blanditiis quia laboriosam quo perferendis! lorem</p>
        <button class="btn btn--blue">See More</button>
      </section>

    </div>
  </section>
</template>

<script>
  import Sitenav from './Sitenav'
  import Hero from './Hero'
  import ArticleList from './ArticleList'
  import MediaList from './MediaList'
  import FeaturedList from './FeaturedList'

  export default {
    name: 'home',

    components: {
      ArticleList,
      MediaList,
      FeaturedList,
      Hero,
      Sitenav
    }
  }
</script>