<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="cf">
		<main id="main" class="wrap cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<div class="cf">
				<?php
				    $postsPerPage = 20;
				    $args = array(
				            'post_type' => 'post',
				            'posts_per_page' => $postsPerPage
				    );

				    $loop = new WP_Query($args);
					$i=0;
					$lastCol="";
				    while ($loop->have_posts()) : $loop->the_post();

				?>
					
				<?php if ($i==0) {?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'article-top cf' ); ?> role="article">

					<a class="image cf t-full" style="color :<?php the_field("shadow_hover"); ?>;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
					<a class="image cf t-400" style="color :<?php the_field("shadow_hover"); ?>;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('bones-thumb-400'); ?></a>
						<header class="article-header d-1of2 t-1of2 m-all cf">

							<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<?php printf( '<p class="category">' . ' %1$s</p>' , get_the_category_list(', ','') ); ?>
						</header>

						<section class="entry-content d-1of2 t-1of2 m-all last-col cf">
							<?php the_excerpt(); ?>
						</section>

						<footer class="article-footer wrap cf">
						</footer>
					</article>

					<?php }else{
						
					?>
						<?php //if($i % 3 == 0){ $lastCol="last-col"; } ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class( ''.$lastCol.' article-list cf m-all t-1of2 d-1of3' ); ?> role="article">
							<header class="cf article-header">
							
							<a class="image" style="color :<?php the_field("shadow_hover"); ?>;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('bones-thumb-400'); ?></a>

								<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							</header>
							<footer class="article-footer cf">

             				<?php printf( '<p class="category">' . ' %1$s</p>' , get_the_category_list(', ','') ); ?>



							</footer>
						</article>
					<?php }  ?>
				<?php 
				$lastCol ="";
				$i++;
				?>

<!-- <div class="wrap cf">
<?php //echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="6" scroll="false" button_label="Afficher plus d\'articles" button_loading_label="..."]'); ?>

</div> -->
				<?php endwhile;  wp_reset_postdata();?>
			</div>



			<div id="sendgrid_mc_email_subscribe" class="wrap cf">
				<?php get_sidebar(); ?>
			</div>


					<?php bones_page_navi(); ?>
		</main>
	</div>

</div>
<?php if(function_exists('add_social_button_in_content')) { echo add_social_button_in_content(); echo "0";}?> 

<?php get_footer(); ?>