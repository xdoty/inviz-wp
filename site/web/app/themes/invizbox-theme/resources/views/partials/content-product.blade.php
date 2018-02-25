<section class="jumbotron" style="background-image: url(<?php the_field( 'jumbotron' ); ?>);">
	<div class="container">
		<div class="jumbotron-detail-product">
			<h1 class="jumbotron-heading"><?php the_field( 'hero_title' ); ?></h1>
			<p class="lead text-muted"><?php the_field( 'hero_title' ); ?></p>
		</div>
	</div>
</section>
<!-- Product Panel-->
<div class="product-shot-main"><div class="container">
	<div class="row justify-content-md-center">
		<div class="col-sm-10 text-center">
			<img src="<?php the_field( 'image_product' ); ?>" alt="" class="align-self-center">
			<p>
				<a href="<?php the_field( 'button_cta' ); ?>" class="btn btn-secondary btn-lg btn-cta">Order Now</a>
			</p>
			<h2><?php the_field( 'intro_title' ); ?></h2>
			<p class="tagline"><?php the_field( 'intro_text' ); ?></p>
		</div>
	</div>
</div></div>
<!-- Features Panel-->
<?php if ( have_rows( 'features' ) ): ?>
	<div class="container">
		<div class="row">
				<div class="col-12">
					<h2 class="sub text-center">Packed full of features</h2>
				</div>
			</div>
			<div class="row">
				<?php while ( have_rows( 'features' ) ) : the_row();
				$title = get_sub_field( 'title' );
				$text = get_sub_field( 'text' );
				$image = get_sub_field( 'image' );
				?>
				<div class="col-sm-6 col-md-4">
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
<?php endif; ?>







<!-- As Featured Panel-->
<?php if ( have_rows( 'featured_on' ) ): ?>
<div class="panel-wide">
		<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="sub text-center">As featured on </h2>
			</div>
		</div>
		<div class="row">
			<?php while ( have_rows( 'featured_on' ) ) : the_row();
			$image = get_sub_field( 'image' );
			$title = get_sub_field( 'title' );
			$url = get_sub_field( 'url' );
			?>

			<div class="col-sm-4">
				<div class="accreditation">
					<a href="<?php echo $url; ?>">
						<img src="<?php echo $image; ?>" alt="">
						<p><?php echo $title; ?></p>
					</a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>
<?php endif; ?>



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
			<div class="row  row-eq-height">
				<div class="col-sm-6 bucket-image">
					<img src="<?php echo $image; ?>" alt="">
				</div>
				<div class="col-sm-6 bucket-content">
					<h2><?php echo $title; ?></h2>
					<p  class="tagline"><?php echo $content; ?></p>
					<a href="$link" class="btn btn-default">Learn More</a>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; ?>
<?php endif; ?>
<!-- Pricing Panel-->
<?php if ( have_rows( 'pricing_panel' ) ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows( 'pricing_panel' ) ) : the_row();
			$title = get_sub_field( 'title' );
			$content = get_sub_field( 'content' );
			$price = get_sub_field( 'price' );
			$discount = get_sub_field( 'discount' );
			$link = get_sub_field( 'link' );
			?>
			<div class="col">
				<div class="pricing-panel">
					<span class="sale-tag">Sale!</span>
					<h1><?php echo $title; ?></h1>
					<p><?php echo $content; ?></p>
					<p class="price"><?php echo $price; ?></p>
					<p class="discount"><?php echo $discount; ?></p>
					<a href="<?php echo $content; ?>" class="btn btn-cta">Order Now</a>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</div>
</div>
<?php endif; ?>




    <!-- Setup Steps -->
<div class="panel-wide">
	    <h2 class="text-center">Super Easy Setup</h2>
    <p class="tagline text-center">Simply connect your phone, laptop or other device to any of our products over WiFi and thatâ€™s it! </p>
<?php if ( have_rows( 'setup_steps' ) ): ?>
	<div class="container">
		<div class="row">
			<?php while ( have_rows( 'setup_steps' ) ) : the_row();
			$image = get_sub_field( 'image' );
			$title = get_sub_field( 'title' );
			$content = get_sub_field( 'content' );
			$badge = get_sub_field( 'badge' );
			?>
			<div class="col-sm-4">
				<div class="bucket bucket-steps">
					<!-- <h5><span class="badge badge-default"><?php echo $badge; ?></span></h5> -->
<img src="<?php echo $image; ?>" alt="" class="rounded-circle">
					<h3><?php echo $title; ?></h3>
					<!-- <p><?php echo $content; ?></p> -->
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
                <div class="col-8">

                	<?php do_action( 'woothemes_testimonials', array( 'limit' => 1, 'category' => 'invizbox-pro' )  ); ?>

                </div>
            </div>
        </div>
    </div>




