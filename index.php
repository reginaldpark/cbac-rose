<?php 
    $page = $_GET["page"] . ".php";
?>

<!-- <cfset oData = new dataModel()> -->

<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="https://cbavalanchecenter.org/xmlrpc.php">
	<title>Avalanches</title>
	<meta name='robots' content='noindex, nofollow' />
	<link rel='dns-prefetch' href='//unpkg.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="Crested Butte Avalanche Center &raquo; Feed"
		href="https://cbavalanchecenter.org/feed/" />
	<link rel="alternate" type="application/rss+xml" title="Crested Butte Avalanche Center &raquo; Comments Feed"
		href="https://cbavalanchecenter.org/comments/feed/" />
	<meta property="og:site_name" content="Crested Butte Avalanche Center">
	<meta property="og:title" content="Signs of instability at Coneys">
	<meta property="og:description"
		content="Date of Observation: 12/13/2021 Zone: Southeast Mountains Route Description: Skinned up the normal route via the woods to the south of the bowls. In the meadow approach, there were collapses and wumphing with almost every&hellip;">
	<meta property="og:image"
		content="https://dev.cbavalanchecenter.org/wp-content/uploads/2017/11/Screen-Shot-2017-11-26-at-1.00.30-PM.png">
	<meta property="og:url" content="https://cbavalanchecenter.org/signs-of-instability-at-coneys/">
	<meta property="og:type" content="article">
	<!-- This site uses the Google Analytics by ExactMetrics plugin v7.2.1 - Using Analytics tracking - https://www.exactmetrics.com/ -->
	<script src="//www.googletagmanager.com/gtag/js?id=UA-66203042-1" type="text/javascript" data-cfasync="false" async>
	</script>
	<link rel='stylesheet' id='wp-block-library-css'
		href='https://cbavalanchecenter.org/wp-includes/css/dist/block-library/style.min.css?ver=5.8.2' type='text/css'
		media='all' />
	<link rel='stylesheet' id='wp-block-library-theme-inline-css'
		href='/css/template1.css' type='text/css'
		media='all' />
	<link rel='stylesheet' id='foobox-free-min-css'
		href='https://cbavalanchecenter.org/wp-content/plugins/foobox-image-lightbox/free/css/foobox.free.min.css?ver=2.7.16'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mappress-leaflet-css' href='https://unpkg.com/leaflet@1.7.1/dist/leaflet.css?ver=1.7.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='mappress-css'
		href='https://cbavalanchecenter.org/wp-content/plugins/mappress-google-maps-for-wordpress/css/mappress.css?ver=2.72.5'
		type='text/css' media='all' />
	<link rel='stylesheet' id='nac-avalanche-shortcodes-css'
		href='https://cbavalanchecenter.org/wp-content/plugins/nac-avalanche-shortcodes/public/css/nac-avalanche-shortcodes-public.css?ver=1.0.1'
		type='text/css' media='all' />
	<link rel='stylesheet' id='x-stack-css'
		href='https://cbavalanchecenter.org/wp-content/themes/pro/framework/dist/css/site/stacks/integrity-light.css?ver=5.0.8'
		type='text/css' media='all' />
	<link rel='stylesheet' id='x-child-css'
		href='https://cbavalanchecenter.org/wp-content/themes/pro-child/style.css?ver=5.0.8' type='text/css'
		media='all' />
	<link rel='stylesheet' id='cs-inline-css'
		href='/css/template2.css' type='text/css'
		media='all' />
	<script type='text/javascript' src='https://cbavalanchecenter.org/wp-includes/js/jquery/jquery.min.js?ver=3.6.0'
		id='jquery-core-js'></script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
		id='jquery-migrate-js'></script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/plugins/google-analytics-dashboard-for-wp/assets/js/frontend-gtag.min.js?ver=7.2.1'
		id='exactmetrics-frontend-script-js'></script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/plugins/foobox-image-lightbox/free/js/foobox.free.min.js?ver=2.7.16'
		id='foobox-free-min-js'></script>
	<link rel="https://api.w.org/" href="https://cbavalanchecenter.org/wp-json/" />
	<link rel="alternate" type="application/json" href="https://cbavalanchecenter.org/wp-json/wp/v2/posts/27170" />
	<link rel="canonical" href="https://cbavalanchecenter.org/signs-of-instability-at-coneys/" />
	<link rel='shortlink' href='https://cbavalanchecenter.org/?p=27170' />
	<link rel="alternate" type="application/json+oembed"
		href="https://cbavalanchecenter.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcbavalanchecenter.org%2Fsigns-of-instability-at-coneys%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="https://cbavalanchecenter.org/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fcbavalanchecenter.org%2Fsigns-of-instability-at-coneys%2F&#038;format=xml" />
	<link rel="icon"
		href="https://cbavalanchecenter.org/wp-content/uploads/2017/11/cropped-Screen-Shot-2017-11-22-at-8.50.32-AM-2-32x32.png"
		sizes="32x32" />
	<link rel="icon"
		href="https://cbavalanchecenter.org/wp-content/uploads/2017/11/cropped-Screen-Shot-2017-11-22-at-8.50.32-AM-2-192x192.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="https://cbavalanchecenter.org/wp-content/uploads/2017/11/cropped-Screen-Shot-2017-11-22-at-8.50.32-AM-2-180x180.png" />
	<meta name="msapplication-TileImage"
		content="https://cbavalanchecenter.org/wp-content/uploads/2017/11/cropped-Screen-Shot-2017-11-22-at-8.50.32-AM-2-270x270.png" />
		<link href="/lib/jQRangeSlider/css/iThing.css" rel="stylesheet" media="screen">
	<link rel='stylesheet' href='/css/rose.css' type='text/css'	media='all' />
	<!--- <link rel='stylesheet' href='/css/table.css' type='text/css'	media='all' /> --->
</head>

