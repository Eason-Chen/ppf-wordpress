<?php
/*
Template Name: Home Template
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
	<!-- header start -->
	<header id="top">
		<div class="header_bg">
			<img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" height="103" width="205" alt="">
		</div>
	</header>
	<!-- header end -->

	<!-- navigation start -->
	<div class="wrapper">
		<nav class="container">
			<ul>
				<li><a href="#who">Who We Are</a></li>
				<li><a href="#what">What We Do</a></li>
				<li><a href="javascript:" onClick="window.location.href='<?php echo home_url(); ?>/project';return false">Pervious Projects</a></li>
				<li><a href="javascript:" onClick="window.location.href='<?php echo home_url(); ?>/faq';return false">FAQS</a></li>
				<li><a href="#contact">Contact Us</a></li>
			</ul>
			<div class="top"><a href="#top">Top</a></div>
		</nav>
	</div>
	<!-- navigation end -->

	<!-- who we are start -->
	<div class="wrapper who_bg" id="who">
		<section class="container">
			<h2>Who We Are</h2>
			<?php
				$whoPost = new WP_Query('cat=1');

				if ($whoPost->have_posts()) :
					while ($whoPost->have_posts()) : $whoPost->the_post();
			?>
			<div class="staffs">
				<?php the_post_thumbnail('who-thumbnail'); ?>
				<div class="who_names"><?php the_title(); ?></div>
				<div class="who_titles"><?php echo get_post_meta($post->ID, "title_value", true); ?></div>
				<div class="who_des"><?php the_content(); ?></div>
			</div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
			?>
		</section>
	</div>
	<!-- who we are end -->

	<!-- what we do start -->
	<div class="wrapper what_bg" id="what">
		<section class="container">
			<h2>What We Do</h2>
			<?php
				$whatPost = new WP_Query('cat=2');

				if ($whatPost->have_posts()) :
					while ($whatPost->have_posts()) : $whatPost->the_post();
			?>
			<div class="what_title"><?php the_title(); ?></div>
			<div class="what_des"><?php the_content(); ?></div>
			<?php
					endwhile;
				else :
					echo '<p>No content found</p>';
				endif;

				wp_reset_postdata();
			?>
		</section>
	</div>
	<!-- what we do end -->

	<!-- contact start -->
	<div class="wrapper contact_bg" id="contact">
		<section class="container">
			<h2>Contact Us</h2>
			<address>
				<?php
					$contactPost = new WP_Query('cat=3');

					if ($contactPost->have_posts()) :
						while ($contactPost->have_posts()) : $contactPost->the_post();
							the_content();
						endwhile;
					else :
						echo '<p>No content found</p>';
					endif;

					wp_reset_postdata();
				?>
			</address>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3192.6708709407058!2d174.73900221506736!3d-36.85035778730175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d479a971d41ff%3A0xc46a42c8f588dcc0!2s30+Ponsonby+Terrace%2C+Ponsonby%2C+Auckland+1011!5e0!3m2!1sen!2snz!4v1445818173073" width="800" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<div class="copy">Copyright &copy; 2015 Citron Created by <a href="javascript:" onClick="window.open('http://www.3a.co.nz')">3A web solution</a></div>
		</section>
	</div>
	<!-- contact end -->

	<script type="text/javascript">
	$(function(){
	  $("nav a").click(function(e){
	    e.preventDefault();
	    $('html,body').scrollTo(this.hash,this.hash);
	  });
	});
	</script>
	<?php wp_footer(); ?>
</body>
</html>