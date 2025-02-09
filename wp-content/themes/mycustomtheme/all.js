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

function changeColor(index){
    var ele_id                  =   "color-option-"+index;
    var selected_color_code     =   document.getElementById(ele_id).value;
    var color_headings          =   document.getElementsByClassName('selected-color');
    var model_images            =   document.getElementsByClassName('model-color-img');

    for(var i=0; i<color_headings.length; i++){
        var slide_attr = color_headings[i].getAttribute('data-color-code');
        if(selected_color_code == slide_attr){
            color_headings[i].setAttribute('data-active','true');
            color_headings[i].setAttribute('fade-in-out','true');
        }else{
            color_headings[i].setAttribute('data-active','false');
            color_headings[i].setAttribute('fade-in-out','false');
        }
    }

    for(var i=0; i<model_images.length; i++){
        var slide_attr = model_images[i].getAttribute('data-color-code');
        if(selected_color_code == slide_attr){
            model_images[i].setAttribute('data-active','true');
            model_images[i].setAttribute('fade-in-out','true');
        }else{
            model_images[i].setAttribute('data-active','false');
            model_images[i].setAttribute('fade-in-out','false');
        }
    }
}

function showNavItems(){
    console.log('enable menu');
    document.getElementById('navbar-toggle-bar').setAttribute('data-btn-show', 'false');
    document.getElementById('navbar-toggle-x').setAttribute('data-btn-show', 'true');
    document.getElementById('nav-menu-items').setAttribute('data-collapse','true');
    document.getElementById('navbar-container-style').setAttribute('navbar-collapse','true');
}

function hideNavItems(){
    console.log('disable menu');
    document.getElementById('navbar-toggle-x').setAttribute('data-btn-show', 'false');
    document.getElementById('navbar-toggle-bar').setAttribute('data-btn-show', 'true');
    document.getElementById('nav-menu-items').setAttribute('data-collapse','false');
    document.getElementById('navbar-container-style').setAttribute('navbar-collapse','false');
}