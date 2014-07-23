jQuery(document).ready(function(){
    jQuery(".slide").click(function(){
        jQuery("#contactPanel").slideToggle("fast");
        jQuery(".contact-arrow .fa").toggleClass("fa-chevron-down");
    });
});