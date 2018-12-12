
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <title><?php if(is_front_page()|| is_home()): bloginfo('name'); else: get_the_title(); endif; ?></title>
  
  <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!-- Website SEO -->
  		
		<title> <?php _e(get_the_title()); ?> </title>
		<meta name="keywords" content="" />
		<meta name="description" content="<?php echo wp_trim_words( get_the_content(), 40); ?>" />
		
		<!--for fb -->
		<meta property="og:title" content="<?php _e(get_the_title()); ?>" />
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php _e(wp_trim_words(get_the_content(),25)); ?>" />
		<meta property="og:type" content="article" />
		<!--<meta property="article:author" content="[author_link]" />-->
						
		<meta property="og:url" content="<?php _e(get_permalink()); ?>" />
		
		<meta property="og:image" content="<?php _e(get_the_post_thumbnail_url()); ?>" />
		<meta property="og:image:width" content="600" />
		<meta property="og:image:height" content="315" />
		<meta name="fb:app_id" property="fb:app_id" content="1608610629250627" />
	
  <!-- End Website SEO -->

  

<style type="text/css">

@font-face{
	font-family: Durwent;
	src: url('/wp-content/themes/news-theme/font/Durwent.ttf');
}
@font-face{
	font-family: LudlowStrongAle;
	src: url('/wp-content/themes/news-theme/font/LudlowStrongAle.ttf');
}

p, h1, h2, h3, h4, h5, h6, a {
		/*font-family: SolaimanLipi, Kiron, Arial, Vrinda, FallbackBengaliFont, Helvetica, sans-serif  !important;*/
		font-family: SolaimanLipi !important;
		color: #000;	
		font-weight: 550;
	}
/*++++++++++++++++++++++++*/





body {
    margin: 0;
    overflow-x: hidden;
    overflow-y: scroll;
    font-family: SolaimanLipi !important;
    font-size: 16px;
    line-height: 1.3;
    background-color: #ffffff;
    color: #333;

}
*, :after, :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}
/*++++++++++++++++++++++++*/

/*++++++++++++++++*/
		.special-text span{
			background: #f00;
			/*padding: 0 2px;*/
			color: #ffffff;
		}

/*++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++++++++*/
 .first-letter-design{
  	border-bottom: 3px solid #3B6186;
  	width: 100%;
  }

.first-letter-design > a > h4::first-letter {    
    font-weight: 600;
    color: #ffffff;
    background: #3B6186;
    padding: 2px;
    margin: 0px 2px 0px 0px ;
    border-bottom: 4px solid #3B6186;   
}
.first-letter-design > a > h4{	
    padding: 0 !important;
    margin: 0 !important;
}
/*++++++++++++++++++++++++++++++++++++++++++*/

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #bb1919;
}
.nav-pills .nav-link {
    border-radius: .25em;
    background: #6c757d;
    color: #000;
}


.alert-spinner {
    width: 20px;
    height: 20px;
    display: inline-block;
    margin-right: 5px;
    position: relative;
    vertical-align: middle;
}

.double-bounce1,
.double-bounce2 {
    background: #f20000;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    opacity: 0.7;
    position: absolute;
    top: -2px;
    left: 0;
    -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
    animation: sk-bounce 2.0s infinite ease-in-out;
}

.double-bounce2 {
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
}

/*++++++++++++Slider++++++++++++++++*/
 .carousel-inner img {
      width: 100%;
      height: 100%;
  }
/*++++++++++++Slider++++++++++++++++*/



		.each-row{
			margin-bottom: 20px;
		}
		.inner-row{
			margin-bottom: 12px;
		}

/*++++++++++++++++++cat-post-container with number point++++++++++++++++++++++++++++*/
		/*========================================*/
		  
		  .cat-title{
				display: block;
			 	width: 100%;			 	
			 	color: #000000;
			 	padding:3px 0px;
			}
		  .cat-post-container a:hover{
		    text-decoration: none;
		    }
		  .cat-post-container{   
		    padding: 5px;
		    height: 100%;
		    border:1px solid #EFF5F9;    
		    
		  }  
		  .category-title{
		     /*text-align: center;
		  	 background-image: linear-gradient(to right, #4B409A,#4B409A);
		    color: #ffffff;*/
		    font-weight: 650;
		    font-size: 1.3em;
		    width: 100%;
		    /*border-radius: 3px;*/
		    border-bottom: 4px solid #59A1F0;
		    /*padding:4px 30px;*/

		  }

		  .category-title a{
		  		color: #ffffff;
		  }

		  .single-number-point, .double-number-point{
		       color: #fff; 
		       background: #000; 
		       border-radius: 50%;
		       font-weight: 900;
		       
		   } 

		  .single-number-point{
		        padding: 5px 8px;
		  }
		  .double-number-point{
		        padding: 7px 5px;
		  }
		  .list-group-item {
		     text-align: justify;
		  }

		/*========================================*/
		
		/*========================================*/
			

			.lead-title{
				text-align: center;
				font-size: 1.2em;
				font-weight: 600;
				padding: 8px; 
				background: #C2C2C2;
				
			}
			.lead-title a{
				color: #CC0000;
				text-decoration: none;
			}
		/*========================================*/



  /*++++++++++++++++++End cat-post-container+++++++++++++++++++++++++*/



