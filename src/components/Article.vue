<template>
  <section class="article-section">
  	<div class="container">
	
  		<div class="bzg">	

  			<div class="bzg_c" data-col="l1">
  				<router-link class="btn btn--blue btn--back" to="/">
  					<i class="fa fa-angle-left fa-2x"></i>
  				</router-link>
  			</div>

  			<div class="bzg_c" data-col="l3">
	    		<h1>Title Ipsum Solor Sit Amet</h1>
	    		<p class="no-margin">Selasa, Nov 12 2013</p>
	    		<h3>Kaderisasi dan Pemetaan</h3>
	    		<div>
	    			<div class="divider"></div>
	    		</div>
					<a class="btn btn--share --facebook"><i class="fa fa-facebook"></i></a>
					<a class="btn btn--share --twitter"><i class="fa fa-twitter"></i></a>
					<a class="btn btn--share --gplus"><i class="fa fa-google-plus"></i></a>
  			</div>

  			<div class="bzg_c" data-col="l7">
  				
  				<div class="article-content">
	  				<img class="margin-med" src="../assets/img/wideph.png" alt="">
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aliquam laboriosam, voluptatem reprehenderit nostrum minima quia, ut ipsum! Quisquam possimus distinctio nulla iusto voluptatibus atque, eligendi. Voluptate doloribus, officiis et. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, consequatur, minus. Facilis ab ipsa aliquid. Voluptas maiores eos aliquam ipsum aliquid, architecto enim eligendi, dicta quas porro hic accusamus ipsa!</p>
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum adipisci ipsam incidunt perferendis aut tenetur expedita minima facilis inventore sint dolores excepturi laborum suscipit quasi provident perspiciatis placeat, obcaecati eum!</p>
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aliquam laboriosam, voluptatem reprehenderit nostrum minima quia, ut ipsum! Quisquam possimus distinctio nulla iusto voluptatibus atque, eligendi. Voluptate doloribus, officiis et. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis, consequatur, minus. Facilis ab ipsa aliquid. Voluptas maiores eos aliquam ipsum aliquid, architecto enim eligendi, dicta quas porro hic accusamus ipsa!</p>
  				</div>
				  
				  <div class="article-comment">
				  	<h2 class="section-title">Comment</h2>
				  	<form>
				  		<div class="form__row">
				  			<label class="form-label sr-only" for="commentName">Name</label>
				  			<input class="form-input form-input--block" id="commentName" type="text" placeholder="Your Name">
				  		</div>
				  		<div class="form__row">
				  			<label class="form-label sr-only" for="commentContent">Comment</label>
				  			<textarea class="form-input form-input--block" id="commentName" rows="5" placeholder="Your Comment"></textarea>
				  		</div>
				  		<div class="form__row">
				  			<button class="btn btn--blue">Submit Comment</button>
				  		</div>
				  	</form>
				  </div>

				  <!-- <div class="article-nav">
							<a class="btn btn--article">
								<i class="fa fa-angle-left fa-3x"></i>
								<h3 class="no-margin">Previous Article</h3>
							</a>
							<a class="btn btn--article">
								<i class="fa fa-angle-right fa-3x"></i>
								<h3 class="no-margin">Next Article</h3>
							</a>
				  </div> -->


  			</div>	

  		</div>

  	</div>
  </section>
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
