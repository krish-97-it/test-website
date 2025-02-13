// On click color options image, color name, color box will be changed
function changeColor(index){
    var ele_id                  =   "color-option-"+index;
    var selected_color_code     =   document.getElementById(ele_id).value;
    var color_headings          =   document.getElementsByClassName('selected-color');
    var model_images            =   document.getElementsByClassName('model-color-img');
    var model_small_images      =   document.getElementsByClassName('model-color-small-img');

    for(var i=0; i<color_headings.length; i++){     //  For all color headings, where color code match with the choosed color, it will be shown and other will be hide
        var slide_attr = color_headings[i].getAttribute('data-color-code');
        if(selected_color_code == slide_attr){
            color_headings[i].setAttribute('data-active','true');
            color_headings[i].setAttribute('fade-in-out','true');
        }else{
            color_headings[i].setAttribute('data-active','false');
            color_headings[i].setAttribute('fade-in-out','false');
        }
    }

    for(var i=0; i<model_small_images.length; i++){     //  For all color headings, where color code match with the choosed color, it will be shown and other will be hide
        var slide_attr = model_small_images[i].getAttribute('data-color-code');
        if(selected_color_code == slide_attr){
            model_small_images[i].setAttribute('data-active','true');
            model_small_images[i].setAttribute('fade-in-out','true');
        }else{
            model_small_images[i].setAttribute('data-active','false');
            model_small_images[i].setAttribute('fade-in-out','false');
        }
    }

    for(var i=0; i<model_images.length; i++){       //  For all model images, where color code match with the choosed color, it will be shown and other will be hide
        var slide_attr = model_images[i].getAttribute('data-color-code');
        var active_attr = model_images[i].getAttribute('data-img-active');

        if(active_attr == 'true'){
            model_images[i].setAttribute('data-img-active','true');
            model_images[i].setAttribute('img-fade-out','true');
            setTimeout(disableAttr, 500);
        }

        if(selected_color_code == slide_attr){
            model_images[i].setAttribute('data-img-active','true');
            setTimeout(disableAttr, 1500);
        }

    }

    function disableAttr(){
        for(var k=0; k<model_images.length; k++){
            var fadeAttr =  model_images[k].getAttribute('img-fade-out');

            if(fadeAttr == 'true'){
                model_images[k].setAttribute('data-img-active','false');
                model_images[k].setAttribute('img-fade-out','false');
            }
        }
    }
}

// On click toggle button toogle navbar and show nav elements
function showNavItems(){
    console.log('enable menu');
    document.getElementById('navbar-toggle-bar').setAttribute('data-btn-show', 'false');
    document.getElementById('navbar-toggle-x').setAttribute('data-btn-show', 'true');
    document.getElementById('nav-menu-items').setAttribute('data-collapse','true');
    document.getElementById('navbar-container-style').setAttribute('navbar-collapse','true');
}

// // On click toggle cross button toogle navbar and hide nav elements
function hideNavItems(){
    console.log('disable menu');
    document.getElementById('navbar-toggle-x').setAttribute('data-btn-show', 'false');
    document.getElementById('navbar-toggle-bar').setAttribute('data-btn-show', 'true');
    document.getElementById('nav-menu-items').setAttribute('data-collapse','false');
    document.getElementById('navbar-container-style').setAttribute('navbar-collapse','false');
}


// jQuery(document).ready(function(){
//     jQuery('.choose-a-color').click(function(){
//         var selected_color_code     =   jQuery(this).val();
//         var color_headings          =   jQuery('.selected-color');
//         var model_images            =   jQuery('.model-color-img');

//         jQuery(color_headings).each(function(){
//             var slide_attr  =   jQuery(this).attr('data-color-code');
//             if(selected_color_code == slide_attr){
//                 jQuery(this).attr('data-active','true');
//                 jQuery(this).attr('fade-in-out','true');
//             }else{
//                 jQuery(this).attr('data-active','false');
//                 jQuery(this).attr('fade-in-out','false');
//             }
//         })

//         jQuery(model_images).each(function(){
//             var slide_attr  =   jQuery(this).attr('data-color-code');
//             if(selected_color_code == slide_attr){
//                 jQuery(this).attr('data-active','true');
//                 jQuery(this).attr('fade-in-out','true');
//             }else{
//                 jQuery(this).attr('data-active','false');
//                 jQuery(this).attr('fade-in-out','false');
//             }
//         })
//     })
// })