body{
	background: #F9F9FD;
}



nav-tabs .nav-link {
	text-align: center;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    
    background-color: #f00;
    border-color: #dee2e6 #dee2e6 #fff;
    text-align: center;
    color: #fff;
}









.head-title{ display: block;
			padding: 6px;
			width: 100%;
			background: #BFC0BD;
			text-align: center;
			font-weight: 600;
			font-size: 1.5em; 

 }
 .query-title-box{
 	display: block;
 	padding: 8px;

 }
 .title-text{
 	display: block;
 	width: 100%;
 	line-height: 200%;
 	color: #000000;
 	padding:3px 0px;
 	border-bottom: 1px solid #DEEBE4;
 }

 .latest-news{
 	display: block;
 	width: 100%;
 	padding: 5px;
 	border: 1px solid #DEEBE4;
 }


/*+++++++Fornt Page post display design+++++++++++*/


.box-container{
	max-width: 100%;
	/*border: 1px solid #000012;*/
	padding:0px 10px;
	display: block;
	overflow: hidden;
}

.cat-img-container{
	border-radius:5px;
	width: 100%;
	overflow: hidden; 
	/*text-align: center;*/
	font-size: 1.3em;
}

.cat-img-containe, .post-box-container{
	/*border: 1px solid #000012;*/
}

.cat-title-center{
	text-align: center;
	display: block;
    width: 100%;
    color: #000000;
    padding: 3px 0px;
}
.post-box-container{
	margin-top:3px; 
	margin-bottom:3px; 

}
.single-post-box{
	/*border: 1px solid #C1C1C1;*/
	
	width: 46%;
	padding: 1%; 
	margin: 1%; 
	float: left;
	/*background: #abc;*/
}

.lead-post-box{
	text-align:justify;
}

.lead-news-box{	
	width: 15%;
	padding: .5%; 
	margin:.7%; 
	float: left;
	text-align:justify

}
/*+++++++Fornt Page post display design+++++++++++*/
	.main-menu {
		background: #bb1919;
	}

	.navbar-dark .navbar-nav .nav-link{
		color:#fff !important;
		text-rendering: optimizeLegibility;

		font-size: 1.5em !important;
		font-weight: 600 !important;
	}
	#top-mega-menu{
		padding: 5px;		
		background: #f04;	
	}
	#top-section{		
		height: auto;
		padding: 5px 0px; 
	}

	.sportlight, .advertisment{
		border: 1px solid #000;
		border-radius: 5px;
	}
	.site-title-container{
		padding:0px  5px;
	}
	
	.site-title{
		/*background: #4D96FF;*/
		padding: 5px;
		text-align:center;

	}
	.site-title h1 > a , .site-title h2 > a, .site-title p > a,.site-title h3 > a{
		color: #f00;
	}

	#top-section #logo{		
		
		overflow: hidden;		
		background: #704;
		padding: 5px;

	}
	#top-section #site-title{
		
		
		
		padding: 5px;
	}

	#top-section #site-title h1{
		font-size: 26px;
		font-weight: bold;
		
	}

	#top-section #site-title h2{
		font-size: 18px;
		font-weight: normal;		
	}



	#headlines{
		width: 100%;				
		height: auto;		
		position: relative;
		margin-bottom: 20px;
		display:block;
    	min-height: 2em;

    
		
	}
	#headlines .headlines-tag{
		text-transform: uppercase;		
		background: #4db2ec;				
	    font-size: 1.2em;
	    font-weight: 700;
	    line-height: 19px;
   		border-radius: 3px;
    	color: #fff;
		padding: 0px 14px;
		display: block;
		position: absolute;
    	left: 0px;
		float: left;
		margin-top: 5px;
	}




	#headlines .slide-text{
		max-width: 100%; float: left; padding: 4px; /*border: 2px solid #000;*/	display: block;   	
	}

	.top-social-media-menu ul.top-media-menu li {
			    display: inline-block;
			    margin-right: 20px;
			}
	.top-social-media-menu ul.top-media-menu{
		margin: 0 !important;
		float: right;
	} 
	.top-social-media-menu ul.top-media-menu li a{
		color: #ffffff;
	}

	.site-info h3 .site-name a{
		font-family: Durwent !important;
	}
	.site-info h5 .site-description a{
		font-family:LudlowStrongAle !important;
	}
	


	.left-stick{
		content: ' ';
	    overflow: hidden;
	    width: 2px;
	    height: 15px;
	    float: left;
	    margin-top: 3px;
	    margin-right: 8px;
	    background: #d84315;
	}

