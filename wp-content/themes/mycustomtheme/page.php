<?php
    /**
     * This file defines the default page template.
     *
     * @package WordPress
     * @subpackage mycustomtheme
     * @since mycustomtheme 1.0
    */
    $post_id                =   (isset($post->ID)) ? $post->ID : 0;
    $featured_img           =   getPostFeaturedImage($post_id);
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="robots" content="index,follow">
        <title>Test Website</title>
        <!-- Latest compiled and minified CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">        
               
        <!-- font family load -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
        <main>
            <section class="content-area content-thin">
                <div class="container">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="article-full">
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <img src=<?= $featured_img ?> alt="featured image" width="100%"/>
                            By: <?php the_author(); ?>
                            <?php the_content(); ?>
                        </article>
                    <?php endwhile; else : ?>
                        <article>
                            <p>Sorry, no page was found!</p>
                        </article>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php
            wp_footer();
        ?> 
    </body>
</html>