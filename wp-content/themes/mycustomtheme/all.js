jQuery(document).ready(function(){
    console.log("hello");

    jQuery('.choose-a-color').click(function(){
        var selected_color_code     =   jQuery(this).val();
        var color_headings          =   jQuery('.selected-color');
        var model_images            =   jQuery('.model-color-img');

        jQuery(color_headings).each(function(){
            var slide_attr  =   jQuery(this).attr('data-color-code');
            if(selected_color_code == slide_attr){
                jQuery(this).attr('data-active','true');
            }else{
                jQuery(this).attr('data-active','false');
            }
        })

        jQuery(model_images).each(function(){
            var slide_attr  =   jQuery(this).attr('data-color-code');
            if(selected_color_code == slide_attr){
                jQuery(this).attr('data-active','true');
            }else{
                jQuery(this).attr('data-active','false');
            }
        })
    })
})