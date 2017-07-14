<template>
  <div class="container">
  	<section class="article-section">
  		<div class="bzg">
  			<div class="bzg_c" data-col="l1">
  				<router-link class="btn btn--blue btn--back" to="/">&lsaquo;</router-link>
  			</div>
  			<div class="bzg_c" data-col="l3">
	    		<h1>Title Ipsum Solor Sit Amet</h1>
	    		<h3>Kaderisasi dan Pemetaan</h3>
	    		<div class="divider"></div>
	    		<h4>November 12 2013</h4>

  			</div>
  			<div class="bzg_c" data-col="l7">
  				<img class="margin-med" src="../assets/img/wideph.png" alt="">
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aliquam laboriosam, voluptatem reprehenderit nostrum minima quia, ut ipsum! Quisquam possimus distinctio nulla iusto voluptatibus atque, eligendi. Voluptate doloribus, officiis et. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, consequatur, minus. Facilis ab ipsa aliquid. Voluptas maiores eos aliquam ipsum aliquid, architecto enim eligendi, dicta quas porro hic accusamus ipsa!</p>
	    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum adipisci ipsam incidunt perferendis aut tenetur expedita minima facilis inventore sint dolores excepturi laborum suscipit quasi provident perspiciatis placeat, obcaecati eum!</p>
  			</div>	
  		</div>
  	</section>
  </div>
</template>

<script>
	export default {
	  name: 'article',
	  methods: {
	  	scrollToTop: () => {
	  		window.scrollTo(0, 0)
	  	}
	  },
	  mounted: function () {
	  	this.scrollToTop()
	  }
	}
</script>
