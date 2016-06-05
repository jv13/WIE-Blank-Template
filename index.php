<!-- BEGIN HEADER -->
  <?php get_header(); ?>
<!-- END HEADER -->

    <!-- BEGIN SECTION CONTAINER -->
        <section class="row">
            <div class="twelve columns">

                <!-- BEGIN LOOP -->
                <?php
                  if ( have_posts() ) {
                    while ( have_posts() ) {
                      the_post(); ?>
                      <?php

                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('thumbnail');
                        }
                      ?>

                      <h3><?php the_title(); ?></h3>
                      <?php the_excerpt(); ?>

                  <?php
                    } // end while
                  } // end if
                ?>
                <!-- END LOOP -->


            </div>
        </section>
    <!-- END SECTION CONTAINER -->

<!-- BEGIN FOOTER-->
  <?php get_footer(); ?>
<!-- END FOOTER -->
