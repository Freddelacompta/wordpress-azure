<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<img src="<?php echo get_template_directory_uri(); ?>/library/images/404.svg" alt="Fred de la compta, le blog">

								<h1><?php _e( 'Oups, perdu ?', 'bonestheme' ); ?></h1>

							</header>

							<section class="">


							</section>

							<footer class="cf article-footer">

									<a class="white-btn" href="/blog" title="Retour sur le blog">Revenir à la liste des articles</a>

							</footer>

						</article>

					</main>

				</div>

			</div>

<?php get_footer(); ?>
