<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>fav-icons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="citation_title" content="<?php echo $title; ?>">
    <meta name="citation_journal_title" content="<?php echo $journal_name; ?>">
    <meta name="robots" content="index, follow">
    <?php 
        if(!empty($authors) && isset($authors)) {
            foreach ($authors as $value) {
              echo '<meta name="citation_author" content="'.trim($value).'">'."\n";
            }
        }
        if(!empty($published_date) && isset($published_date)) {

            $timestamp = strtotime($published_date);
            $newDate = date("Y/m/d", $timestamp);

            echo '<meta name="citation_publication_date" content="'.$newDate.'">'."\n";
        }
        if(!empty($accepted_date) && isset($accepted_date)) {
            $timestamp = strtotime($accepted_date);
            $newDate = date("Y/m/d", $timestamp);
            echo '<meta name="citation_online_date" content="'.$newDate.'">'."\n";
        }
        if(!empty($citation_volume) && isset($citation_volume)) {
                echo '<meta name="citation_volume" content="'.$citation_volume.'">'."\n";
        }
        if(!empty($citation_issue) && isset($citation_issue)) {
                echo '<meta name="citation_issue" content="'.$citation_issue.'">'."\n";
        }
        if(!empty($citation_firstpage) && isset($citation_firstpage)) {
              if ($citation_firstpage < 10) {
                $citation_firstpage = '0'.$citation_firstpage;
            }
                echo '<meta name="citation_firstpage" content="'.$citation_firstpage.'">'."\n";
        }
        if(!empty($citation_lastpage) && isset($citation_lastpage)) {
            if ($citation_lastpage < 10) {
                $citation_lastpage = '0'.$citation_lastpage;
            }
            echo '<meta name="citation_lastpage" content="'.$citation_lastpage.'">'."\n";
        }
        if(!empty($issn_number) && isset($issn_number)) {
            echo '<meta name="citation_issn" content="'.$issn_number.'">'."\n";
        }
        if(!empty($doi_name) && isset($doi_name)) {
            echo '<meta name="citation_doi" content="'.$doi_name.'">'."\n";
        }
    ?>
    <?php 
      $keywordsArray = explode(';', $meta_keywords);

      foreach ($keywordsArray as $keyword) {
          echo '<meta name="citation_keywords" content="'.trim($keyword).'">'."\n";
      }
    ?>
    <?php 
   // print_r($$author_affliations);exit;
    if (!empty($author_affliations) && isset($author_affliations)) {
        $affiliationsArray = json_decode($author_affliations, true);

        if (is_array($affiliationsArray)) {
            foreach ($affiliationsArray as $affiliation) {
                echo '<meta name="citation_author_institution" content="'.trim($affiliation).'">'."\n";
            }
        }
    }
    ?>
    <meta name="citation_pdf_url" content="<?php echo base_url(); ?>wp-content/uploads/<?php echo $post_title; ?>.pdf">
    <meta name="citation_fulltext_html_url" content="<?php echo base_url(); ?>fulltextarticles/<?php echo $post_title; ?>.html">
    <meta name="citation_publisher" content="Open Science Publications">
    <meta name="citation_language" content="en">
    <?php 
        if ($json_format === '1') {
            foreach (json_decode($fulltext_info[0]['post_content']) as $key => $value) {
                foreach ($value->tags as $k1 => $v1) {           
                    if($v1->name == 'article_type') {
                        echo '<meta name="citation_article_type" content="'.$v1->value.'">'."\n";
                    }              
                }
            }
            echo '<meta name="citation_abstract_html_url" content="'.base_url().'abstract/'.$post_browser_title_slug.'">'."\n";
        }
    ?>

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

	<!-- Document Title ============================================= -->


<title><?php echo isset($title) ? $title : 'Open Science Journals India | Indian Open Access Journal' ; ?></title>
<?php
if(isset($description) && !empty($description)) {
echo "<meta name='description' content='".$description."'/>";
} else {
echo "<meta name='description' content='".$title."'/>";
}
?>
<?php
if(isset($keywords) && !empty($keywords)) {
echo "<meta name='keywords' content='".$keywords."'/>";
} else {
echo "<meta name='keywords' content='".$title."'/>";
}
?>

<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5ae40b21de20620011e033dd&product=social-ab' async='async'></script>

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
						<li><a target="_blank" href="<?php echo base_url('feed/'); ?>">
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
								<li class="<?php echo (($this->uri->segment(1) == '')?'current':''); ?>"><a href="<?php echo base_url(); ?>home"><div> Home </div> </a> </li> 
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
