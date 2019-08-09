jQuery(document).ready(function(){
    // Style form controls
    jQuery( type="select" ).addClass( 'form-control input-sm' );
    jQuery( 'input#submit' ).addClass( 'btn btn-default' );
    // Tables
    jQuery( 'table' ).addClass( 'table' );
        
        //menu
        jQuery('.icon1').click(function(){
        var _this = jQuery(this);
        var menu_parent = _this.parent().parent().parent();
        var menu = _this.parent().next();
        var icon = _this.find('.glyphicon');
        menu.collapse('toggle');
        if(icon.hasClass('glyphicon-triangle-right')){
            icon.removeClass('glyphicon-triangle-right');
            icon.addClass('glyphicon-triangle-bottom');
        }else{
            icon.removeClass('glyphicon-triangle-bottom');
            icon.addClass('glyphicon-triangle-right');
        }
       
       //an menu dang mo
       // jQuery('.menu1').not(_this).collapse("hide");
       // var sub_menu1 = menu_parent.find('.icon1').not(_this);
       // sub_menu1.each(function(){
       //     icon = jQuery(this).find('.glyphicon');
       //     if(icon.hasClass('glyphicon-triangle-bottom')){
       //         icon.removeClass('glyphicon-triangle-bottom');
       //         icon.addClass('glyphicon-triangle-right');
       //     }
       // });
        
        
        return false;
    });
    
    jQuery('.icon2').click(function(){
        var _this = jQuery(this);
        var menu_parent = _this.parent().parent().parent();
        var menu = _this.parent().next();
        var menu_block = _this.parent().parent();
        var icon = _this.find('.glyphicon');
        if(icon.hasClass('glyphicon-menu-right')){
            icon.removeClass('glyphicon-menu-right');
            icon.addClass('glyphicon-menu-down');
            menu_block.find('.block_menu').addClass('sub_menu_active');
            _this.next().css("font-weight","bold");
        }else{
            icon.removeClass('glyphicon-menu-down');
            icon.addClass('glyphicon-menu-right');
            menu_block.find('.block_menu').removeClass('sub_menu_active');
            _this.next().css("font-weight","normal");
        }
        
        //an menu dang mo
        //jQuery('.menu2').not(_this).collapse("hide");
        //var sub_menu2 = menu_parent.find('.icon2').not(_this);
        //sub_menu2.each(function(){
        //    icon = jQuery(this).find('.glyphicon');
        //    if(icon.hasClass('glyphicon-triangle-bottom')){
        //        icon.removeClass('glyphicon-triangle-bottom');
        //        icon.addClass('glyphicon-triangle-right');
        //    }
        //});
        
        // an hien menu duoc click
        menu.collapse("toggle");
        return false;
    });
    
    // Click the a thi active vao ca div
    //jQuery('.block_menu a[class=item_name]').click(function(){
    //    var block_menu = jQuery(this).parent();
    //    jQuery('.block_menu').css("background-color","#f4fafb");
    //    block_menu.css("background-color","#eee");
    //
    //});

    
    /*------------Bottom go to top---------s---*/
        jQuery(window).scroll(function () {

            if (jQuery(this).scrollTop() > 200) {
                jQuery('#topback').fadeIn();
            } else {
                jQuery('#topback').fadeOut();
            }
        });
        jQuery('#topback').click(function () {
            jQuery('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    
    
    /************  Silde product detail ************/
            jQuery('#image-gallery').lightSlider({
                gallery:true,
                item:1,
                loop:true,
                thumbItem:9,
                slideMargin:0,
                enableDrag: false,
                auto:true,
                pause: 5000,
                onSliderLoad: function(el) {
                    
                     el.lightGallery({
                        selector: '#image-gallery .lslide',
                        showThumbByDefault:true,
                        addClass:'showThumbByDefault',
                        loop             : true,
                    });
                }  
            });

    /************  Set width height text content ************/
    var box_feature_product = jQuery('.box-feature-product');

    box_feature_product.each(function(){
        var feature_image_content = jQuery(this).find('span.text-content');
        var feature_image = jQuery(this).find('img');
        var feature_image_width = feature_image.width();
        var feature_image_height = feature_image.height();
        feature_image_content.width(feature_image_width);
        feature_image_content.height(feature_image_height);
    });


    /*------------Show search textbox on mobile------------*/
    jQuery('.search_bt_mobile').click(function(){
        jQuery(".replace_fr_search").remove();
        jQuery(".btn-call-mobile").css("margin-right", "20px");
        jQuery("#search_form_mobile").show();
    });
    jQuery(function(){
        if(navigator.userAgent.match(/(iPhone|Android.*Mobile)/i))
        {
            jQuery('a[data-tel]').each(function(){
                jQuery(this).prop('href', 'tel:' + jQuery(this).data('tel'));
            });
        }
    });
    jQuery(".navbar").affix({offset: {top: jQuery("#header").outerHeight(true)} });

    ///////////////////////////////////////////////////////////////////////////////////////////
    ///////   hotline click
    ///////////////////////////////////////////////////////////////////////////////////////////
    jQuery('#hotline-land').click(function(e){
        if( e.target != this )
            return false;
        jQuery(location).attr('href',jQuery(this).attr('data-link'));
    });
    jQuery('#buttonclose').click(function(){
        jQuery('#hotline-land').slideUp();
        jQuery('#reopenButton').show("slow");
    });

    jQuery('#reopenButton').click(function(){
        jQuery(this).hide();
        jQuery('#hotline-land').slideDown("slow");
    });
});
