<!DOCTYPE html>
<html lang="<?php echo language_attributes();?>"> 
<!-- Now lang = "en/anything are shaw as you backend set" -->
<head>
    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php echo bloginfo('charset');?>">
	<!-- charset="show in dashboard. you set anything" -->
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>
	<!-- In modernt wordpress No need to coding . you can remove this line as your wish....-->
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<!-- dynamic in theme option  -->
	<meta name="author" content="www.zerotheme.com">
	<!-- dynamic in theme option -->

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- dynamic in theme option... -->
   
    <!-- CSS
  ================================================== -->
	<!-- Custom Fonts -->

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/<?php echo get_template_directory_uri();?>/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
	<?php wp_head();?>
</head>
<body  <?php body_class();?>>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p>ContacUst@Gmail.com</p></li>
				<li class="phone"><p>08 88888 88888</p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="<?php echo get_template_directory_uri();?>/images/logo.png"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center">Truely the best restaurant in town - The New York Times</h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<!-- <ul class="clearfix">
			<li class="colour-1"><a href="index.html">Home</a></li>
			<li class="colour-2"><a href="menu.html">Menu</a></li>
			<li class="colour-3"><a href="location.html">Location</a></li>
			<li class="colour-4"><a href="archive.html">Blog</a></li>
			<li class="colour-5"><a href="reservation.html">Reservation</a></li>
			<li class="colour-6"><a href="staff.html">Our Staff</a></li>
			<li class="colour-7"><a href="news.html">News</a></li>
			<li class="colour-8"><a href="gallery.html">Gallery</a></li>
		</ul> -->

        <?php wp_nav_menu(array(
            'theme_location'    =>  'header_menu',
            'before'    =>  '',
            'after' =>  '',
            'container' => ' ',
            'menu_class'    => 'clearfix',
            'link_before'   =>  ' ',
            'link_after'    =>  ' ',
            'callback_cb'   =>  'own_msg'
        ));?>
	</nav>
	<!--////////////////////////////////////Container-->
<section id="container" class="sub-page">
	<div class="wrap-container zerogrid">
		<div class="crumbs">
			<ul>
				<?php while(have_posts()):the_post();?>
				<?php if(is_page('HOME')){?>
				<?php } else{?>
				<li><a href="index.html"><?php _e('HOME');?></a></li>
				<?php }?>
				<li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
	<?php endwhile;?>
			</ul>
		</div>
	