<body class="post-template-default single single-post postid-27170 single-format-standard x-integrity x-integrity-light x-child-theme-active x-full-width-layout-active x-full-width-active pro-v5_0_8">



	<div id="x-root" class="x-root">


		<div id="x-site" class="x-site site">



			<header class="x-masthead" role="banner">


				<div class="x-bar x-bar-top x-bar-h x-bar-absolute x-bar-is-sticky x-bar-is-initially-hidden x-bar-outer-spacers e11383-1 m8s7-0 m8s7-1 m8s7-2 m8s7-3  x-hide-sm x-hide-xs"
					data-x-bar="{&quot;id&quot;:&quot;e11383-1&quot;,&quot;region&quot;:&quot;top&quot;,&quot;height&quot;:&quot;3.3em&quot;,&quot;hideInitially&quot;:true,&quot;triggerOffset&quot;:&quot;0&quot;,&quot;shrink&quot;:&quot;1&quot;}">
					<div class="e11383-1 x-bar-content">
						<div class="x-bar-container e11383-2 m8s7-6 m8s7-7 m8s7-8 m8s7-9 m8s7-a m8s7-b m8s7-c"><a
								class="x-image e11383-3 m8s7-m m8s7-n" href="/"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2019/11/CBAC_white.png"
									width="256" height="92" alt="CBAC" loading="lazy"></a></div>
						<div class="x-bar-container e11383-4 m8s7-9 m8s7-a m8s7-c m8s7-d m8s7-e m8s7-f">
							<ul
								class="x-menu-first-level x-menu x-menu-inline e11383-5 m8s7-p m8s7-q m8s7-r m8s7-u  x-hide-xs">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26419"
									id="menu-item-26419"><a
										class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="https://cbavalanchecenter.org/tag/2021-22-observations/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Observations</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26078"
											id="menu-item-26078"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="/tag/2021-22-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">View
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17076"
											id="menu-item-17076"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/submit-your-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Submit Observations</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26361"
											id="menu-item-26361"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Snowpack Summary</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26519"
											id="menu-item-26519"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanches</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26521"
													id="menu-item-26521"><a
														class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
														tabindex="0"
														href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Table</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27066"
													id="menu-item-27066"><a
														class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
														tabindex="0"
														href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Rose</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20792"
									id="menu-item-20792"><a
										class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="/forecasts/#/all">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Forecast</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25899"
											id="menu-item-25899"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Northwest Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25900"
											id="menu-item-25900"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/southeast-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Southeast Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25895"
											id="menu-item-25895"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Forecast</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20832"
											id="menu-item-20832"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16981"
									id="menu-item-16981"><a
										class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="https://cbavalanchecenter.org/membership/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate /
													Join</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17369"
											id="menu-item-17369"><a
												class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="https://cbavalanchecenter.org/membership/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Donate / Join</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="x-bar-container e11383-6 m8s7-6 m8s7-8 m8s7-9 m8s7-a m8s7-c m8s7-f m8s7-g"><a
								class="x-anchor x-anchor-button has-graphic e11383-7 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-8 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-9 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.youtube.com/user/CBavalanche" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-toggle has-graphic has-particle m8s7-w m8s7-y m8s7-z m8s7-11 m8s7-16 m8s7-18 m8s7-1a e11383-10"
								tabindex="0" data-x-toggle="1" data-x-toggleable="e11383-10" data-x-toggle-overlay="1"
								aria-controls="e11383-10-off-canvas" aria-expanded="false" aria-haspopup="true"
								aria-label="Toggle Off Canvas Content">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">


										<span class="x-toggle x-toggle-burger x-graphic-child x-graphic-toggle"
											aria-hidden="true">


											<span class="x-toggle-burger-bun-t" data-x-toggle-anim="x-bun-t-1"></span>
											<span class="x-toggle-burger-patty" data-x-toggle-anim="x-patty-1"></span>
											<span class="x-toggle-burger-bun-b" data-x-toggle-anim="x-bun-b-1"></span>


										</span>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span><span
									class="x-particle is-secondary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
					</div>
				</div>
				<div class="x-bar x-bar-top x-bar-h x-bar-relative x-bar-is-sticky x-bar-outer-spacers e11383-11 m8s7-1 m8s7-2 m8s7-4  x-hide-lg x-hide-md x-hide-xl"
					data-x-bar="{&quot;id&quot;:&quot;e11383-11&quot;,&quot;region&quot;:&quot;top&quot;,&quot;height&quot;:&quot;3.3em&quot;,&quot;triggerOffset&quot;:&quot;0&quot;,&quot;shrink&quot;:&quot;1&quot;}">
					<div class="e11383-11 x-bar-content">
						<div
							class="x-bar-container e11383-12 m8s7-6 m8s7-8 m8s7-9 m8s7-a m8s7-b m8s7-c m8s7-h  x-hide-lg x-hide-md x-hide-xl">
							<a class="x-image e11383-13 m8s7-m m8s7-n" href="/"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2019/11/CBAC_white.png"
									width="256" height="92" alt="CBAC" loading="lazy"></a></div>
						<div class="x-bar-container e11383-14 m8s7-9 m8s7-a m8s7-c m8s7-d m8s7-e m8s7-f">
							<hr class="x-line e11383-15 m8s7-1e">
							</hr>
						</div>
						<div
							class="x-bar-container e11383-16 m8s7-6 m8s7-8 m8s7-9 m8s7-a m8s7-c m8s7-f m8s7-g  x-hide-lg x-hide-md x-hide-xl">
							<a class="x-anchor x-anchor-button has-graphic e11383-17 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://dev.cbavalanchecenter.org/cbac-daily-advisory/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf813;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-18 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-19 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-20 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.youtube.com/user/CBavalanche" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-toggle has-graphic has-particle m8s7-w m8s7-y m8s7-z m8s7-11 m8s7-16 m8s7-18 m8s7-1a e11383-21"
								tabindex="0" data-x-toggle="1" data-x-toggleable="e11383-21" data-x-toggle-overlay="1"
								aria-controls="e11383-21-off-canvas" aria-expanded="false" aria-haspopup="true"
								aria-label="Toggle Off Canvas Content">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">


										<span class="x-toggle x-toggle-burger x-graphic-child x-graphic-toggle"
											aria-hidden="true">


											<span class="x-toggle-burger-bun-t" data-x-toggle-anim="x-bun-t-1"></span>
											<span class="x-toggle-burger-patty" data-x-toggle-anim="x-patty-1"></span>
											<span class="x-toggle-burger-bun-b" data-x-toggle-anim="x-bun-b-1"></span>


										</span>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span><span
									class="x-particle is-secondary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
					</div>
				</div>
				<div class="e11383-11 m8s7-1 m8s7-2 m8s7-4 x-bar-space x-bar-space-top x-bar-space-h  x-hide-lg x-hide-md x-hide-xl"
					style="display: none;"></div>
				<div class="x-bar x-bar-top x-bar-h x-bar-relative x-bar-outer-spacers e11383-22 m8s7-2 m8s7-3 m8s7-5  x-hide-sm x-hide-xs"
					data-x-bar="{&quot;id&quot;:&quot;e11383-22&quot;,&quot;region&quot;:&quot;top&quot;,&quot;height&quot;:&quot;14rem&quot;}">
					<div class="e11383-22 x-bar-content">
						<div class="x-bar-container e11383-23 m8s7-c m8s7-d m8s7-e m8s7-f m8s7-i m8s7-j"><a
								class="x-image e11383-24 m8s7-m m8s7-o  x-hide-sm x-hide-xs" href="/"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2019/10/web-logo.png"
									width="256" height="200.5" alt="CBAC" loading="lazy"></a></div>
						<div class="x-bar-container e11383-25 m8s7-a m8s7-c m8s7-d m8s7-f m8s7-g m8s7-i m8s7-k">
							<ul
								class="x-menu-first-level x-menu x-menu-inline e11383-26 m8s7-q m8s7-r m8s7-t m8s7-u  x-hide-xs">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26419">
									<a class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="https://cbavalanchecenter.org/tag/2021-22-observations/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Observations</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26078">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="/tag/2021-22-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">View
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17076">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/submit-your-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Submit Observations</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26361">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Snowpack Summary</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26519">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanches</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26521">
													<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
														tabindex="0"
														href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Table</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27066">
													<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
														tabindex="0"
														href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Rose</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-20792">
									<a class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="/forecasts/#/all">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Forecast</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25899">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Northwest Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25900">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/southeast-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Southeast Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25895">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Forecast</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20832">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-16981">
									<a class="x-anchor x-anchor-menu-item m8s7-v m8s7-w m8s7-x m8s7-y m8s7-z m8s7-10"
										tabindex="0" href="https://cbavalanchecenter.org/membership/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate /
													Join</span></div>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17369">
											<a class="x-anchor x-anchor-menu-item has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-14 m8s7-15 m8s7-16"
												tabindex="0" href="https://cbavalanchecenter.org/membership/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Donate / Join</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="x-bar-container e11383-27 m8s7-6 m8s7-c m8s7-g m8s7-i m8s7-j m8s7-k m8s7-l"><a
								class="x-anchor x-anchor-button has-graphic e11383-28 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://dev.cbavalanchecenter.org/cbac-daily-advisory/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf813;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-29 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-30 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-button has-graphic e11383-31 m8s7-w m8s7-x m8s7-y m8s7-11 m8s7-17 m8s7-18 m8s7-19"
								tabindex="0" href="https://www.youtube.com/user/CBavalanche" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div>
							</a><a
								class="x-anchor x-anchor-toggle has-graphic has-particle m8s7-w m8s7-y m8s7-z m8s7-11 m8s7-16 m8s7-18 m8s7-1a e11383-32"
								tabindex="0" data-x-toggle="1" data-x-toggleable="e11383-32" data-x-toggle-overlay="1"
								aria-controls="e11383-32-off-canvas" aria-expanded="false" aria-haspopup="true"
								aria-label="Toggle Off Canvas Content">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">


										<span class="x-toggle x-toggle-burger x-graphic-child x-graphic-toggle"
											aria-hidden="true">


											<span class="x-toggle-burger-bun-t" data-x-toggle-anim="x-bun-t-1"></span>
											<span class="x-toggle-burger-patty" data-x-toggle-anim="x-patty-1"></span>
											<span class="x-toggle-burger-bun-b" data-x-toggle-anim="x-bun-b-1"></span>


										</span>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span><span
									class="x-particle is-secondary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
					</div>
				</div>

			</header>


			<div class="x-container max width offset">
				<div class="x-main full" role="main">


					<article id="post-27170"
						class="post-27170 post type-post status-publish format-standard hentry category-cbac-observations tag-2021-22-observations no-post-thumbnail">
						<div class="entry-featured">
						</div>
						<div class="entry-wrap">

							<!-- <cfinclude template="#url.page#.cfm"> -->

                            <?php 
                            include $page; 
                            ?>

						</div>

					</article>

				</div>



			</div>




			<footer class="x-colophon" role="contentinfo">


				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-1 mg7o-0 mg7o-1 mg7o-2 mg7o-3 mg7o-4 mg7o-5 mg7o-6"
					data-x-bar="{&quot;id&quot;:&quot;e21012-1&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;auto&quot;}">
					<div class="e21012-1 x-bar-content">
						<div class="x-bar-container e21012-2 mg7o-c mg7o-d mg7o-e mg7o-f mg7o-g mg7o-h">
							<div class="x-text e21012-3 mg7o-t mg7o-u">
								<div class="lshowcase-clear-both">&nbsp;</div>
								<div class="lshowcase-logos ">
									<div>
										<div data-entry-id='21302'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://beaconguidebooks.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Beacon Guidebooks'
															data-entry-id='21302'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/BeaconGuidebooks-266x105.png'
															width='266' height='105' alt='Beacon Guidebooks' title=''
															class='lshowcase-thumb'
															style='padding-right:30px;padding-bottom:30px;padding-left:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21306'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><img data-no-lazy='1'
														data-original-title='Glacier Earthworks' data-entry-id='21306'
														src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/GlacierEarthworks.png'
														width='145' height='57' alt='Glacier Earthworks' title=''
														class='lshowcase-thumb'
														style='padding-bottom:30px;margin-right:10px;margin-left:10px;' />
												</div>
											</div>
										</div>
										<div data-entry-id='26556'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://highalpinebrewing.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='High Alpine Brewery'
															data-entry-id='26556'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/HighAlpineBrewing_bw.png'
															width='125' height='125' alt='High Alpine Brewery' title=''
															class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26526'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://IntuitionConsulting.org' target='_blank'><img
															data-no-lazy='1' data-original-title='Intuition Consulting'
															data-entry-id='26526'
															src='https://intuitionconsulting.org/wp-content/uploads/2021/06/IC_black-2048x497.png'
															width='266' alt='Intuition Consulting' title=''
															class='lshowcase-thumb' /></a></div>
											</div>
										</div>
										<div data-entry-id='21329'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://www.keblercorner.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Kebler Corner'
															data-entry-id='21329'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/KeblerCorner.png'
															width='176' height='157' alt='Kebler Corner' title=''
															class='lshowcase-thumb'
															style='height:auto; max-width:40%;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21358'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://thelaststeep.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Last Steep'
															data-entry-id='21358'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/LastSteep.png'
															width='262' height='234' alt='Last Steep' title=''
															class='lshowcase-thumb'
															style='height:auto; max-width:50%;padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21543'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://gcmetrec.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Metrec'
															data-entry-id='21543'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/MetRec.png'
															width='183' height='75' alt='Metrec' title=''
															class='lshowcase-thumb'
															style='padding-right:30px;padding-bottom:30px;padding-left:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21359'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://www.mvaughnlaw.com/contact/' target='_blank'><img
															data-no-lazy='1' data-original-title='Michael Vaughn'
															data-entry-id='21359'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/MichaelVaughn-266x112.png'
															width='266' height='112' alt='Michael Vaughn' title=''
															class='lshowcase-thumb'
															style='height:auto; max-width:50%;padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26562'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://www.onxmaps.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='OnX'
															data-entry-id='26562'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/onX-backcountry-logo-Blue-and-Black-RGB-5-266x39.png'
															width='266' height='39' alt='OnX' title=''
															class='lshowcase-thumb'
															style='padding-right:30px;padding-bottom:30px;padding-left:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26563'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://www.toptiercb.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Top Tier Construction'
															data-entry-id='26563'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/TopTier_bw.png'
															width='184' height='125' alt='Top Tier Construction'
															title='' class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26564'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://www.tributarycoffee.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Tributary Coffee'
															data-entry-id='26564'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/TributaryCoffee_bw.png'
															width='127' height='125' alt='Tributary Coffee' title=''
															class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26565'
											class='lshowcase-thumb lshowcase-normal lshowcase-wrap-normal ls-waist-deep '>
											<div style="padding:0%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:266px; text-align:center;"><a
														href='https://westelkair.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='West Elk Air'
															data-entry-id='26565'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/WestElkAir_bw-266x110.png'
															width='266' height='110' alt='West Elk Air' title=''
															class='lshowcase-thumb'
															style='padding-right:30px;padding-bottom:30px;padding-left:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="lshowcase-clear-both">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-4 mg7o-0 mg7o-1 mg7o-2 mg7o-3 mg7o-4 mg7o-5 mg7o-6"
					data-x-bar="{&quot;id&quot;:&quot;e21012-4&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;auto&quot;}">
					<div class="e21012-4 x-bar-content">
						<div class="x-bar-container e21012-5 mg7o-c mg7o-d mg7o-e mg7o-f mg7o-g mg7o-h">
							<div class="x-text e21012-6 mg7o-t mg7o-u">
								<div class="lshowcase-clear-both">&nbsp;</div>
								<div class="lshowcase-logos ">
									<div>
										<div data-entry-id='21339'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.altitudeautorepair.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Altitude Auto'
															data-entry-id='21339'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/AltitudeAuto-260x98.png'
															width='125' height='47' alt='Altitude Auto' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21309'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://backcountryaccess.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='BCA'
															data-entry-id='21309'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/BCA.png'
															width='125' height='67' alt='BCA' title=''
															class='lshowcase-thumb'
															style='margin-right:10px;margin-left:10px;' /></a></div>
											</div>
										</div>
										<div data-entry-id='21354'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.crestedbuttebuilders.com/'
														target='_blank'><img data-no-lazy='1'
															data-original-title='CB Builders' data-entry-id='21354'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/CBBuilders-260x48.png'
															width='125' height='23' alt='CB Builders' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21355'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.elkmountainlodge.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Elk Mountain Lodge'
															data-entry-id='21355'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/ElkMtnLodge.png'
															width='125' height='47' alt='Elk Mountain Lodge' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26566'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://crestedbutterealestateagent.com/'
														target='_blank'><img data-no-lazy='1'
															data-original-title='Frank Konsella' data-entry-id='26566'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/FrankKonsella_bw-correct.png'
															width='125' height='84' alt='Frank Konsella' title=''
															class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21356'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.hucksteplaw.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Huckstep Law'
															data-entry-id='21356'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/HuckstepLaw-260x84.png'
															width='125' height='40' alt='Huckstep Law' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21328'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a href='https://kbut.org/'
														target='_blank'><img data-no-lazy='1' data-original-title='KBUT'
															data-entry-id='21328'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/KBUT-260x90.png'
															width='125' height='43' alt='KBUT' title=''
															class='lshowcase-thumb'
															style='margin-right:10px;margin-left:10px;' /></a></div>
											</div>
										</div>
										<div data-entry-id='21357'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.knsreps.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='KNS Reps'
															data-entry-id='21357'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/KNSReps.png'
															width='125' height='42' alt='KNS Reps' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26571'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='http://mweilcustomhomes.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Michael Weil'
															data-entry-id='26571'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/MichaelWeil_bw.png'
															width='125' height='72' alt='Michael Weil' title=''
															class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26572'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.mountainnuggetbodywork.com/'
														target='_blank'><img data-no-lazy='1'
															data-original-title='Mountain Nugget Bodyworks'
															data-entry-id='26572'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/MountainNugget_bw.png'
															width='125' height='77' alt='Mountain Nugget Bodyworks'
															title='' class='lshowcase-thumb'
															style='padding-top:30px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21360'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://organichousekeepers.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Organic Housekeepers'
															data-entry-id='21360'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/OrganicHousekeepers_logo.png'
															width='125' height='67' alt='Organic Housekeepers' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21362'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://pinnacleorthocolorado.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Pinnacle Ortho'
															data-entry-id='21362'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/PinnacleOrtho_Logo.png'
															width='125' height='86' alt='Pinnacle Ortho' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21366'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.precisepaintingcb.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Precise Painting'
															data-entry-id='21366'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/PrecisePainting-260x68.png'
															width='125' height='33' alt='Precise Painting' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21335'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a href='https://rmbl.org'
														target='_blank'><img data-no-lazy='1' data-original-title='RMBL'
															data-entry-id='21335'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/RMBL-201x160.png'
															width='125' height='100' alt='RMBL' title=''
															class='lshowcase-thumb'
															style='margin-right:10px;margin-left:10px;' /></a></div>
											</div>
										</div>
										<div data-entry-id='21308'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://rompskis.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Romp Skis'
															data-entry-id='21308'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/ROMP.png'
															width='125' height='36' alt='Romp Skis' title=''
															class='lshowcase-thumb'
															style='padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21367'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.sawcontractingllc.com/contact/'
														target='_blank'><img data-no-lazy='1'
															data-original-title='Saw Construction' data-entry-id='21367'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/SAWContracting-260x109.png'
															width='125' height='52' alt='Saw Construction' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='26573'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://scheefers.com/' target='_blank'><img
															data-no-lazy='1'
															data-original-title='Scheefers Architecture'
															data-entry-id='26573'
															src='https://cbavalanchecenter.org/wp-content/uploads/2021/11/ScheefersArchitecture_bw-260x55.png'
															width='125' height='26' alt='Scheefers Architecture'
															title='' class='lshowcase-thumb'
															style='padding-right:30px;padding-bottom:30px;padding-left:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21370'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='http://teocallitamale.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Teocalli Tamale'
															data-entry-id='21370'
															src='https://cbavalanchecenter.org/wp-content/uploads/2019/12/Teo_LogoBW-500x500.png'
															width='125' height='125' alt='Teocalli Tamale' title=''
															class='lshowcase-thumb'
															style='padding-right:10px;padding-bottom:30px;margin-right:10px;margin-left:10px;' /></a>
												</div>
											</div>
										</div>
										<div data-entry-id='21336'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://www.uphillmotorworks.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Uphill Moto'
															data-entry-id='21336'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/UphillMoto-184x160.png'
															width='125' height='109' alt='Uphill Moto' title=''
															class='lshowcase-thumb'
															style='margin-right:10px;margin-left:10px;' /></a></div>
											</div>
										</div>
										<div data-entry-id='21338'
											class='lshowcase-thumb lshowcase-grayscale lshowcase-wrap-normal ls-thigh-high '>
											<div style="padding:10%;" class="lshowcase-box-normal">
												<div class="lshowcase-boxInner-normal"
													style="width:125px; text-align:center;"><a
														href='https://westonbackcountry.com/' target='_blank'><img
															data-no-lazy='1' data-original-title='Weston Snowboards'
															data-entry-id='21338'
															src='https://cbavalanchecenter.org/wp-content/uploads/2020/12/Weston-192x160.png'
															width='125' height='104' alt='Weston Snowboards' title=''
															class='lshowcase-thumb'
															style='margin-right:10px;margin-left:10px;' /></a></div>
											</div>
										</div>
									</div>
								</div>
								<div class="lshowcase-clear-both">&nbsp;</div>
							</div>
						</div>
					</div>
				</div>
				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-7 mg7o-0 mg7o-1 mg7o-2 mg7o-3 mg7o-7 mg7o-8  x-hide-lg x-hide-xl"
					data-x-bar="{&quot;id&quot;:&quot;e21012-7&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;auto&quot;}">
					<div class="e21012-7 x-bar-content">
						<div class="x-bar-container e21012-8 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k mg7o-l"><a
								class="x-image e21012-9 mg7o-w" href="https://dev.cbavalanchecenter.org/membership/"
								target="_blank"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2020/02/ReFUND_Logo-CBAC-262x262.jpg"
									width="131" height="131" alt="Image" loading="lazy"></a></div>
					</div>
				</div>
				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-10 mg7o-0 mg7o-2 mg7o-4 mg7o-5 mg7o-8 mg7o-9  x-hide-lg x-hide-xl"
					data-x-bar="{&quot;id&quot;:&quot;e21012-10&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;auto&quot;}">
					<div class="e21012-10 x-bar-content">
						<div class="x-bar-container e21012-11 mg7o-c mg7o-e mg7o-f mg7o-g mg7o-h mg7o-j mg7o-m"><a
								class="x-image e21012-12 mg7o-w mg7o-x  x-hide-lg x-hide-xl" href="/"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2019/10/cbac_logo-white.png"
									width="256" height="200.5" alt="Image" loading="lazy"></a></div>
						<div class="x-bar-container e21012-13 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k">
							<ul class="x-menu-first-level x-menu x-menu-inline e21012-14 mg7o-y mg7o-z mg7o-10 mg7o-13">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17021">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Forecast</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25897">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Northwest Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25898">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0"
														href="https://cbavalanchecenter.org/forecasts/#/southest-mountains">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Southeast
																	Mountains</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25896">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Forecast</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20829">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25553">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="https://cbavalanchecenter.org/view-observations/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Observations</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26077">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="/tag/2021-22-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">View
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20969">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0"
												href="https://cbavalanchecenter.org/submit-your-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Submit Your
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26674">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0"
												href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Snowpack Summary</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26518">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanches</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26517">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0"
														href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Table</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27173">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0"
														href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Rose</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16994"><a
										class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="https://cbavalanchecenter.org/membership/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate /
													Join</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16995">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="https://cbavalanchecenter.org/category/backcountry-notes/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">News and
													Events</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16996">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="#">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Resources</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20960">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="https://cbavalanchecenter.org/cbac-forecast-zones/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">CBAC
															Forecast Zones Map</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17184">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0"
												href="https://cbavalanchecenter.org/weather/weather-station/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Stations</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16999">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="https://cbavalanchecenter.org/danger-scale/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Danger Scale</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16998">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="https://cbavalanchecenter.org/education-links/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Education Links</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17000">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0"
												href="https://cbavalanchecenter.org/avalanche_problem_definitions/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Problem
															Definitions</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17001">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26363">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Observations</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20793">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20795">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2019-20-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2019-20
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17007">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2018-19-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2018-19
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17006">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2017-18-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2017-18
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17005">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2016-17-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2016-17
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17004">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2015-16-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2015-16
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17003">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2014-15-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2014-15
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26365">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Accidents</span></div>
															<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22203">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-accidents/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21
																			Accidents</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26364">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Weekly
																	Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26362">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-weekly-snowpack-summary/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21 Weekly
																			Snowpack Summary</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17397">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2019-20-weekly-snowpack-summary/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2019-20 Weekly
																			Snowpack Summary</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17376">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/snowpack-summaries/seasonal-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2016 &#8211;
																			17 Weekly Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17379">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2017-18-weekly-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2017-18 Weekly
																			Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17380">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2018-19-weekly-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2018-19 Weekly
																			Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26366">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1e"
														tabindex="0" href="/forecasts/#/archive">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Forecasts</span></div>
															<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17010"><a
										class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-19 mg7o-1a mg7o-1b"
										tabindex="0" href="https://cbavalanchecenter.org/about-us/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">About
													Us</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
							</ul><a
								class="x-anchor x-anchor-toggle has-graphic e21012-15 mg7o-14 mg7o-15 mg7o-18 mg7o-1f mg7o-1g mg7o-1h mg7o-1i  x-hide-lg x-hide-md x-hide-xl"
								tabindex="0" data-x-toggle="1" data-x-toggleable="e21012-15" data-x-toggle-overlay="1"
								aria-controls="e21012-15-modal" aria-expanded="false" aria-haspopup="true"
								aria-label="Toggle Modal Content">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-l="&#xf742;"></i>
									</span>
								</div>
							</a>
						</div>
						<div class="x-bar-container e21012-16 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k">
							<hr class="x-line e21012-17 mg7o-1v">
							</hr>
						</div>
						<div
							class="x-bar-container e21012-18 mg7o-c mg7o-f mg7o-h mg7o-j mg7o-m mg7o-n mg7o-o mg7o-p  x-hide-lg x-hide-md x-hide-sm x-hide-xl x-hide-xs">
							<a class="x-anchor x-anchor-button has-graphic has-particle e21012-19 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1k  x-hide-xs"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-20 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1l mg7o-1m  x-hide-xs"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-21 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1n  x-hide-xs"
								tabindex="0" href="https://www.youtube.com/channel/UCHA8jaQgY6OAVsi2H_KRP1A"
								target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
						<div
							class="x-bar-container e21012-22 mg7o-e mg7o-f mg7o-h mg7o-j mg7o-o mg7o-p mg7o-q mg7o-r  x-hide-lg x-hide-md x-hide-sm x-hide-xl x-hide-xs">
							<a class="x-anchor x-anchor-button has-graphic has-particle e21012-23 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1k"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-24 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1l mg7o-1m"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-25 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1h mg7o-1i mg7o-1j mg7o-1n"
								tabindex="0" href="https://www.youtube.com/channel/UCHA8jaQgY6OAVsi2H_KRP1A"
								target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
					</div>
				</div>
				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-26 mg7o-0 mg7o-2 mg7o-4 mg7o-8 mg7o-9 mg7o-a  x-hide-md x-hide-sm x-hide-xs"
					data-x-bar="{&quot;id&quot;:&quot;e21012-26&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;auto&quot;}">
					<div class="e21012-26 x-bar-content">
						<div class="x-bar-container e21012-27 mg7o-c mg7o-e mg7o-f mg7o-g mg7o-h mg7o-i mg7o-j"><a
								class="x-image e21012-28 mg7o-w  x-hide-md x-hide-sm x-hide-xs" href="/"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2019/10/cbac_logo-white.png"
									width="256" height="200.5" alt="Image" loading="lazy"></a></div>
						<div class="x-bar-container e21012-29 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k">
							<ul
								class="x-menu-first-level x-menu x-menu-inline e21012-30 mg7o-y mg7o-10 mg7o-12 mg7o-13">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17021">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Forecast</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25897">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Northwest Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25898">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0"
														href="https://cbavalanchecenter.org/forecasts/#/southest-mountains">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Southeast
																	Mountains</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25896">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Forecast</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20829">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
									</ul>
								</li>
								<li
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25553">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="https://cbavalanchecenter.org/view-observations/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Observations</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26077">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="/tag/2021-22-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">View
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20969">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0"
												href="https://cbavalanchecenter.org/submit-your-observations/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Submit Your
															Observations</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26674">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0"
												href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Snowpack Summary</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26518">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanches</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26517">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0"
														href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Table</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27173">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0"
														href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Avalanche Rose</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16994"><a
										class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="https://cbavalanchecenter.org/membership/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate /
													Join</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16995">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="https://cbavalanchecenter.org/category/backcountry-notes/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">News and
													Events</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16996">
									<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="#">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Resources</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div>
									</a>
									<ul class="sub-menu x-dropdown" data-x-depth="0" data-x-stem data-x-stem-menu-top>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20960">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="https://cbavalanchecenter.org/cbac-forecast-zones/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span class="x-anchor-text-primary">CBAC
															Forecast Zones Map</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17184">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0"
												href="https://cbavalanchecenter.org/weather/weather-station/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weather Stations</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16999">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="https://cbavalanchecenter.org/danger-scale/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Danger Scale</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16998">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="https://cbavalanchecenter.org/education-links/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Education Links</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17000">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0"
												href="https://cbavalanchecenter.org/avalanche_problem_definitions/">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Problem
															Definitions</span></div><i class="x-anchor-sub-indicator"
														data-x-skip-scroll="true" aria-hidden="true"
														data-x-icon-s="&#xf107;"></i>
												</div>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17001">
											<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
												tabindex="0" href="#">
												<div class="x-anchor-content">
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Archives</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div>
											</a>
											<ul class="sub-menu x-dropdown" data-x-depth="1" data-x-stem>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26363">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Observations</span>
															</div><i class="x-anchor-sub-indicator"
																data-x-skip-scroll="true" aria-hidden="true"
																data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20793">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20795">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2019-20-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2019-20
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17007">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2018-19-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2018-19
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17006">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2017-18-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2017-18
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17005">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2016-17-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2016-17
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17004">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2015-16-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2015-16
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17003">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2014-15-observations/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2014-15
																			Observations</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26365">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Accidents</span></div>
															<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22203">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-accidents/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21
																			Accidents</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26364">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0" href="#">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Weekly
																	Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a>
													<ul class="sub-menu x-dropdown" data-x-depth="2" data-x-stem>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26362">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2020-21-weekly-snowpack-summary/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2020-21 Weekly
																			Snowpack Summary</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17397">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2019-20-weekly-snowpack-summary/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2019-20 Weekly
																			Snowpack Summary</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17376">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/snowpack-summaries/seasonal-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2016 &#8211;
																			17 Weekly Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17379">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2017-18-weekly-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2017-18 Weekly
																			Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
														<li
															class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17380">
															<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
																tabindex="0"
																href="https://cbavalanchecenter.org/category/2018-19-weekly-snowpack-summaries/">
																<div class="x-anchor-content">
																	<div class="x-anchor-text"><span
																			class="x-anchor-text-primary">2018-19 Weekly
																			Snowpack Summaries</span></div><i
																		class="x-anchor-sub-indicator"
																		data-x-skip-scroll="true" aria-hidden="true"
																		data-x-icon-s="&#xf107;"></i>
																</div>
															</a></li>
													</ul>
												</li>
												<li
													class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26366">
													<a class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1c mg7o-1d mg7o-1p"
														tabindex="0" href="/forecasts/#/archive">
														<div class="x-anchor-content">
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">Forecasts</span></div>
															<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div>
													</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17010"><a
										class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-1a mg7o-1b mg7o-1o"
										tabindex="0" href="https://cbavalanchecenter.org/about-us/">
										<div class="x-anchor-content">
											<div class="x-anchor-text"><span class="x-anchor-text-primary">About
													Us</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div>
									</a></li>
							</ul><a
								class="x-anchor x-anchor-toggle has-graphic e21012-31 mg7o-14 mg7o-15 mg7o-18 mg7o-1f mg7o-1h mg7o-1i mg7o-1q"
								tabindex="0" data-x-toggle="1" data-x-toggleable="e21012-31" data-x-toggle-overlay="1"
								aria-controls="e21012-31-modal" aria-expanded="false" aria-haspopup="true"
								aria-label="Toggle Modal Content">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-l="&#xf742;"></i>
									</span>
								</div>
							</a>
						</div>
						<div
							class="x-bar-container e21012-32 mg7o-c mg7o-f mg7o-h mg7o-j mg7o-n mg7o-p mg7o-r mg7o-s  x-hide-lg x-hide-md x-hide-sm x-hide-xl x-hide-xs">
							<a class="x-anchor x-anchor-button has-graphic has-particle e21012-33 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1i mg7o-1j mg7o-1k mg7o-1r"
								tabindex="0" href="https://www.facebook.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf09a;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-34 mg7o-15 mg7o-17 mg7o-18 mg7o-1i mg7o-1j mg7o-1l mg7o-1r mg7o-1s"
								tabindex="0" href="https://www.instagram.com/cbavalanchecenter/" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf16d;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a><a
								class="x-anchor x-anchor-button has-graphic has-particle e21012-35 mg7o-14 mg7o-15 mg7o-17 mg7o-18 mg7o-1i mg7o-1j mg7o-1r mg7o-1t"
								tabindex="0" href="https://www.youtube.com/user/CBavalanche" target="_blank">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-b="&#xf167;"></i>
									</span>
								</div><span class="x-particle is-primary" data-x-particle="scale-x_y inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></div>
						<div class="x-bar-container e21012-36 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k"><span
								class="x-image e21012-37 mg7o-w"><img
									src="https://dev.cbavalanchecenter.org/wp-content/uploads/2020/02/ReFUND_Logo-CBAC.jpg"
									width="333" height="333" alt="Image" loading="lazy"></span></div>
					</div>
				</div>
				<div class="x-bar x-bar-footer x-bar-h x-bar-relative x-bar-outer-spacers e21012-38 mg7o-2 mg7o-3 mg7o-4 mg7o-7 mg7o-8 mg7o-b"
					data-x-bar="{&quot;id&quot;:&quot;e21012-38&quot;,&quot;region&quot;:&quot;footer&quot;,&quot;height&quot;:&quot;6em&quot;}">
					<div class="e21012-38 x-bar-content">
						<div class="x-bar-container e21012-39 mg7o-c mg7o-e mg7o-g mg7o-h mg7o-i mg7o-j mg7o-k">
							<div class="x-text e21012-40 mg7o-u mg7o-v">
								<p>CBAC &copy; Copyright 2020 | WEB SITE DESIGN BY <a
										title="Crested Butte Web Design &amp; Marketing"
										href="http://midnightmarketingsolutions.com" target="_blank"
										rel="noopener">MMS</a></p>
							</div>
						</div>
					</div>
				</div>

			</footer>

			<div id="e11383-10-off-canvas" class="x-off-canvas x-off-canvas-right m8s7-1d e11383-10" role="dialog"
				tabindex="-1" data-x-toggleable="e11383-10" aria-hidden="true" aria-label="Off Canvas"><span
					class="x-off-canvas-bg"></span><button class="x-off-canvas-close x-off-canvas-close-right"
					data-x-toggle-close="1" aria-label="Close Off Canvas Content"><span><svg viewBox="0 0 16 16">
							<g>
								<path
									d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z">
								</path>
							</g>
						</svg></span></button>
				<div class="x-off-canvas-content x-off-canvas-content-right"
					data-x-scrollbar="{&quot;suppressScrollX&quot;:true}" role="document"
					aria-label="Off Canvas Content">
					<ul class="x-menu x-menu-collapsed m8s7-q m8s7-s e11383-10">
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17021"
							id="menu-item-17021"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="/" id="x-menu-collapsed-anchor-e11383-10-0" data-x-toggle="collapse"
								data-x-toggleable="e11383-10-0" aria-controls="x-menu-collapsed-list-e11383-10-0"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Forecast</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-0" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-10-0" data-x-toggleable="e11383-10-0"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25897"
									id="menu-item-25897"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains"
										id="x-menu-collapsed-anchor-e11383-10-1" data-x-toggle="collapse"
										data-x-toggleable="e11383-10-1"
										aria-controls="x-menu-collapsed-list-e11383-10-1" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Northwest
													Mountains</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-1"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-1"
										data-x-toggleable="e11383-10-1" data-x-toggle-collapse="1">
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25898"
											id="menu-item-25898"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/southest-mountains">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Southeast Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25896"
									id="menu-item-25896"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Forecast</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20829"
									id="menu-item-20829"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/forecasts/#/archive">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25553"
							id="menu-item-25553"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/view-observations/"
								id="x-menu-collapsed-anchor-e11383-10-2" data-x-toggle="collapse"
								data-x-toggleable="e11383-10-2" aria-controls="x-menu-collapsed-list-e11383-10-2"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Observations</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-2" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-10-2" data-x-toggleable="e11383-10-2"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26077"
									id="menu-item-26077"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/tag/2021-22-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">View
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20969"
									id="menu-item-20969"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/submit-your-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Submit Your
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26674"
									id="menu-item-26674"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weekly
													Snowpack Summary</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26518"
									id="menu-item-26518"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-3"
										data-x-toggle="collapse" data-x-toggleable="e11383-10-3"
										aria-controls="x-menu-collapsed-list-e11383-10-3" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Avalanches</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-3"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-3"
										data-x-toggleable="e11383-10-3" data-x-toggle-collapse="1">
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26517"
											id="menu-item-26517"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Table</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27173"
											id="menu-item-27173"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Rose</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16994"
							id="menu-item-16994"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/membership/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate / Join</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16995"
							id="menu-item-16995"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/category/backcountry-notes/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">News and
											Events</span></div><i class="x-anchor-sub-indicator"
										data-x-skip-scroll="true" aria-hidden="true" data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16996"
							id="menu-item-16996"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-4" data-x-toggle="collapse"
								data-x-toggleable="e11383-10-4" aria-controls="x-menu-collapsed-list-e11383-10-4"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Resources</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-4" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-10-4" data-x-toggleable="e11383-10-4"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20960"
									id="menu-item-20960"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/cbac-forecast-zones/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">CBAC Forecast
													Zones Map</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17184"
									id="menu-item-17184"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/weather/weather-station/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Stations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16999"
									id="menu-item-16999"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/danger-scale/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Danger
													Scale</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16998"
									id="menu-item-16998"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/education-links/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Education
													Links</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17000"
									id="menu-item-17000"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/avalanche_problem_definitions/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Avalanche
													Problem Definitions</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17001"
									id="menu-item-17001"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-5"
										data-x-toggle="collapse" data-x-toggleable="e11383-10-5"
										aria-controls="x-menu-collapsed-list-e11383-10-5" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-5"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-5"
										data-x-toggleable="e11383-10-5" data-x-toggle-collapse="1">
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26363"
											id="menu-item-26363"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-6"
												data-x-toggle="collapse" data-x-toggleable="e11383-10-6"
												aria-controls="x-menu-collapsed-list-e11383-10-6" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Observations</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-6"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-6"
												data-x-toggleable="e11383-10-6" data-x-toggle-collapse="1">
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20793"
													id="menu-item-20793"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20795"
													id="menu-item-20795"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17007"
													id="menu-item-17007"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19
																	Observations</span><span
																	class="x-anchor-text-secondary">2019-19 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17006"
													id="menu-item-17006"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18
																	Observations</span><span
																	class="x-anchor-text-secondary">2017-18 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17005"
													id="menu-item-17005"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2016-17-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016-17
																	Observations</span><span
																	class="x-anchor-text-secondary">2016-17 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17004"
													id="menu-item-17004"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2015-16-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2015-16
																	Observations</span><span
																	class="x-anchor-text-secondary">2015-16 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17003"
													id="menu-item-17003"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2014-15-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2014-15
																	Observations</span><span
																	class="x-anchor-text-secondary">2014-15 Observation
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26365"
											id="menu-item-26365"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-7"
												data-x-toggle="collapse" data-x-toggleable="e11383-10-7"
												aria-controls="x-menu-collapsed-list-e11383-10-7" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Accidents</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-7"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-7"
												data-x-toggleable="e11383-10-7" data-x-toggle-collapse="1">
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22203"
													id="menu-item-22203"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-accidents/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Accidents</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26364"
											id="menu-item-26364"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-10-8"
												data-x-toggle="collapse" data-x-toggleable="e11383-10-8"
												aria-controls="x-menu-collapsed-list-e11383-10-8" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Summaries</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-10-8"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-10-8"
												data-x-toggleable="e11383-10-8" data-x-toggle-collapse="1">
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26362"
													id="menu-item-26362"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17397"
													id="menu-item-17397"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17376"
													id="menu-item-17376"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/snowpack-summaries/seasonal-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016 &#8211; 17
																	Weekly Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17379"
													id="menu-item-17379"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17380"
													id="menu-item-17380"><a
														class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19 Weekly
																	Snowpack Summaries</span><span
																	class="x-anchor-text-secondary">2018-19 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26366"
											id="menu-item-26366"><a
												class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Forecasts</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17010"
							id="menu-item-17010"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/about-us/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">About Us</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
					</ul>
				</div>
			</div>
			<div id="e11383-21-off-canvas" class="x-off-canvas x-off-canvas-right m8s7-1d e11383-21" role="dialog"
				tabindex="-1" data-x-toggleable="e11383-21" aria-hidden="true" aria-label="Off Canvas"><span
					class="x-off-canvas-bg"></span><button class="x-off-canvas-close x-off-canvas-close-right"
					data-x-toggle-close="1" aria-label="Close Off Canvas Content"><span><svg viewBox="0 0 16 16">
							<g>
								<path
									d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z">
								</path>
							</g>
						</svg></span></button>
				<div class="x-off-canvas-content x-off-canvas-content-right"
					data-x-scrollbar="{&quot;suppressScrollX&quot;:true}" role="document"
					aria-label="Off Canvas Content">
					<ul class="x-menu x-menu-collapsed m8s7-q m8s7-s e11383-21">
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17021">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="/" id="x-menu-collapsed-anchor-e11383-21-0" data-x-toggle="collapse"
								data-x-toggleable="e11383-21-0" aria-controls="x-menu-collapsed-list-e11383-21-0"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Forecast</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-0" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-21-0" data-x-toggleable="e11383-21-0"
								data-x-toggle-collapse="1">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25897">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains"
										id="x-menu-collapsed-anchor-e11383-21-1" data-x-toggle="collapse"
										data-x-toggleable="e11383-21-1"
										aria-controls="x-menu-collapsed-list-e11383-21-1" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Northwest
													Mountains</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-1"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-1"
										data-x-toggleable="e11383-21-1" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25898">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/southest-mountains">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Southeast Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25896"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Forecast</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20829"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/forecasts/#/archive">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25553">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/view-observations/"
								id="x-menu-collapsed-anchor-e11383-21-2" data-x-toggle="collapse"
								data-x-toggleable="e11383-21-2" aria-controls="x-menu-collapsed-list-e11383-21-2"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Observations</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-2" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-21-2" data-x-toggleable="e11383-21-2"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26077"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/tag/2021-22-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">View
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20969"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/submit-your-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Submit Your
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26674">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weekly
													Snowpack Summary</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26518">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-3"
										data-x-toggle="collapse" data-x-toggleable="e11383-21-3"
										aria-controls="x-menu-collapsed-list-e11383-21-3" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Avalanches</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-3"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-3"
										data-x-toggleable="e11383-21-3" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26517">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Table</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27173">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Rose</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16994"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/membership/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate / Join</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16995"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/category/backcountry-notes/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">News and
											Events</span></div><i class="x-anchor-sub-indicator"
										data-x-skip-scroll="true" aria-hidden="true" data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16996">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-4" data-x-toggle="collapse"
								data-x-toggleable="e11383-21-4" aria-controls="x-menu-collapsed-list-e11383-21-4"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Resources</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-4" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-21-4" data-x-toggleable="e11383-21-4"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20960"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/cbac-forecast-zones/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">CBAC Forecast
													Zones Map</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17184"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/weather/weather-station/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Stations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16999"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/danger-scale/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Danger
													Scale</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16998"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/education-links/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Education
													Links</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17000"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/avalanche_problem_definitions/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Avalanche
													Problem Definitions</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17001">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-5"
										data-x-toggle="collapse" data-x-toggleable="e11383-21-5"
										aria-controls="x-menu-collapsed-list-e11383-21-5" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-5"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-5"
										data-x-toggleable="e11383-21-5" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26363">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-6"
												data-x-toggle="collapse" data-x-toggleable="e11383-21-6"
												aria-controls="x-menu-collapsed-list-e11383-21-6" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Observations</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-6"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-6"
												data-x-toggleable="e11383-21-6" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20793">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20795">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17007">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19
																	Observations</span><span
																	class="x-anchor-text-secondary">2019-19 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17006">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18
																	Observations</span><span
																	class="x-anchor-text-secondary">2017-18 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17005">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2016-17-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016-17
																	Observations</span><span
																	class="x-anchor-text-secondary">2016-17 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17004">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2015-16-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2015-16
																	Observations</span><span
																	class="x-anchor-text-secondary">2015-16 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17003">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2014-15-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2014-15
																	Observations</span><span
																	class="x-anchor-text-secondary">2014-15 Observation
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26365">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-7"
												data-x-toggle="collapse" data-x-toggleable="e11383-21-7"
												aria-controls="x-menu-collapsed-list-e11383-21-7" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Accidents</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-7"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-7"
												data-x-toggleable="e11383-21-7" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22203">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-accidents/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Accidents</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26364">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-21-8"
												data-x-toggle="collapse" data-x-toggleable="e11383-21-8"
												aria-controls="x-menu-collapsed-list-e11383-21-8" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Summaries</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-21-8"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-21-8"
												data-x-toggleable="e11383-21-8" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26362">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17397">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17376">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/snowpack-summaries/seasonal-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016 &#8211; 17
																	Weekly Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17379">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17380">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19 Weekly
																	Snowpack Summaries</span><span
																	class="x-anchor-text-secondary">2018-19 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26366">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Forecasts</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17010"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/about-us/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">About Us</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
					</ul>
				</div>
			</div>
			<div id="e11383-32-off-canvas" class="x-off-canvas x-off-canvas-right m8s7-1d e11383-32" role="dialog"
				tabindex="-1" data-x-toggleable="e11383-32" aria-hidden="true" aria-label="Off Canvas"><span
					class="x-off-canvas-bg"></span><button class="x-off-canvas-close x-off-canvas-close-right"
					data-x-toggle-close="1" aria-label="Close Off Canvas Content"><span><svg viewBox="0 0 16 16">
							<g>
								<path
									d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z">
								</path>
							</g>
						</svg></span></button>
				<div class="x-off-canvas-content x-off-canvas-content-right"
					data-x-scrollbar="{&quot;suppressScrollX&quot;:true}" role="document"
					aria-label="Off Canvas Content">
					<ul class="x-menu x-menu-collapsed m8s7-q m8s7-s e11383-32">
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17021">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="/" id="x-menu-collapsed-anchor-e11383-32-0" data-x-toggle="collapse"
								data-x-toggleable="e11383-32-0" aria-controls="x-menu-collapsed-list-e11383-32-0"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Forecast</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-0" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-32-0" data-x-toggleable="e11383-32-0"
								data-x-toggle-collapse="1">
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25897">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/forecasts/#/northwest-mountains"
										id="x-menu-collapsed-anchor-e11383-32-1" data-x-toggle="collapse"
										data-x-toggleable="e11383-32-1"
										aria-controls="x-menu-collapsed-list-e11383-32-1" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Northwest
													Mountains</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-1"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-1"
										data-x-toggleable="e11383-32-1" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25898">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://cbavalanchecenter.org/forecasts/#/southest-mountains">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Southeast Mountains</span>
													</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-25896"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/forecasts/#/weather">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Forecast</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20829"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/forecasts/#/archive">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
							</ul>
						</li>
						<li
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-25553">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/view-observations/"
								id="x-menu-collapsed-anchor-e11383-32-2" data-x-toggle="collapse"
								data-x-toggleable="e11383-32-2" aria-controls="x-menu-collapsed-list-e11383-32-2"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Observations</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-2" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-32-2" data-x-toggleable="e11383-32-2"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26077"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="/tag/2021-22-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">View
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20969"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/submit-your-observations/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Submit Your
													Observations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26674">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/category/2021-22-weekly-snowpack-summary/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weekly
													Snowpack Summary</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26518">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-3"
										data-x-toggle="collapse" data-x-toggleable="e11383-32-3"
										aria-controls="x-menu-collapsed-list-e11383-32-3" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Avalanches</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-3"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-3"
										data-x-toggleable="e11383-32-3" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26517">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://docs.google.com/spreadsheets/d/1xL2iXjjMsr4cGzomA3MLO7FGcvwXzOCpw4bSxIqt7VA/edit#gid=496425334">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Table</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27173">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0"
												href="https://storage.googleapis.com/cbac-306316.appspot.com/avys.jpg">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Avalanche Rose</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16994"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/membership/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Donate / Join</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-16995"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/category/backcountry-notes/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">News and
											Events</span></div><i class="x-anchor-sub-indicator"
										data-x-skip-scroll="true" aria-hidden="true" data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
						<li
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-16996">
							<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-4" data-x-toggle="collapse"
								data-x-toggleable="e11383-32-4" aria-controls="x-menu-collapsed-list-e11383-32-4"
								aria-expanded="false" aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Resources</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a>
							<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-4" aria-hidden="true"
								aria-labelledby="x-menu-collapsed-anchor-e11383-32-4" data-x-toggleable="e11383-32-4"
								data-x-toggle-collapse="1">
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20960"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/cbac-forecast-zones/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">CBAC Forecast
													Zones Map</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17184"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/weather/weather-station/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Weather
													Stations</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16999"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/danger-scale/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Danger
													Scale</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16998"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="https://cbavalanchecenter.org/education-links/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Education
													Links</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17000"><a
										class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0"
										href="https://cbavalanchecenter.org/avalanche_problem_definitions/">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span class="x-anchor-text-primary">Avalanche
													Problem Definitions</span></div><i class="x-anchor-sub-indicator"
												data-x-skip-scroll="true" aria-hidden="true"
												data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a></li>
								<li
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-17001">
									<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
										tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-5"
										data-x-toggle="collapse" data-x-toggleable="e11383-32-5"
										aria-controls="x-menu-collapsed-list-e11383-32-5" aria-expanded="false"
										aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
										<div class="x-anchor-content">
											<span class="x-graphic" aria-hidden="true">

												<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
													class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
													aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
											</span>
											<div class="x-anchor-text"><span
													class="x-anchor-text-primary">Archives</span></div><i
												class="x-anchor-sub-indicator" data-x-skip-scroll="true"
												aria-hidden="true" data-x-icon-s="&#xf107;"></i>
										</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
											aria-hidden="true"><span style=""></span></span>
									</a>
									<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-5"
										aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-5"
										data-x-toggleable="e11383-32-5" data-x-toggle-collapse="1">
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26363">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-6"
												data-x-toggle="collapse" data-x-toggleable="e11383-32-6"
												aria-controls="x-menu-collapsed-list-e11383-32-6" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Observations</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-6"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-6"
												data-x-toggleable="e11383-32-6" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20793">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20795">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20
																	Observations</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17007">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19
																	Observations</span><span
																	class="x-anchor-text-secondary">2019-19 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17006">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18
																	Observations</span><span
																	class="x-anchor-text-secondary">2017-18 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17005">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2016-17-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016-17
																	Observations</span><span
																	class="x-anchor-text-secondary">2016-17 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17004">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2015-16-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2015-16
																	Observations</span><span
																	class="x-anchor-text-secondary">2015-16 Observations
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17003">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2014-15-observations/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2014-15
																	Observations</span><span
																	class="x-anchor-text-secondary">2014-15 Observation
																	Archives</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26365">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-7"
												data-x-toggle="collapse" data-x-toggleable="e11383-32-7"
												aria-controls="x-menu-collapsed-list-e11383-32-7" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Accidents</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-7"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-7"
												data-x-toggleable="e11383-32-7" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22203">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-accidents/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21
																	Accidents</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-26364">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="#" id="x-menu-collapsed-anchor-e11383-32-8"
												data-x-toggle="collapse" data-x-toggleable="e11383-32-8"
												aria-controls="x-menu-collapsed-list-e11383-32-8" aria-expanded="false"
												aria-haspopup="true" aria-label="Toggle Collapsed Sub Menu">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Weekly Summaries</span></div>
													<i class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a>
											<ul class="sub-menu x-collapsed" id="x-menu-collapsed-list-e11383-32-8"
												aria-hidden="true" aria-labelledby="x-menu-collapsed-anchor-e11383-32-8"
												data-x-toggleable="e11383-32-8" data-x-toggle-collapse="1">
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26362">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2020-21-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2020-21 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17397">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2019-20-weekly-snowpack-summary/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2019-20 Weekly
																	Snowpack Summary</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17376">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/snowpack-summaries/seasonal-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2016 &#8211; 17
																	Weekly Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17379">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2017-18-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2017-18 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
												<li
													class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-17380">
													<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
														tabindex="0"
														href="https://cbavalanchecenter.org/category/2018-19-weekly-snowpack-summaries/">
														<div class="x-anchor-content">
															<span class="x-graphic" aria-hidden="true">

																<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
																	class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
																	aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
															</span>
															<div class="x-anchor-text"><span
																	class="x-anchor-text-primary">2018-19 Weekly
																	Snowpack Summaries</span><span
																	class="x-anchor-text-secondary">2018-19 Weekly
																	Snowpack Summaries</span></div><i
																class="x-anchor-sub-indicator" data-x-skip-scroll="true"
																aria-hidden="true" data-x-icon-s="&#xf107;"></i>
														</div><span class="x-particle is-primary"
															data-x-particle="scale-x inside-c_c"
															aria-hidden="true"><span style=""></span></span>
													</a></li>
											</ul>
										</li>
										<li
											class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26366">
											<a class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-w m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-13 m8s7-15 m8s7-16 m8s7-19 m8s7-1b m8s7-1c"
												tabindex="0" href="/forecasts/#/archive">
												<div class="x-anchor-content">
													<span class="x-graphic" aria-hidden="true">

														<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
															class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
															aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
													</span>
													<div class="x-anchor-text"><span
															class="x-anchor-text-primary">Forecasts</span></div><i
														class="x-anchor-sub-indicator" data-x-skip-scroll="true"
														aria-hidden="true" data-x-icon-s="&#xf107;"></i>
												</div><span class="x-particle is-primary"
													data-x-particle="scale-x inside-c_c" aria-hidden="true"><span
														style=""></span></span>
											</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17010"><a
								class="x-anchor x-anchor-menu-item has-graphic has-particle m8s7-x m8s7-y m8s7-10 m8s7-11 m8s7-12 m8s7-13 m8s7-16 m8s7-19 m8s7-1b"
								tabindex="0" href="https://cbavalanchecenter.org/about-us/">
								<div class="x-anchor-content">
									<span class="x-graphic" aria-hidden="true">

										<i class="x-icon x-graphic-child x-graphic-icon x-graphic-primary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i><i
											class="x-icon x-graphic-child x-graphic-icon x-graphic-secondary"
											aria-hidden="true" data-x-icon-o="&#xf25a;"></i>
									</span>
									<div class="x-anchor-text"><span class="x-anchor-text-primary">About Us</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf107;"></i>
								</div><span class="x-particle is-primary" data-x-particle="scale-x inside-c_c"
									aria-hidden="true"><span style=""></span></span>
							</a></li>
					</ul>
				</div>
			</div>
			<div id="e21012-15-modal" class="x-modal mg7o-1u e21012-15  x-hide-lg x-hide-md x-hide-xl" role="dialog"
				tabindex="-1" data-x-toggleable="e21012-15" data-x-scrollbar="{&quot;suppressScrollX&quot;:true}"
				aria-hidden="true" aria-label="Modal"><span class="x-modal-bg"></span><button
					class="x-modal-close x-modal-close-top x-modal-close-right" data-x-toggle-close="1"
					aria-label="Close Modal Content"><span><svg viewBox="0 0 16 16">
							<g>
								<path
									d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z">
								</path>
							</g>
						</svg></span></button>
				<div class="x-modal-content" role="document" aria-label="Modal Content">
					<ul class="x-menu x-menu-modal x-menu-layered x-current-layer mg7o-10 mg7o-11"
						data-x-toggle-layered-root="1">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1539"
							id="menu-item-1539"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://cbavalanchecenter.org/forecasters-page/">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Avi Fx Admin</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1536"
							id="menu-item-1536"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://cbavalanchecenter.org/fx-discussion-admin/">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">FxD Admin</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1537"
							id="menu-item-1537"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://cbavalanchecenter.org/admin-warning-page/">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Warning Admin</span>
									</div><i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1538"
							id="menu-item-1538"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://cbavalanchecenter.org/forecasters-weather-page/">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Wx Page</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13560"
							id="menu-item-13560"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://cbavalanchecenter.org/web-411/">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Web 411</span></div>
									<i class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
					</ul>
				</div>
			</div>
			<div id="e21012-31-modal" class="x-modal mg7o-1u e21012-31" role="dialog" tabindex="-1"
				data-x-toggleable="e21012-31" data-x-scrollbar="{&quot;suppressScrollX&quot;:true}" aria-hidden="true"
				aria-label="Modal"><span class="x-modal-bg"></span><button
					class="x-modal-close x-modal-close-top x-modal-close-right" data-x-toggle-close="1"
					aria-label="Close Modal Content"><span><svg viewBox="0 0 16 16">
							<g>
								<path
									d="M14.7,1.3c-0.4-0.4-1-0.4-1.4,0L8,6.6L2.7,1.3c-0.4-0.4-1-0.4-1.4,0s-0.4,1,0,1.4L6.6,8l-5.3,5.3 c-0.4,0.4-0.4,1,0,1.4C1.5,14.9,1.7,15,2,15s0.5-0.1,0.7-0.3L8,9.4l5.3,5.3c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3 c0.4-0.4,0.4-1,0-1.4L9.4,8l5.3-5.3C15.1,2.3,15.1,1.7,14.7,1.3z">
								</path>
							</g>
						</svg></span></button>
				<div class="x-modal-content" role="document" aria-label="Modal Content">
					<ul class="x-menu x-menu-modal x-menu-layered x-current-layer mg7o-10 mg7o-11"
						data-x-toggle-layered-root="1">
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-20814"
							id="menu-item-20814"><a
								class="x-anchor x-anchor-menu-item mg7o-14 mg7o-15 mg7o-16 mg7o-17 mg7o-18 mg7o-1a mg7o-1c mg7o-1e"
								tabindex="0" href="https://centers.avalanche.org/#/map">
								<div class="x-anchor-content">
									<div class="x-anchor-text"><span class="x-anchor-text-primary">Login</span></div><i
										class="x-anchor-sub-indicator" data-x-skip-scroll="true" aria-hidden="true"
										data-x-icon-s="&#xf105;"></i>
								</div>
							</a></li>
					</ul>
				</div>
			</div>
		</div> <!-- END .x-site -->


		<a class="x-scroll-top right fade" title="Back to Top">

			<i class="x-icon-angle-up" data-x-icon-s="&#xf106;"></i>
		</a>

		<script>
			jQuery(document).ready(function ($) {

				var $window = $(window);
				var body = $('body');
				var bodyOffsetBottom = $window.scrollBottom(); // 1
				var bodyHeightAdjustment = body.height() - bodyOffsetBottom; // 2
				var bodyHeightAdjusted = body.height() - bodyHeightAdjustment; // 3
				var $scrollTopAnchor = $('.x-scroll-top');

				function sizingUpdate() {
					var bodyOffsetTop = $window.scrollTop();
					if (bodyOffsetTop > (bodyHeightAdjusted * 0.25)) {
						$scrollTopAnchor.addClass('in');
					} else {
						$scrollTopAnchor.removeClass('in');
					}
				}

				$window.on('scroll', sizingUpdate).resize(sizingUpdate);
				sizingUpdate();

				$scrollTopAnchor.on('click', function () {
					$('html, body').animate({
						scrollTop: 0
					}, 850, 'xEaseInOutExpo');
					return false;
				});

			});
		</script>


	</div> <!-- END .x-root -->

	<script id="gf_bulk_actions_adminbar_quick_links">
		window.onload = function () {
			var $ = jQuery;
			var $adminBarFormsMenu = $('#wp-admin-bar-gform-form-recent-forms');
			if ($adminBarFormsMenu.length) {
				$adminBarFormsMenu.find('> li > .ab-sub-wrapper > .ab-submenu').each(function () {
					var $formSubmenu = $(this);
					var submenuID = $formSubmenu.attr('id');
					var bulkActionsMenuItemID = submenuID.replace('-default', '-bulk_actions');
					var $lastItem = $formSubmenu.find('li[id$="-edit"]');
					var $bulkActionsItem = $($lastItem.clone());
					$bulkActionsItem.attr('id', bulkActionsMenuItemID);
					var bulkActionsItemURL = $bulkActionsItem.find('> a').attr('href');
					$bulkActionsItem.find('> a').attr('href', bulkActionsItemURL.replace('page=gf_edit_forms&id=',
						'page=bulk-actions-pro-for-gravity-forms&gform_id=')).text('Bulk Actions');
					$formSubmenu.append($bulkActionsItem);
				});
			}
		};
	</script>
	<link rel='stylesheet' id='lshowcase-main-style-css'
		href='https://cbavalanchecenter.org/wp-content/plugins/logos-showcase/css/styles.css?ver=5.8.2' type='text/css'
		media='all' />
	<script type='text/javascript' id='cornerstone-site-body-js-extra'>
		/* <![CDATA[ */
		var csJsData = {
			"linkSelector": "a[href*=\"#\"]"
		};
		/* ]]> */
	</script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/themes/pro/cornerstone/assets/js/site/cs.e521902.js'
		id='cornerstone-site-body-js'></script>
	<script type='text/javascript' id='clicktrack-adrotate-js-extra'>
		/* <![CDATA[ */
		var click_object = {
			"ajax_url": "https:\/\/cbavalanchecenter.org\/wp-admin\/admin-ajax.php"
		};
		/* ]]> */
	</script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/plugins/adrotate/library/jquery.adrotate.clicktracker.js'
		id='clicktrack-adrotate-js'></script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/themes/pro/framework/dist/js/site/x.js?ver=5.0.8' id='x-site-js'>
	</script>
	<script type='text/javascript' src='https://cbavalanchecenter.org/wp-includes/js/comment-reply.min.js?ver=5.8.2'
		id='comment-reply-js'></script>
	<script type='text/javascript' src='https://cbavalanchecenter.org/wp-includes/js/wp-embed.min.js?ver=5.8.2'
		id='wp-embed-js'></script>
	<script type='text/javascript' id='lshowcase-tracking-js-extra'>
		/* <![CDATA[ */
		var ajax_object = {
			"ajax_url": "https:\/\/cbavalanchecenter.org\/wp-admin\/admin-ajax.php"
		};
		/* ]]> */
	</script>
	<script type='text/javascript'
		src='https://cbavalanchecenter.org/wp-content/plugins/logos-showcase/js/track.js?ver=5.8.2'
		id='lshowcase-tracking-js'></script>
	<script id="cornerstone-custom-js" type="text/javascript">
		/* -------- LOAD IFRAME -------- */
		function loadIframe() {
			content.html('<div class="mmsframe-container"><iframe class="mmsframe" src="' + dest + '"></iframe></div>');
			//  $('.mmsframe').load(function(){ // valid only for iFrames in same domain
			updateoverlay();
			//  });
		}
		jQuery(document).ready(function ($) {
			$('.menu-item.menu-item-has-children').hover(function () {
				$(this).find('.sub-menu').addClass('x-active');
			}, function () {
				$(this).find('.sub-menu').removeClass('x-active');
			});
		});
	</script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="/lib/jQRangeSlider/lib/jquery.mousewheel.min.js"></script>
  
	<script src="/lib/jQRangeSlider/jQRangeSliderMouseTouch.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderDraggable.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderHandle.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderBar.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSliderLabel.js"></script>
	<script src="/lib/jQRangeSlider/jQRangeSlider.js"></script>
  
	<script src="/lib/jQRangeSlider/jQDateRangeSliderHandle.js"></script>
	<script src="/lib/jQRangeSlider/jQDateRangeSlider.js"></script>
  
	<script src="/lib/jQRangeSlider/jQEditRangeSliderLabel.js"></script>
	<script src="/lib/jQRangeSlider/jQEditRangeSlider.js"></script>
  
	<script src="/lib/jQRangeSlider/jQRuler.js"></script>

	<!--- <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js" integrity="sha256-hlKLmzaRlE8SCJC1Kw8zoUbU8BxA+8kR3gseuKfMjxA=" crossorigin="anonymous"></script> --->
	<script type="text/javascript" src="/lib/jQRangeSlider/jQDateRangeSlider.js"></script>
	<script type="text/javascript" src="/js/rose.js"></script>
	
	<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>

</html>