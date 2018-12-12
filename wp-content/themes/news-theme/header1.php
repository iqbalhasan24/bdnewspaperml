
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <title><?php if(is_front_page()|| is_home()): bloginfo('name'); else: get_the_title(); endif; ?></title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  

<style type="text/css">
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
		    border:1px solid #C6C6C6;    
		    
		  }  
		  .category-title{
		    text-align: center;
		    background-image: linear-gradient(to right, #222222, #555555,#ffffff);
		    color: #ffffff;
		    font-weight: 600;
		    font-size: 1.5em;
		    width: 100%;

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
	padding: 10px;
	display: block;
	overflow: hidden;
}

.cat-img-container{
	border-radius:5px;
	max-width: 100%;
	overflow: hidden; 
	text-align: center;
}

.cat-img-containe, .post-box-container{
	/*border: 1px solid #000012;*/
}
.post-box-container{
	margin-top:3px; 
	margin-bottom:3px; 

}
.single-post-box{
	/*border: 1px solid #C1C1C1;*/
	margin: 1px;
	width: 46%;
	padding: 1%; 
	margin: 1%; 
	float: left;
	/*background: #abc;*/
}
/*+++++++Fornt Page post display design+++++++++++*/

	#top-mega-menu{
		padding: 5px;		
		background: #f04;	
	}
	#top-section{		
		height: auto;
		padding: 5px; 
	}

	.sportlight, .advertisment{
		border: 1px solid #000;
		border-radius: 5px;
	}
	.site-title-container{
		padding:0px  5px;
	}
	
	.site-title{
		background: #4D96FF;
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
		background: #f20000;				
		float: left;
		padding: 10px;
		display: block;
		position: absolute;
    	left: 0;
	}

	#headlines .slide-text{
		max-width: 100%; float: left; padding: 4px; border: 2px solid #000;	display: block;   	
	}


	
	
</style>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- container-main -->
<div id="page" class="container-fluid">

	<div id="top-mega-menu" class="row">
		<div class="col-12">
			<!-- <script type="text/javascript" src="http://bangladate.appspot.com/index2.php"></script> -->
			<script type="text/javascript" src="http://bangladate.appspot.com/index4.php"></script> || <?php _e(date("Y-M-d"));?>  <?php _e(date('l'));  ?>
		</div>
	</div>

	<!-- +++++++++++++++++++++++++++++++Top Section +++++++++++++++++++++++++++++++++++ -->
	<div id="top-section" class="row">
		
		<!-- Sportlight -->
			<div class="col-sm-3 sportlight">
				Sportlight
			</div>
		<!-- End Sportlight -->

		<!--Site Title-->
		<div id="" class="col-sm-5 site-title-container">			
			<div id="" class="site-title">	

				<div class="row">
					<div class="col-3">
			        <?php
			        	$custom_logo_id = get_theme_mod( 'custom_logo' );
						$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
						if ( has_custom_logo() ) {
							?>
							<a href="<?php echo get_option('home'); ?>/">

							<?php
						        echo "<img class='mg-fluid' src='". esc_url( $logo[0] ) ."' style='max-height:80px;'></a>";
						} 
			        ?>
			        	
		        	</div>
			        <div class="col-9">		
						<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
						<h4><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('description'); ?></a></h4>			
					</div>
				</div>

			</div>
		</div>
		<!--End Site Title-->

		<!-- Advertisment -->
		<div id=""  class="col-sm-4 advertisment">
			<img src="" alt="Advertisment"> 
		</div>
		<!-- End Advertisment -->
	</div>
	<!-- +++++++++++++++++++++++++++++++ End Top Section +++++++++++++++++++++++++++++++++++ -->


	<!-- ++++++++++++++++++++++++++++++++++++ Primary Menu +++++++++++++++++++++++++++++++++ -->
	
		<div class="primary-menu row" > 
			<nav class="navbar navbar-expand-sm  bg-primary navbar-dark" style="width:100%">
	         	<?php
			        $arg = array(
							'theme_location' 	=> 'primary-menu',
							'container'       	=> 'ul',
							'menu_class'     	=> 'navbar-nav',
							);
					wp_nav_menu($arg);
				?>
	      </nav>
	   </div>
 
	<!-- ++++++++++++++++++++++++++++++End Primary Menu +++++++++++++++++++++++++++++++++++++ -->


	<!-- +++++++++++++++++++++++++++++++ Headlines  Slide +++++++++++++++++++++++++++++++++++ -->
	<div id="headlines" class="row">
		 <div class="headlines-tag"> 
		 		<span> headlines </span>
		 </div>
		 <div class="slide-text">
			<MARQUEE  onMouseOver="this.stop()" onMouseOut="this.start()">
				 <?php $posts_query = new WP_Query('posts_per_page=-1');
				        while ($posts_query->have_posts()) : $posts_query->the_post();
				    ?>
				    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> | </a>
				    <?php endwhile; wp_reset_query(); ?>			
			</MARQUEE>		 	
		 </div>
	</div>
	<!-- +++++++++++++++++++++++++++++++ End Headlines  Slide +++++++++++++++++++++++++++++++ -->