<?php $mts_options = get_option(MTS_THEME_NAME); ?>
<header id="site-header" role="banner" itemscope itemtype="http://schema.org/WPHeader" class="header-2">
	<div class="ad-navigation clearfix">
		<div class="container">
			<?php if ( $mts_options['mts_show_secondary_nav'] == '1' ) { ?>
			<div id="secondary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php
				if ( $mts_options['mts_show_primary_nav'] !== '1' ) {
					?>
					<a href="#" id="pull" class="toggle-mobile-menu"><?php _e('Menu', MTS_THEME_TEXTDOMAIN ); ?></a>
					<?php if ( has_nav_menu( 'mobile' ) ) { ?>
						<nav class="navigation clearfix">
							<?php
							if ( has_nav_menu( 'secondary-menu' ) ) {
								wp_nav_menu( array(
									'theme_location' => 'secondary-menu',
									'menu_class'     => 'menu clearfix',
									'container'      => '',
									'walker'         => new mts_menu_walker(),
								) );
							} else {
								?>
								<ul class="menu clearfix">
									<?php wp_list_categories( 'title_li=' ); ?>
								</ul>
								<?php
							}
							?>
						</nav>
						<nav class="navigation mobile-only clearfix mobile-menu-wrapper">
							<?php
							wp_nav_menu( array(
								'theme_location' => 'mobile',
								'menu_class'     => 'menu clearfix',
								'container'      => '',
								'walker'         => new mts_menu_walker(),
							) );
							?>
						</nav>
					<?php } else { ?>
						<nav class="navigation clearfix mobile-menu-wrapper">
							<?php
							if ( has_nav_menu( 'secondary-menu' ) ) {
								wp_nav_menu(
									array(
										'theme_location' => 'secondary-menu',
										'menu_class'     => 'menu clearfix',
										'container'      => '',
										'walker'         => new mts_menu_walker(),
									)
								);
							} else {
								?>
								<ul class="menu clearfix">
									<?php wp_list_categories( 'title_li=' ); ?>
								</ul>
								<?php
							}
							?>
						</nav>
						<?php
					}
				} else {
					?>
					<nav class="navigation clearfix<?php if ( $mts_options['mts_show_primary_nav'] !== '1' ) echo ' mobile-menu-wrapper'; ?>">
						<?php if ( has_nav_menu( 'secondary-menu' ) ) { ?>
							<?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'menu_class' => 'menu clearfix', 'container' => '', 'walker' => new mts_menu_walker ) ); ?>
						<?php } else { ?>
							<ul class="menu clearfix">
								<?php wp_list_categories('title_li='); ?>
							</ul>
						<?php } ?>
					</nav>
					<?php
				}
				?>
			</div>
			<?php } ?>
		</div>
	</div>
	<div id="header">
		<div class="container">
			<div class="logo-wrap">
				<?php if ($mts_options['mts_logo'] != '') { ?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
						<h1 id="logo" class="image-logo" itemprop="headline">
							<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_attr( $mts_options['mts_logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
						</h1><!-- END #logo -->
					<?php } else { ?>
						<h2 id="logo" class="image-logo" itemprop="headline">
							<a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_attr( $mts_options['mts_logo'] ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
						</h2><!-- END #logo -->
					<?php } ?>
				<?php } else { ?>
					<?php if( is_front_page() || is_home() || is_404() ) { ?>
						<h1 id="logo" class="text-logo" itemprop="headline">
							<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
						</h1><!-- END #logo -->
					<?php } else { ?>
						<h2 id="logo" class="text-logo" itemprop="headline">
							<a href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
						</h2><!-- END #logo -->
					<?php } ?>
					<div class="site-description" itemprop="description">
						<?php bloginfo( 'description' ); ?>
					</div>
				<?php } ?>
			</div>
			<div class="header-right">
				<div class="header-right-below">
					<?php
					if ( ! empty( $mts_options['mts_header_search'] ) && '1' == $mts_options['mts_header_search'] ) {
						?>
						<div id="morphsearch" class="morphsearch">
							<form method="get" class="morphsearch-form" action="<?php echo esc_attr( home_url() ); ?>" _lpchecked="1">
								<input class="morphsearch-input" name="s" type="text" placeholder="<?php if ( mts_isWooCommerce() ) { _e( 'Search Products...', MTS_THEME_TEXTDOMAIN ); } else { _e( 'Search Blog Posts...', MTS_THEME_TEXTDOMAIN ); } ?>"/>
								<input type="hidden" name="post_type" value="<?php if ( mts_isWooCommerce() ) { echo 'product'; } else { echo 'post'; } ?>" class="post-type-input"/>
								<button class="morphsearch-input"><i class="fa fa-search"></i></button>
								<button class="morphsearch-submit" type="submit"><i class="fa fa-search"></i></button>
							</form>
							<span class="morphsearch-close"></span>
						</div><!--#morphsearch-->
						<?php
					}

					if ( '1' == $mts_options['mts_show_primary_nav'] ) {
						if ( '1' == $mts_options['mts_sticky_nav'] ) {
							?>
							<div id="catcher" class="clear" ></div>
							<div id="primary-navigation" class="sticky-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php } else { ?>
						<div id="primary-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php
						}
						?>
						<div class="container clearfix">
							<a href="#" id="pull" class="toggle-mobile-menu"><span><?php _e('Menu', MTS_THEME_TEXTDOMAIN ); ?></span></a>
							<?php if ( has_nav_menu( 'mobile' ) ) { ?>
								<nav class="navigation clearfix">
									<?php
									if ( has_nav_menu( 'primary-menu' ) ) {
										wp_nav_menu( array(
											'theme_location' => 'primary-menu',
											'menu_class' => 'menu clearfix',
											'container'  => '',
											'walker'     => new mts_menu_walker(),
										) );
									} else {
										?>
										<ul class="menu clearfix">
											<?php wp_list_categories( 'title_li=' ); ?>
										</ul>
										<?php
									}
									?>
								</nav>
								<nav class="navigation mobile-only clearfix mobile-menu-wrapper">
									<?php
									wp_nav_menu( array(
										'theme_location' => 'mobile',
										'menu_class'     => 'menu clearfix',
										'container'      => '',
										'walker'         => new mts_menu_walker(),
									) );
									?>
								</nav>
							<?php } else { ?>
								<nav class="navigation clearfix mobile-menu-wrapper">
									<?php
									if ( has_nav_menu( 'primary-menu' ) ) {
										wp_nav_menu(
											array(
												'theme_location' => 'primary-menu',
												'menu_class' => 'menu clearfix',
												'container' => '',
												'walker' => new mts_menu_walker(),
											)
										);
									} else {
										?>
										<ul class="menu clearfix">
											<?php wp_list_categories( 'title_li=' ); ?>
										</ul>
										<?php
									}
									?>
								</nav>
							<?php } ?>
							</div>
						</div>
					<?php } ?>
					<?php mts_wishlist_link(); ?>
					<?php if ( mts_isWooCommerce() ) mts_cart(); ?>
			    </div><!--.header-right-below-->
			</div><!--.header-right-->
		</div><!--.container-->
	</div><!-- #header-->
</header>