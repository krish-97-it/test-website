<?php
    /**
     * This file defines the homepage. It’ll also be used as the default layout if specific templates such as single.php and page.php are not found
     *
     * @package WordPress
     * @subpackage mycustomtheme
     * @since mycustomtheme 1.0
    */
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
        <!-- <link rel="stylesheet" href="<?= get_template_directory_uri();?>/test.css"> -->
        <!-- font family load -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
        <main>
            <section class="content-area content-thin">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article class="article-full">
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        By: <?php the_author(); ?>
                        <?php the_content(); ?>
                        <div class="img-section">
                            <img class="test-img img-one" id="test-img-1" src="http://localhost/test-website/wp-content/uploads/2025/02/storie-default-img.webp" alt="storie" data-color-code="#9fcabc" data-active="active" width="768px" height="576px"/>
                            <img class="test-img img-two" id="test-img-2" src="http://localhost/test-website/wp-content/uploads/2025/02/sparkling-grey.webp" alt="storie" data-color-code="#6f7484" data-active="active" width="768px" height="576px"/>
                        </div>
                        <div>
                            <input type="radio" class="choose-a-color" name="options" id="color-option-0" onchange="changeColor('0')" style="background-color:#9fcabc" value="#9fcabc" autocomplete="off" checked/>
                            <input type="radio" class="choose-a-color" name="options" id="color-option-2" onchange="changeColor('0')" style="background-color:#6f7484" value="#6f7484" autocomplete="off"/>
                        </div>
                    </article>
                <?php endwhile; else : ?>
                    <article>
                        <p>Sorry, no page was found!</p>
                    </article>
                <?php endif; ?>
            </section>
        </main>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <?php
            wp_footer();
        ?> 
    </body>
</html>