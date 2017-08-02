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
	    		<h1>{{article.title}}</h1>
	    		<p class="no-margin">{{article.date}}</p>
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
		    		{{article.body}}
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
	  
		data: function () {
			return {
				article: {}
			}
		},

		methods: {
	  	scrollToTop: function () {
	  		window.scrollTo(0, 0)
	  	},
			getArticleDetail: function (articleId) {
				const articleDetailAPI = `http://localhost/freeprojects/hmtc-api-php/public/api/getArticleDetail/${articleId}`
			
				this.axios.get(articleDetailAPI)
					.then(res => {
						this.article = {...res.data}
					})
					.catch(err => {
						alert(err)
					})
			}
	  },
	  
		mounted: function () {
	  	this.scrollToTop()
			this.getArticleDetail(this.$route.params.articleId)
	  }
	}
</script>
