<?php get_header(); ?>

			<div id="content" class="category-<?php single_cat_title(); ?>">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							echo '<h1 class="category archive-title">';
							single_cat_title();
							echo '</h1>'; ?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'article-list cf m-all t-1of2 d-1of3' ); ?> role="article">
							<header class="article-header">
							<a style="color :<?php the_field("shadow_hover"); ?>;" class="image" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('bones-thumb-400'); ?></a>

								<h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

							</header>
							<footer class="article-footer cf">
							<div class="exerpt">
	             				<?php //printf( '<p class="tag">&nbsp;' . ' %1$s</p>' , get_the_tag_list('', ', ') ); ?>
							</div>


							</footer>
						</article>

							<?php endwhile; ?>


							<?php endif; ?>

						</main>
			<div id="sendgrid_mc_email_subscribe" class="wrap cf">
				<?php get_sidebar(); ?>
			</div>
				</div>

			</div>

<?php get_footer(); ?>
