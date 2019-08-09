jQuery( document ).ready(function($) {
    $('#imageGallery').lightSlider({
        gallery:true,
        item:1,
        loop:true,
        thumbItem:9,
        slideMargin:0,
        enableDrag: false,
        currentPagerPosition:'left',
        onSliderLoad: function(el) {
            $('.lSSlideOuter .lightSlider>* img').attr('style','height:100% !important;')
        }  
    });  
    $('#homeSlider').lightSlider({
        adaptiveHeight:true,
        item:1,
        slideMargin:0,
        loop:true,
        auto:true,
    });
    $('[class*="wrap-menu"]').on('click',function(e){
        var subMenu = $(e.target).closest('.parent_menu').parent().find('ul[class*="menu"] .block_menu')
        if(subMenu.length){
            e.preventDefault();
            $(e.target).closest('.parent_menu').parent().find('ul[class*="menu"]').addClass('active')
        }
    })
});