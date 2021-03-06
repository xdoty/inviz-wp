<section class="jumbotron jumbotron-homepage" style="background-image: url(<?php the_field( 'jumbotron' ); ?>);">
	<span class="hero-testimonial"><img src="<?php the_field( 'hero_testimonial' ); ?>" alt=""></span>
	<div class="container">
		<span class="jumbotron-notification">
			<?php the_field( 'jumbotron_notification' ); ?>
		</span>
		<div class="jumbotron-detail">
			<h1 class="jumbotron-heading"><?php the_field( 'hero_title' ); ?></h1>
			<p class="lead"><?php the_field( 'hero_tagline' ); ?></p>
			<a href="<?php the_field( 'button_learn' ); ?>" class="btn btn-secondary">Learn More</a>
			<a href="<?php the_field( 'button_order' ); ?>" class="btn btn-primary">Orderw Now</a>
		</div>
	</div>
</section>
<!-- <span class="ip-address" class="jumbotron-heading"><?php the_field( 'ip' ); ?></span> -->
<!-- Product Panel-->
<div class="container">
	<h2 class="text-center">Protect All your devices, everywhere!</h2>
	<p class="tagline text-center">On the move or at home, InvizBox provides total security.
	</p>
	<div class="row products-panel-holder">
		<?php 
		if( have_rows('products') ):  
			$count = 0;
		while ( have_rows('products') ) : 
			the_row(); 
		$title = get_sub_field( 'title' );
		$text = get_sub_field( 'content' );
		$image = get_sub_field( 'image' );
		$link_learn = get_sub_field( 'link_learn' );
		$link_order = get_sub_field( 'link_order' );
		?>
		<div class="col-md-6" role="presentation"<?php 
		if (!$count) {
			?> class="active"<?php 
		}
		?>>
		<div class="products-panel">
			<img src="<?php echo $image; ?>" alt="">
			<h5><?php echo $title; ?></h5>
			<p><?php echo $text; ?></p>
			<a href="<?php echo $link_learn; ?>" class="btn btn-secondary">Learn More</a>
			<a href="<?php echo $link_order; ?>" class="btn btn-primary">Order Now</a>
		</div>
	</div>
	<?php 
	$count++;
	endwhile;
	endif; 
	?>
</div>
</div>
<!-- As Featured Panel-->
<?php if ( have_rows( 'featured_on' ) ): ?>
	<div class="panel-featured-on">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="sub-capital text-center">INVIZBOX HAS BEEN PROUDLY RECOMMENDED BY:</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'featured_on' ) ) : the_row();
				$image = get_sub_field( 'image' );
				$title = get_sub_field( 'title' );
				$url = get_sub_field( 'url' );
				?>
				<div class="col">
					<div class="accreditation">
						<a href="<?php echo $url; ?>">
							<img src="<?php echo $image; ?>" alt="">
							<!-- <p><?php echo $title; ?></p> -->
						</a>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- Features Panel-->
<?php if ( have_rows( 'features' ) ): ?>
	<div class="panel-features">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="text-center">Award Winning Protection</h2>
					<p class="tagline text-center">All our devices are packed full of features</p>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'features' ) ) : the_row();
				$title = get_sub_field( 'title' );
				$text = get_sub_field( 'text' );
				$image = get_sub_field( 'image' );
				?>
				<div class="col-md-6 col-lg-4">
					<div class="media">
						<img class="mr-3" src="<?php echo $image; ?>" alt="">
						<div class="media-body">
							<h5 class="mt-0"><?php echo $title; ?></h5>
							<p><?php echo $text; ?></p></div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>
<!-- Video Panel-->
<div class="video-panel">
	<div class="container">
		<?php	
// vars
		$video = get_field('video');	
		if( $video ): ?>
		<div id="video">
			<div class="row">
				<div class="col-sm-6">
					<h2><?php echo $video['title']; ?></h2>
					<p class="tagline"><?php echo $video['content']; ?></p>
				</div>
				<div class="col-sm-6">
					<?php echo $video['video_file']; ?></div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>
<!-- Bucket Panels-->
<?php if ( have_rows( 'bucket_detail' ) ): ?>
	<?php while ( have_rows( 'bucket_detail' ) ) : the_row();
	// vars
	$title = get_sub_field( 'title' );
	$content = get_sub_field( 'content' );
	$image = get_sub_field( 'image' );
	$link = get_sub_field( 'link' );
	?>
	<div class="bucket-detail">
		<div class="container">
			<div class="row  align-items-center">
				<div class="col-sm-6">
					<div class="bucket-image">
						<img src="<?php echo $image; ?>" alt="">
					</div>
				</div>
				<div class="col-sm-6">
					<div class="bucket-content">
						<h2><?php echo $title; ?></h2>
						<p><?php echo $content; ?></p>
						<a href="$link">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- Open Source Panel -->
<?php
if ( ! have_rows( 'open_source' ) ) {
	return false;
}
if ( have_rows( 'open_source' ) ) : ?>
<?php while ( have_rows( 'open_source' ) ) : the_row();
// vars
$title = get_sub_field('title');
$tagline = get_sub_field('tagline');
$image = get_sub_field('image');
// Feature Repeater.
if ( have_rows( 'feature' ) ) : ?>
<div class="panel-open-source">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-sm-9">
				<h2 class="text-center"><?php echo $title; ?></h2>
				<p class="tagline text-center"><?php echo $tagline; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img class="hero-image" src="<?php echo $image; ?>" alt="">
			</div>
			<div class="col-md-6">
				<div class="row">
					<?php
					while ( have_rows( 'feature' ) ) : the_row();
					$title = get_sub_field( 'feature_title' );
					$content = get_sub_field( 'feature_content' );
					?>
					<div class="col-6">
						<div class="media-body">
							<img src="<?= get_template_directory_uri(); ?>/assets/images/tick.png">
							<h5 class="mt-0"><?php echo esc_html( $title ); ?></h5>
							<p><?php echo esc_html( $content ); ?></p>
						</div>
					</div>
				<?php endwhile; ?> 
			</div>
		</div>
	</div>
</div>
</div>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
<!-- Setup Steps -->
<div class="panel-wide">
	<h2 class="text-center">Super Easy Setup</h2>
	<p class="tagline text-center">Simply connect your phone, laptop or other device to any of our products over WiFi and that's it! </p>
	<?php if ( have_rows( 'setup_steps' ) ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows( 'setup_steps' ) ) : the_row();
			$image = get_sub_field( 'image' );
			$content = get_sub_field( 'content' );
			?>
			<div class="col-4">
				<div class="bucket bucket-steps">
					<img src="<?php echo $image; ?>" alt="">
					<h3><?php echo $content; ?></h3>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>
<?php endif; ?>
</div>
<!-- Testimonial -->
<div class="panel-testimonial">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<?php if( have_rows('testimonial', 134) ): ?>
				<?php while( have_rows('testimonial', 134) ): the_row(); ?>
				<img src="<?php the_sub_field('image'); ?>" alt="">
				<p>&quot;<?php the_sub_field('content'); ?>&quot;
					<span><?php the_sub_field('details'); ?></span>
				</p>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
</div>
</div>