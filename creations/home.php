<?php
define('TURNEDON', false);
$light = false; $ratings = $blog = $services = false;
function content($key, $return = false) {
	$sheet = getSheet(__DIR__ . '/data/home-content.tsv', 'key');
	$item = $sheet->firstOfGroup($key, $key . ' not found', false);
	$result = is_string($item) ? $item : $sheet->getValue($item, 'content');
	if ($return) return $result;
	echo $result;
}

function __assetUrl($file) {
	echo getHtmlVariable('url') . 'creations/assets/home/' . $file;
}

function __link($content) {
	return bootstrapAndUX::toButtons(replaceVariables(content($content, true)));
}
?>

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element page-section <?php echo $light ? '' : 'bg-color'; ?> clearfix" style="padding: 100px 0">

			<div class="container <?php echo $light ? '' : 'dark'; ?>">
				<div class="row">
					<div class="col-xl-7 col-lg-9 offset-1">
						<img class="img-fluid" src="<?php __assetUrl('hero1.jpg');?>" /><br><br><br>

						<div class="heading-block mb-4 border-bottom-0">
							<div class="before-heading color-light"><?php content('Before Heading'); ?></div>
							<h2 class="nott ls0 font-weight-normal"><?php content('Heading'); ?></h2>
						</div>
						<p><?php content('Para Below Heading'); ?></p>

						<a href="<?php echo __link('CTA Link'); ?>" data-scrollto="#price" class="button button-circle button-xlarge font-weight-normal ml-0" data-offset="85" data-easing="easeInOutExpo" data-speed="1250"><?php content('CTA'); ?> <i class="icon-caret-right m-0 ls0"></i></a>

					</div>
				</div>
			</div>
			<div class="hero-img">
				<div class="fslider" data-arrows="true" data-autplay="5000" data-pagi="false" data-speed="400" data-pause="4000" data-loop="true">
					<div class="flexslider">
						<div class="slider-wrap">
							<div class="slide"><img src="<?php __assetUrl('home1.jpg');?>" alt="Slider Image"></div>
							<div class="slide"><img src="<?php __assetUrl('home2.jpg');?>" alt="Slider Image"></div>
							<div class="slide"><img src="<?php __assetUrl('home3.jpg');?>" alt="Slider Image"></div>
						</div>
					</div>
				</div>

				<div class="feature-box-wrap mt-5 mt-md-3 <?php echo $light ? '' : 'dark'; ?>">
					<div class="row col-mb-50 mx-0">
						<div class="col-md-4 mt-md-5 px-4">
							<div class="feature-box media-box color3">
								<div class="fbox-media">
									<a href="<?php echo __link('Box1 Link'); ?>"><i class="spa-leaves"></i></a>
								</div>
								<div class="fbox-desc">
									<h3 class="nott ls0 <?php echo $light ? '' : 'text-white'; ?>"><?php content('Box1 Heading'); ?></h3>
									<p class="<?php echo $light ? '' : 'text-white'; ?>-50"><?php content('Box1 Para'); ?></p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mt-md-5 px-4">
							<div class="feature-box media-box color3">
								<div class="fbox-media">
									<a href="<?php echo __link('Box2 Link'); ?>"><i class="spa-ointment2"></i></a>
								</div>
								<div class="fbox-desc">
									<h3 class="nott ls0 <?php echo $light ? '' : 'text-white'; ?>"><?php content('Box2 Heading'); ?></h3>
									<p class="<?php echo $light ? '' : 'text-white'; ?>-50"><?php content('Box2 Para'); ?></p>
								</div>
							</div>
						</div>

						<div class="col-md-4 mt-md-5 px-4">
							<div class="feature-box media-box color3">
								<div class="fbox-media">
									<a href="<?php echo __link('Box3 Link'); ?>"><i class="spa-flowers-bowl"></i></a>
								</div>
								<div class="fbox-desc">
									<h3 class="nott ls0 <?php echo $light ? '' : 'text-white'; ?>"><?php content('Box3 Heading'); ?></h3>
									<p class="<?php echo $light ? '' : 'text-white'; ?>-50"><?php content('Box3 Para'); ?></p>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap p-0">

				<div class="section m-0 p-0 page-section <?php echo $light ? '' : 'bg-color-light'; ?>">
					<div class="row no-gutters align-items-stretch">
						<div class="col-md-6 bg-color"><img src="<?php __assetUrl('section1.jpg');?>" alt="Image"></div>
						<div class="col-md-6 pl-4 pt-0 pt-md-3 align-self-center">
							<div class="col-padding">
								<div class="heading-block border-0">
									<div class="before-heading color"><?php content('Services Before Heading'); ?></div>
									<h2 class="nott ls1 font-weight-bold" style="font-size: 34px"><?php content('Services Heading'); ?></h2>
								</div>
								<p><?php content('Services Para'); ?></p>
								<a href="<?php echo __link('Services CTA Link'); ?>" data-scrollto="#price" class="button button-circle button-large bg-color2 font-weight-normal ml-0" data-offset="85" data-easing="easeInOutExpo" data-speed="1250"><?php content('Services CTA'); ?> <i class="icon-caret-right m-0"></i></a>
							</div>
						</div>
					</div>
				</div>

				<?php if (TURNEDON) {?>
				<!-- Section About
				============================================= -->
				<div id="about" class="section m-0 page-section" style="<?php echo $light ? '' : 'background-image: linear-gradient(to bottom, #ECD49A 70%, #FFF 70%);'; ?>">

					<div class="container">

						<div class="row justify-content-between align-items-center justify-content-sm-center mb-4">
							<div class="col-xl-7 col-md-7 mt-5 mb-sm-0 order-sm-1">
								<div class="col-12">
									<!-- Heading -->
									<div class="heading-block">
										<div class="before-heading color mb-4"><?php content('About Before Heading'); ?></div>
										<h2 class="nott ls1 font-weight-bold color mb-4" style="font-size: 34px;"><?php content('About Heading'); ?></h2>
										<p class="mb-0"><?php content('About Para'); ?></p>
									</div>
								</div>
								<?php if ($ratings) { ?>
								<div class="row mx-0">
									<div class="col-6 mb-5">
										<h2 class="display-4 font-weight-bold mb-2 color2">4.8</h2>
										<div class="product-rating mb-3 color3">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
										</div>
										<span>2,0321 Ratings</span>
									</div>

									<div class="col-6 mb-5">
										<h2 class="display-4 font-weight-bold mb-2 color2">A++</h2>
										<div class="product-rating mb-3 color3">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
										</div>
										<span>131+ Satisfied Customer Reviews</span>
									</div>
								</div><?php } ?>

							</div>

							<div class="d-none d-md-block col-md-5 col-xl-4 order-sm-2">
								<img src="<?php __assetUrl('section2.jpg');?>" alt="Image">
							</div>
						</div>

						<div class="clear"></div>
						<?php } ?>

						<!-- Shop
						============================================= -->
						<div id="shop" class="shop row justify-content-center mt-5 mt-md-0 col-mb-50">

