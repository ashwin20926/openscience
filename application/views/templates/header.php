<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>fav-icons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>fav-icons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>fav-icons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>fav-icons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>fav-icons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>fav-icons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>fav-icons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>fav-icons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>fav-icons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url(); ?>fav-icons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>fav-icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>fav-icons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>fav-icons/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<!-- Stylesheets ============================================= -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700|Roboto:300,400,500,700" rel="stylesheet" type="text/css" /> -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/swiper.css" type="text/css" />

	<!-- Construction Demo Specific Stylesheet -->	
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/construction.css" type="text/css" />
	

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/magnific-popup.css" type="text/css" />

	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/fonts.css" type="text/css" /> -->

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/responsive.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/css/colors.css" type="text/css" />
<link href="<?php echo base_url(); ?>public/css/admin/fine-uploader-gallery.css" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3LYZM394GZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3LYZM394GZ');
</script>
	<!-- Document Title ============================================= -->
	<title> 
	<?php 
		if(!empty($title) && isset($title)) {
			echo "Open Science Journals - ". $title;
		} else {
			echo "Open Science Journals India | Indian Open Access Journal";
		}
	?>
	 </title>

</head>
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin clearfix">

					<p clas7s="nobottommargin"><strong>Call:</strong> +91-9177734525 | <strong> Email:</strong> info@opensciencepublications.com </p>

				</div>

				<div class="col_half fright col_last clearfix nobottommargin">
				
					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-linkedin"><span class="ts-icon"><i class="icon-linkedin"></i></span><span class="ts-text"> Linkedin</span></a></li>
							<li><a href="#" class="si-rss"><span class="ts-icon"><i class="icon-rss"></i></span><span class="ts-text"> RSS </span></a></li>
							<li><a href="#" class="si-blogger"><span class="ts-icon"><i class="icon-blogger"></i></span><span class="ts-text"> Blogger</span></a></li> 
						</ul>
					</div><!-- #top-social end --> 

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="sticky-style-2">

			<div class="container clearfix">
				<div class="col-sm-6">
				<!-- Logo ============================================= -->
					<div id="logo">
						<a href="<?php echo base_url(); ?>" class="standard-logo"><img src="<?php echo base_url(); ?>public/images/opensciencepublications-Logo-New.png" alt="Open Science Publications Logo"></a>
						<a href="index.html" class="retina-logo"><img src="<?php echo base_url(); ?>public/images/opensciencepublications-Logo-New.png" alt="Open Science Publications Logo"></a>
					</div><!-- #logo end --> 
				</div>
				<div class="col-sm-6">
					<ul class="header-top-social-icons">
						<li><a target="_blank" href="https://www.facebook.com/pages/Open-Science-Publications/311075205736189?ref=hl">
							<img src="<?php echo base_url(); ?>public/images/facebook_icon.png" alt="Facebook" /></a>
						</li>
						<li><a target="_blank" href="https://twitter.com/opensciencepubl">
							<img src="<?php echo base_url(); ?>public/images/twitter_icon.png" alt="Twitter" /></a>
						</li>
						<li><a target="_blank" href="http://www.opensciencepublications.com/feed/">
							<img src="<?php echo base_url(); ?>public/images/rss_icon.png" alt="Rss" /></a>
						</li>
						<li><a target="_blank" href="#">
							<img src="<?php echo base_url(); ?>public/images/google_icon.png" alt="Google" /></a>
						</li>
					</ul>
				</div>
			</div>

			<div id="header-wrap">

				
				<!-- Primary Navigation
				============================================= -->
				<nav id="primary-menu" class="style-2">

					<div class="container clearfix">

						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
						<?php //echo $this->uri->segment(1); ?>
							<ul>
								<li class="<?php echo (($this->uri->segment(1) == '')?'
								
								ent':''); ?>"><a href="<?php echo base_url(); ?>home"><div> Home </div> </a> </li> 
								<li class="<?php echo (($this->uri->segment(1) == 'about_us')?'current':''); ?>"><a href="<?php echo base_url(); ?>about_us"><div> About Us </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'journals')?'current':''); ?>"><a href="<?php echo base_url(); ?>journals"><div> Journals </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'submit-manuscript')?'current':''); ?>"><a href="<?php echo base_url(); ?>submit-manuscript"><div> Submit Manuscript </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'membership')?'current':''); ?>"><a href="<?php echo base_url(); ?>membership"><div> Membership </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'latest-articles')?'current':''); ?>"><a href="<?php echo base_url(); ?>latest-articles"><div> Latest Articles </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'register')?'current':''); ?>"><a href="<?php echo base_url(); ?>register"><div> Register </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'policies')?'current':''); ?>"><a href="<?php echo base_url(); ?>policies"><div> Policies </div></a></li>
								<li class="<?php echo (($this->uri->segment(1) == 'contact-us')?'current':''); ?>"><a href="<?php echo base_url(); ?>contact-us"><div> Contact Us </div></a></li>
								 
							</ul> 
						 
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="<?php echo base_url(); ?>search" method="get">
								<input type="text" name="s" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</div>

				</nav><!-- #primary-menu end -->

			</div>

		</header><!-- #header end -->