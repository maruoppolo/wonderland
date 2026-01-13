<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wonder_Land
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if ( have_posts() ) :

            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;

        else :
            echo '<p>' . esc_html__( 'Nothing found here.', 'wonderland' ) . '</p>';

        endif;
        ?>
    </div>
</main>

<?php
get_footer();