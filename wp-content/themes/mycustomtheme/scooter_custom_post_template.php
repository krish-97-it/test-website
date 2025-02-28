<?php
    /*
        // Template Name: Display Scooter Template
        // Template Post Type: scooter
    */

    global $post;
    $post_id                =   (isset($post->ID)) ? $post->ID : 0;
    $seo_content            =   get_custom_seo_content($post_id);
    $get_color_options      =   $seo_content['enable_color_options'];

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="robots" content="index,follow">
        <title>Test Website</title>
        <!-- Latest compiled and minified CSS -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
               
        <!-- font family load -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Pathway Extreme'>

        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>

        <!--    Include header section   -->
        <?php include ('header.php') ?>

        <main>
            <section class="content-area content-thin">
                <div class="container custom-container-style">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <article class="article-full">
                            <div class="section-wrapper">
                                <div class="display-scooter">
                                    <div class="header-section">
                                        <div class="scooter-name">
                                            <h6><?= the_title();?></h6>
                                        </div>
                                        <?php
                                            if(count($get_color_options) > 0){
                                                $model_heading = "";
                                                for($i=0; $i<count($get_color_options); $i++){
                                                    $k = $i;
                                                    $array_name         = 'color_option_'.strval($k+1);
                                                    $item               = $get_color_options[$array_name];

                                                    if($item['is_available'] == 1 && !empty($item['color_code']) && !empty($item['color_name'])){
                                                        $color_code         = ($item['color_code']);
                                                        $color_title        = ($item['color_name']);
                                                        $default_model_img  = $get_color_options['color_option_1']['model_image']['url'];
                                                        $default_img_alt    = $get_color_options['color_option_1']['model_image']['alt'];

                                                        if(!empty($item['model_image'])){
                                                            $image_alt          = (($item['model_image']['alt'] != '')? $item['model_image']['alt'] : $default_img_alt);
                                                            $model_image_url    = (($item['model_image']['url'] != '')? $item['model_image']['url'] : $default_model_img);    
                                                        }else{
                                                            $image_alt          = $default_img_alt;
                                                            $model_image_url    = $default_model_img;
                                                        }
                                                      
                                                        if($i==0){
                                                            $active         = "true"; 
                                                        }else{
                                                            $active         = "false"; 
                                                        }
                                                        $model_heading      .= ' <div class="selected-color" id="color-code-title-'.$i.'" data-color-code="'.$color_code.'" data-active='.$active.'>
                                                                                <div class="color-box" style="background-color:'.$color_code.'"></div>
                                                                                <p class="color-title mb-0">'.$color_title.'</p>
                                                                                </div>';
                                                    }
                                                }
                                                echo $model_heading;
                                            }else{
                                                $model_heading  = "";
                                                $model_heading  .= ' <div class="selected-color" id="color-code-title-0" data-color-code="#9fcabc" data-active="true">
                                                                        <div class="color-box" style="background-color:#9fcabc"></div>
                                                                        <p class="color-title mb-0">Sparkling Green</p>
                                                                    </div>';
                                                echo $model_heading;
                                            }
                                        ?>
                                    </div>
                                    <div class="hr-line"></div>
                                    <div class="body-section">
                                        <?php
                                            if(count($get_color_options)){
                                                $model_image= "";
                                                for($i=0; $i<count($get_color_options); $i++){
                                                    $k = $i;
                                                    $array_name         = 'color_option_'.strval($k+1);
                                                    $item               = $get_color_options[$array_name];

                                                    if($item['is_available'] == 1 && !empty($item['color_code']) && !empty($item['color_name'])){
                                                        
                                                        $color_code         = ($item['color_code']);
                                                        $color_title        = ($item['color_name']);
                                                        $default_model_img  = $get_color_options['color_option_1']['model_image']['url'];
                                                        $default_img_alt    = $get_color_options['color_option_1']['model_image']['alt'];

                                                        if(!empty($item['model_image'])){
                                                            $image_alt          = (($item['model_image']['alt'] != '')? $item['model_image']['alt'] : $default_img_alt);
                                                            $model_image_url    = (($item['model_image']['url'] != '')? $item['model_image']['url'] : $default_model_img);    
                                                        }else{
                                                            $image_alt          = $default_img_alt;
                                                            $model_image_url    = $default_model_img;
                                                        }

                                                        if($i==0){
                                                            $active         = "true"; 
                                                        }else{
                                                            $active         = "false"; 
                                                        }
                                                        $model_image        .=   '<img class="model-color-img" id="model-img-'.$i.'" src="'.$model_image_url.'" alt="storie" data-color-code="'.$color_code.'" data-img-active='.$active.' img-fade-out="false" width="768px" height="576px"/>';
                                                    }   
                                                }
                                                echo $model_image;
                                            }else{
                                                $model_image            = "";
                                                $model_image            .=   '<img class="model-color-img" id="model-img-0" src="http://localhost/test-website/wp-content/uploads/2025/02/sparkling-green.webp" alt="storie" data-color-code="#9fcabc" data-img-active="true" width="768px" height="576px"/>';
                                                echo $model_image;
                                            }
                                        ?>
                                    </div>
                                    <div class="hr-line hidden-mob"></div>
                                    <div class="footer-section">
                                        <div class="booking-amount-section">
                                            <p class="mb-0">Booking Amount</p>
                                            <h4 class="">₹2,500/-</h4>
                                        </div>
                                        <div class="total-price-section">
                                            <div class="price-in-location">
                                                <p class="mb-0">*Ex-showroom price in</p>
                                                <div class="choose-location-section">
                                                    <p class="location-name mb-0">New Delhi</p>
                                                    <img class="location-icon" src="<?=get_template_directory_uri();?>/assets/vector.png" alt="locate"/>
                                                </div>
                                            </div>
                                            <p class="sub-info-txt">(incl. FAME II Subcidy)</p>
                                            <p class="total-price-txt mb-0">₹1,17,357/-</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="confirm-color-section">
                                    <div class="steps-section">
                                        <a href="javascript:void(0)" class="steps steps-one">
                                            <span class="badge-num">01</span> 
                                            <span>MODEL</span>
                                        </a>
                                        <a href="javascript:void(0)" class="steps steps-two" id="second-item">
                                            <span class="badge-num">02</span> 
                                            <span>SELECT COLOR</span>
                                        </a>
                                        <a href="javascript:void(0)" class="steps pending steps-three">
                                            <span class="badge-num">03</span>
                                            <span>YOUR DETAILS AND PREFFERED LOCATION</span>
                                        </a>
                                    </div>
                                    <div class="choose-a-color-txt">
                                        <h5>Choose a colour</h5>
                                    </div>
                                    <div class="choose-color-options-section">
                                        <div class="selected-model-color">
                                            <div class="model-name-with-color">
                                                <img class="tick-icon" src="<?=get_template_directory_uri();?>/assets/thin-tick.png" alt="selected"/>
                                                <div class="model-color-title">
                                                    <h6>Storie</h6>
                                                    <?php
                                                        if(count($get_color_options)>0){
                                                            $model_heading = "";
                                                            for($i=0; $i<count($get_color_options); $i++){
                                                                $k = $i;
                                                                $array_name         = 'color_option_'.strval($k+1);
                                                                $item               = $get_color_options[$array_name];
                                                                if($item['is_available'] == 1 && !empty($item['color_code']) && !empty($item['color_name'])){
                                                                    $color_code         = ($item['color_code']);
                                                                    $color_title        = ($item['color_name']);
                                                                    $default_model_img  = $get_color_options['color_option_1']['model_image']['url'];
                                                                    $default_img_alt    = $get_color_options['color_option_1']['model_image']['alt'];
            
                                                                    if(!empty($item['model_image'])){
                                                                        $image_alt          = (($item['model_image']['alt'] != '')? $item['model_image']['alt'] : $default_img_alt);
                                                                        $model_image_url    = (($item['model_image']['url'] != '')? $item['model_image']['url'] : $default_model_img);    
                                                                    }else{
                                                                        $image_alt          = $default_img_alt;
                                                                        $model_image_url    = $default_model_img;
                                                                    }

                                                                    if($i==0){
                                                                        $active         = "true"; 
                                                                    }else{
                                                                        $active         = "false"; 
                                                                    }
                                                                    $model_heading      .= '<p class="mb-0 selected-color"  id="color-code-small-title-'.$i.'" data-color-code="'.$color_code.'" data-active='.$active.'>'.$color_title.'</p>';
                                                                }
                                                            }
                                                            echo $model_heading;
                                                        }else{
                                                            $model_heading          = "";
                                                            $model_heading          .= '<p class="mb-0 selected-color"  id="color-code-small-title-0" data-color-code="#9fcabc" data-active="true">Sparkling Green</p>';
                                                            echo $model_heading;
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="scooter-img-small">
                                            <?php
                                                if(count($get_color_options)>0){
                                                    $model_image= "";
                                                    for($i=0; $i<count($get_color_options); $i++){
                                                        $k = $i;
                                                        $array_name         = 'color_option_'.strval($k+1);
                                                        $item               = $get_color_options[$array_name];
                                                        if($item['is_available'] == 1 && !empty($item['color_code']) && !empty($item['color_name'])){
                                                            $color_code         = ($item['color_code']);
                                                            $color_title        = ($item['color_name']);
                                                            $default_model_img  = $get_color_options['color_option_1']['model_image']['url'];
                                                            $default_img_alt    = $get_color_options['color_option_1']['model_image']['alt'];
    
                                                            if(!empty($item['model_image'])){
                                                                $image_alt          = (($item['model_image']['alt'] != '')? $item['model_image']['alt'] : $default_img_alt);
                                                                $model_image_url    = (($item['model_image']['url'] != '')? $item['model_image']['url'] : $default_model_img);    
                                                            }else{
                                                                $image_alt          = $default_img_alt;
                                                                $model_image_url    = $default_model_img;
                                                            }

                                                            if($i==0){
                                                                $active = "true"; 
                                                            }else{
                                                                $active = "false"; 
                                                            }
                                                            $model_image    .=   '<img class="model-color-small-img" id="model-small-img-'.$i.'" src="'.$model_image_url.'" alt="storie" data-color-code="'.$color_code.'" data-active='.$active.' width="768px" height="576px"/>';
                                                        }
                                                    }
                                                    echo $model_image;
                                                }else{
                                                    $model_image= "";
                                                    $model_image    .=   '<img class="model-color-small-img" id="model-small-img-0" src="http://localhost/test-website/wp-content/uploads/2025/02/sparkling-green.webp" alt="storie" data-color-code="#9fcabc" data-active="true" width="768px" height="576px"/>';
                                                    echo $model_image;
                                                }
                                                
                                            ?>
                                            </div>
                                        </div>
                                        <div class="choose-color-options">
                                            <?php
                                                if(count($get_color_options)>0){
                                                    $radio_buttons = "";
                                                    for($i=0; $i<count($get_color_options); $i++){
                                                        $k = $i;
                                                        $array_name         = 'color_option_'.strval($k+1);
                                                        $item               = $get_color_options[$array_name];
                                                        if($item['is_available'] == 1 && !empty($item['color_code']) && !empty($item['color_name'])){
                                                            $color_code         = ($item['color_code']);
                                                            $color_title        = ($item['color_name']);
                                                            $default_model_img  = $get_color_options['color_option_1']['model_image']['url'];
                                                            $default_img_alt    = $get_color_options['color_option_1']['model_image']['alt'];
    
                                                            if(!empty($item['model_image'])){
                                                                $image_alt          = (($item['model_image']['alt'] != '')? $item['model_image']['alt'] : $default_img_alt);
                                                                $model_image_url    = (($item['model_image']['url'] != '')? $item['model_image']['url'] : $default_model_img);    
                                                            }else{
                                                                $image_alt          = $default_img_alt;
                                                                $model_image_url    = $default_model_img;
                                                            }

                                                            if($i==0){
                                                                $checked = "checked"; 
                                                            }else{
                                                                $checked = "false"; 
                                                            }
                                                            $radio_buttons .= '<input type="radio" class="choose-a-color" name="options" id="color-option-'.$i.'" onchange="changeColor('.$i.')" style="background-color:'.$color_code.'" value="'.$color_code.'" autocomplete="off"' . ($i==0 ? "checked" : "") . ' /> ';
                                                        }
                                                    }
                                                    echo $radio_buttons;
                                                }else{
                                                    $radio_buttons = "";
                                                    $radio_buttons .= '<input type="radio" class="choose-a-color" name="options" id="color-option-0" onchange="changeColor(0)" style="background-color:#9fcabc" value="#9fcabc" autocomplete="off" checked /> ';
                                                    echo $radio_buttons;
                                                }
                                                
                                            ?>
                                        </div>
                                    </div>
                                    <div class="confirm-btn-sectiion">
                                        <button>
                                            <span>Confirm</span>
                                            <img class="arrow-icon" src="<?=get_template_directory_uri();?>/assets/arrow-icon.png" alt="selected"/>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; else : ?>
                        <article>
                            <p>Sorry, no page was found!</p>
                        </article>
                    <?php endif; ?>
                </div>
            </section>
        </main>
        
        <!-- include footer section -->
        <?php include ('footer.php') ?>

        <!-- include JQuery & bootsrap minfied js -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
        <?php wp_footer(); ?>
    </body>
</html>