<?php
$catalogue = getSheet(__DIR__ . '/data/catalogue.tsv', 'Featured');
$categories = [];
foreach ($catalogue->group['Y'] as $item) {
	$slug = urlize($name = $catalogue->getValue($item, 'Name'));
	$url = getHtmlVariable('url') . 'order/#' . $slug;?>
							<div class="col-9 col-md-4 center px-md-3 px-xl-5">
								<div class="grid-inner">
									<div class="product-image">
										<a href="<?php echo $url; ?>"><img src="<?php echo getHtmlVariable('url');?>creations/assets/vidzeal-<?php echo $slug; ?>.jpg" alt="<?php echo $name; ?>"></a>
										<div class="bg-overlay">
											<div class="bg-overlay-content align-items-center justify-content-center" data-hover-animate="fadeIn" data-hover-speed="400">
												<a href="<?php echo $url; ?>" class="button button-xlarge bg-color2 text-light h-text-light h-op-09"><i class="icon-line-bag"></i> Add to Cart</a>
											</div>
										</div>
									</div>
									<div class="product-desc">
										<div class="product-title mb-1">
											<h3><a href="<?php echo $url; ?>"><?php echo $name; ?></a></h3>
										</div>
									</div>
								</div>
							</div><?php } ?>

						</div>
					</div>
				</div>

				<!-- Section Video
				============================================= -->
				<div id="video" class="section page-section m-0" style="background: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)), url('<?php __assetUrl('section-video.jpg');?>') no-repeat center center / cover; padding: 250px 0">
					<div class="container">
						<div class="d-flex justify-content-center align-items-center">
							<a href="https://www.youtube.com/watch?v=<?php content('YouTubeID'); ?>" data-lightbox="iframe" class="<?php echo $light ? '' : 'text-white'; ?> row align-items-center">
								<i class="icon-play-sign display-3 mr-3"></i>
								<h2 class="h1 font-weight-normal col <?php echo $light ? '' : 'text-white'; ?>" style="text-decoration: underline">
									<?php content('YouTube Caption'); ?>
								</h2>
							</a>
						</div>
					</div>
				</div>

				<?php if ($services) { ?>
				<!-- Section Services
				============================================= -->
				<div id="services" class="section page-section m-0" style="background-color: #FFF; padding: 120px 0">

					<div class="container">
						<div class="row">
							<div class="col-md-4 px-4 mb-5 mb-md-0">
								<div class="feature-box media-box">
									<div class="fbox-media">
										<a href="<?php echo $theme; ?>#"><i class="spa-leaves"></i></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 color">100% Orgnaic &amp; Naturals</h3>
										<p class="text-black-50">Globally mesh multifunctional without competitive benefits. Synergistically procrastinate effective.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4 px-4 mb-5 mb-md-0">
								<div class="feature-box media-box color3">
									<div class="fbox-media">
										<a href="<?php echo $theme; ?>#"><i class="spa-ointment2"></i></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 color">No Artificial Stuff</h3>
										<p class="text-black-50">Seamlessly create team driven partnerships through state of the art scenarios.</p>
									</div>
								</div>
							</div>

							<div class="col-md-4 px-4 mb-5 mb-md-0">
								<div class="feature-box media-box color2">
									<div class="fbox-media">
										<a href="<?php echo $theme; ?>#"><i class="spa-flowers-bowl"></i></a>
									</div>
									<div class="fbox-desc">
										<h3 class="nott ls0 color">Better Ingredients</h3>
										<p class="text-black-50">Globally deploy cost effective internal, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est.</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div><?php } ?>

				<!-- Before - After
				============================================= -->
				<div class="section m-0 bg-color">
					<div class="container">
						<div class="row align-items-center gutter-50">

							<div class="col-xl-7 col-lg-6">
								<div class="twentytwenty-container">
									<img src="<?php __assetUrl('compare-before.jpg');?>" class="w-100" alt="Image 1" />
									<img src="<?php __assetUrl('compare-after.jpg');?>"  class="w-100" alt="Image 2" />
								</div>
							</div>

							<div class="col-xl-5 col-lg-6">
								<div class="heading-block dark mb-4">
									<div class="before-heading color-light"><?php content('Before Compare Heading'); ?></div>
									<h2 class="nott ls1 font-weight-bold mt-2"><?php content('Compare Heading'); ?></h2>
								</div>
								<p class="<?php echo $light ? '' : 'text-white'; ?>-50 font-weight-normal mt-3"><?php content('Compare Para'); ?></p>
								<a href="<?php echo __link('Compare CTA Link'); ?>" class="button button-circle button-xlarge ls0 nott font-weight-normal mx-0"><?php content('Compare CTA'); ?></a>
							</div>

						</div>
					</div>
				</div>

				<?php if ($blog) { ?>
				<!-- Section Blog
				============================================= -->
				<div id="blog" class="section bg-transparent mb-0 mt-3 page-section">
					<div class="container mx-auto" style="max-width: 960px">

						<div class="heading-block mx-auto center" style="max-width: 500px">
							<div class="before-heading center noborder pl-0 color mb-4">What People are Saying</div>
							<h2 class="nott ls0 font-weight-bold color mb-4" style="font-size: 38px; line-height: 1.4">We’re changing the way you go to the doctor</h2>
						</div>

						<div class="row justify-content-between mb-4 posts-md">
							<div class="col-sm-4 px-5 px-sm-2 mb-5 mb-sm-0">
								<div class="entry imagescalein">
									<div class="entry-image overflow-hidden">
										<a href="<?php echo $theme; ?>#"><img class="op-ts op-1 op-06" src="skincare/1.jpg" alt="Image"></a>
									</div>
									<div class="entry-title">
										<h3><a class="color2" href="<?php echo $theme; ?>#">Distinctively syndicate team driven e-markets after goal-oriented.</a></h3>
									</div>
									<div class="entry-content">
										<blockquote class="font-weight-light">
											Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur.
										</blockquote>
									</div>
								</div>
							</div>

						</div>

					</div>

					<!-- Background Image -->
					<img src="others/nailpolish.png" alt="Image" style="position: absolute; right: 20px; bottom: -80px; width: 270px; height: auto; opacity: 1; ">

				</div><?php } ?>
			</div>

		</section><!-- #content end -->
