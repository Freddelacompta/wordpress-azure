
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">

                <?php the_post_thumbnail('full'); ?>
                  <h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  <?php printf( '<p class="category">' . ' %1$s</p>' , get_the_category_list(', ','') ); ?>

                  <p class="byline entry-meta vcard">
                    <span class="avatar-author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></span>
                    <span class="details-author">
                      <?php printf( __( 'Rédigé avec ❤️ ', 'bonestheme' ).' %1$s %2$s',
                         /* the author of the post */
                         '<span class="by">'.__( 'by', 'bonestheme' ).'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>',
                         /* the time the post was published */
                         '<span class="the">'.__( 'le', 'bonestheme' ).'</span> <time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'
                      ); ?>
                      </span>

                  </p>

                </header> <?php // end article header ?>

                <section class="wrap700 entry-content cf" itemprop="articleBody">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    
                  ?>
                </section> <?php // end article section ?>

                <footer class="article-footer wrap-cf">
                  <?php
                    //for use in the loop, list 5 post titles related to first tag on current post
                    $tags = wp_get_post_tags($post->ID);
                    if ($tags) {
                    echo '<div class="cf related-posts">Vous aimerez aussi</div>
                    <div class="wrap cf">';
                    $first_tag = $tags[0]->term_id;
                    $args=array(
                    'tag__in' => array($first_tag),
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>3,
                    'caller_get_posts'=>1
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                    while ($my_query->have_posts()) : $my_query->the_post();
                  ?>
                  <section id="post-<?php the_ID(); ?>" <?php post_class( 'article-list cf m-all t-1of3 d-1of3' ); ?> role="article">
                                <header class="article-header">
                                <a style="color :<?php the_field("shadow_hover"); ?>;" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('bones-thumb-400'); ?></a>

                                  <h2 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

                                </header>
                                <footer class="article-footer cf">

                                      <?php printf( '<p class="category">' . ' %1$s</p>' , get_the_category_list(', ','') ); ?>



                                </footer>
                  </section>

 
                    <?php
                    endwhile;
                    }
                    wp_reset_query();
                    }
                    ?>



                </div>
                </footer> <?php // end article footer ?>

                <?php //comments_template(); ?>

              </article> <?php // end article ?>