.whole_wrapper {
    width: 85%;
    max-width: 1280px;
    margin: 0 auto;    
    background: #fff;
    box-shadow: 0 0 20px #000;
    padding: 0 20px;
    overflow: hidden;
}

h2.prayer-time {
    display: none !important;
}	

</style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- container-main -->
<!-- <div id="top"> </div> -->
<div id="page" class="whole_wrapper" >

	<div id="top-mega-menu" class="row">
		<div class="col-8">
		<!-- 	<script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script> || -->
			<script type="text/javascript" src="http://bangladate.appspot.com/index4.php"></script> || <?php _e(date("Y-M-d"));?>  <?php _e(date('l'));  ?>
		</div>
		<div class="col-4">
			<?php if ( has_nav_menu( 'media-menu' ) ): ?>
			    <div class="col-12 top-social-media-menu" style="width: 100%;">
			    	<?php    			
			 			
					        $footer_menu_one = array(
								'theme_location' 	=> 'top-media-menu',							
								'container'       	=> 'ul',
								'menu_class'     	=> 'top-media-menu',
								
								);
								wp_nav_menu($footer_menu_one);
							
					?>
			    </div>
			<?php endif; ?> 
		</div>
	</div>

	

	<!-- +++++++++++++++++++++++++++++++Top Section +++++++++++++++++++++++++++++++++++ -->
	<div id="top-section" class="row">
		
		<!-- Sportlight -->
			<div class="col-sm-4 sportlight">
				<?php 
					//get_sportlight_post_title($cat_id, $post_no) 

					get_sportlight_post_title( 14, 1); 
				?>
			</div>
		<!-- End Sportlight -->

		<!--Site Title-->
		<div id="" class="col-sm-4 site-title-container">			
			<!-- <div id="" class="site-title"> -->	

				<div class="row">
					<div class="col">
			        <?php
			        	$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
							?>
							<a href="<?php echo get_option('home'); ?>/">

							<?php
						        echo "<img class='img-responsive mg-fluid' src='". esc_url( $logo[0] ) ."'   width='100%'></a>";
						} 
			        ?>
			        	
		        	</div>
			      
				</div>

			<!-- </div> -->
		</div>
		<!--End Site Title-->

		<!-- Advertisment -->
		<div id=""  class="col-sm-4 advertisment" style="background-image: linear-gradient(to right, #C90000, #C5005D,#92000D);">
			<!-- <img src="" alt="Advertisment"> --> 
		</div>
		<!-- End Advertisment -->
	</div>
	<!-- +++++++++++++++++++++++++++++++ End Top Section +++++++++++++++++++++++++++++++++++ -->


	<!-- ++++++++++++++++++++++++++++++++++++ Primary Menu +++++++++++++++++++++++++++++++++ -->
	
		<div class="primary-menu row" >
	      <nav class="navbar navbar-expand-lg navbar-light bg-light main-menu" style="background:#000 !important; width:100%; margin-bottom: 2px;">
			  <!-- <a class="navbar-brand" href="/">প্রচ্ছদ</a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">

			  	<?php
			        $arg = array(
							'theme_location' 	=> 'primary-menu',
							'container'       	=> 'ul',
							'menu_class'     	=> 'navbar-nav mr-auto',
							);
					wp_nav_menu($arg);
				?>

				<?php //get_search_form(); ?>
			  
			    <!-- <form class="form-inline my-2 my-lg-0">
			      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			    </form> -->
			  </div>
			</nav>
	   </div>
 
	<!-- ++++++++++++++++++++++++++++++End Primary Menu +++++++++++++++++++++++++++++++++++++ -->


	<!-- +++++++++++++++++++++++++++++++ Headlines  Slide +++++++++++++++++++++++++++++++++++ -->
	<div id="headlines" class="row">
		 <div class="headlines-tag"> 
		 		<!-- <div class="alert-spinner">
	                <div class="double-bounce1"></div>
	                <div class="double-bounce2"></div>
	            </div> -->

		 		<span style="font-family: SolaimanLipi !important; font-weight: 600; font-size: 1.3em; color: #fff; "> সর্বশেষ </span>
		 </div>
		 <div class="slide-text">
			<MARQUEE  onMouseOver="this.stop()" onMouseOut="this.start()">
				 <?php $posts_query = new WP_Query('posts_per_page=-1');
				        while ($posts_query->have_posts()) : $posts_query->the_post();
				    ?>
				   <a href="<?php the_permalink(); ?>" style="font-size: 1.2em;"> <img src="<?php _e(the_post_thumbnail_url('thumbnail')); ?>" height="22">  <?php the_title(); ?> | </a>
				    <?php endwhile; wp_reset_query(); ?>			
			</MARQUEE>		 	
		 </div>
	</div>
	<!-- +++++++++++++++++++++++++++++++ End Headlines  Slide +++++++++++++++++++++++++++++++ -->
