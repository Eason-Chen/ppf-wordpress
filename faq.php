<?php
/*
Template Name: FAQ Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name'); ?></title>

	 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
</head>

<body>
	<!-- navigation start -->
	<div class="wrapper">
		<nav class="container">
			<ul>
				<li><a href="<?php echo home_url(); ?>#who">Who We Are</a></li>
				<li><a href="<?php echo home_url(); ?>#what">What We Do</a></li>
				<li><a href="<?php echo home_url(); ?>/project">Pervious Projects</a></li>
				<li><a href="<?php echo home_url(); ?>/faq" class="current">FAQS</a></li>
				<li><a href="<?php echo home_url(); ?>#contact">Contact Us</a></li>
			</ul>
		</nav>
	</div>
	<!-- navigation end -->

	<!-- project start -->
	<div class="wrapper faq_bg">
		<section class="container">
			<h2>FAQ'S</h2>
			<div class="minus_area">
				<?php
					$faqPost = new WP_Query('cat=5');

					if ($faqPost->have_posts()) :
						while ($faqPost->have_posts()) : $faqPost->the_post();
				?>
				<div class="faqs">
				<h3><?php the_title(); ?></h3>
				<?php the_content(); ?>
				</div>
				<?php
						endwhile;
					else :
						echo '<p>No content found</p>';
					endif;

					wp_reset_postdata();
				?>
			</div>
		</section>
	</div>
	<!-- who we are end -->

	<!-- contact start -->
	<div class="wrapper">
		<section class="container">
			<div class="copy">Copyright &copy; 2015 Citron Created by <a href="http://www.3a.co.nz">3A web solution</a></div>
		</section>
	</div>
	<!-- contact end -->
	<?php wp_footer(); ?>
</body>
</html>