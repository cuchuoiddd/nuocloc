/*
 Ninja Popups for WordPress
 http://codecanyon.net/item/ninja-popups-for-wordpress/3476479?ref=arscode

 Copyright 2015, ARSCode
*/
var snp_timer,snp_timer_o,snp_is_internal_link,audiotypes={mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"},snpSpendTimeTimeout,snpIsPopupShowed=!1,NinjaPopup={snp_f:[],config:{ajaxUrl:"",welcome:{},exit:{}},audiotypes:{mp3:"audio/mpeg",mp4:"audio/mp4",ogg:"audio/ogg",wav:"audio/wav"},init:function(){},open:function(){},close:function(){},internalCloseEvents:function(){if("undefined"!==typeof jQuery.fn.tooltipster){var a=jQuery.tooltipster.instances();a&&jQuery.each(a,function(a,
c){if("undefined"!==c)try{c.close()}catch(d){}})}}};function snp_ga(a,b,c,d){snp_enable_analytics_events&&"function"===typeof ga&&ga("send","event",a,b,c,d)}function snp_set_cookie(a,b,c){-2!=c&&(c=-1!=c?{path:"/",expires:1*c}:{path:"/"},void 0!==snp_ignore_cookies&&0!=snp_ignore_cookies||Cookies.set(snp_cookie_prefix+""+a,b,c))}
function snp_close(){snpIsPopupShowed=!1;NinjaPopup.internalCloseEvents();if(void 0!==jQuery.fancybox2&&jQuery.fancybox2.isOpen)jQuery.fancybox2.close();else{var a=jQuery("#snp_popup").val();void 0!==snp_f[a+"-open"]&&(snp_f[a+"-close"](),snp_onclose_popup())}}
function snp_onsubmit(a){jQuery("#snp_popup").val();var b=parseInt(jQuery("#snp_popup_id").val());b||(b=a.parents(".snppopup").find(".snp_popup_id").val());var c=a.parents(".snppopup").find(".snp_popup_ab_id").val();void 0===c&&(c=!1);if(!1===jQuery.event.trigger({type:"ninja_popups_submit",popup_id:b}))return!1;var d=a.parents(".snppopup").find(".snp_optin_redirect_url").val(),f=a.parents(".snppopup").find(".snp_optin_form_submit").val();if("#"==a.attr("action")){var e=jQuery('input[type="submit"], button[type="submit"]',
a),h=e.outerWidth(),l=e.data("loading"),k=e.data("success"),n=e.data("nextstep"),m=e.data("step"),p=e.html()?e.html():e.val();l&&(e.hasClass("snp-nomw")||e.css("min-width",h),e.html(l),e.val(l));if("single"==f)if("undefined"!=typeof FormData){var g=new FormData(a.get(0));g.append("action","snp_popup_submit");g.append("popup_ID",b);g.append("_wpnonce",snp_ajax_nonce)}else g={action:"snp_popup_submit"},g.popup_ID=b,jQuery("button, input, select, textarea",a).each(function(a){this.name&&(g[this.name]=
this.value)});else"all"==f&&("undefined"!=typeof FormData?(g=new FormData,a.parents(".snppopup").find(".snp_subscribeform").each(function(a){jQuery("button, input, select, textarea",a).each(function(a){this.name&&g.append(this.name,this.value)})}),g.append("action","snp_popup_submit"),g.append("popup_ID",b),g.append("_wpnonce",snp_ajax_nonce)):(g={action:"snp_popup_submit"},g.popup_ID=b,a.parents(".snppopup").find(".snp_subscribeform").each(function(a){jQuery("button, input, select, textarea",a).each(function(a){this.name&&
(g[this.name]=this.value)})})));a.parents(".snppopup").find(".snp_ajax_before_optin").val()&&jQuery.ajax({url:a.parents(".snppopup").find(".snp_ajax_before_optin").val(),type:"POST",dataType:"json",data:g});a.parents(".snppopup").find(".snp_ajax_url").val()&&(snp_ajax_url=a.parents(".snppopup").find(".snp_ajax_url").val());jQuery.ajax({url:snp_ajax_url,type:"POST",dataType:"json",data:g,contentType:!1,processData:!1,success:function(g){jQuery("input, textarea, select",a).removeClass("snp-error");
NinjaPopup.internalCloseEvents();if(g.api_error_msg)alert(g.api_error_msg);else if(1==g.Ok)if(void 0!==g.drip&&_dcq.push(["identify",g.drip]),!0!==a.data("analyzed")&&snp_onconvert("optin",b,c,n||m?!1:!0),a.data("analyzed",!0),jQuery.event.trigger({type:"ninja_popups_submit_success",popup_id:b}),d&&(document.location.href=d),m)snp_bld_gotostep(b,m);else if(n){var f=e.parents(".snp-fb");f.find(".snp-step-show").fadeOut(function(){jQuery(this).removeClass("snp-step-show");f.find(".snp-step-"+n).fadeIn(function(){jQuery(this).addClass("snp-step-show")})})}else k?
(e.text(k),e.val(k),setTimeout("snp_close();",800)):snp_close();else g.Errors&&jQuery.each(g.Errors,function(b,c){"captcha"==b?"1"==c?alert("Wrong captcha response!"):alert(c):(jQuery("input[name='"+b+"'], textarea[name='"+b+"'], select[name='"+b+"']",a).addClass("snp-error"),"undefined"!==typeof $.fn.tooltipster&&jQuery("input[name='"+b+"'], textarea[name='"+b+"'], select[name='"+b+"']",a).tooltipster({theme:"tooltipster-light",side:"right"}).tooltipster("content",c).tooltipster("open"))}),l&&(e.html(p),
e.val(p)),jQuery.event.trigger({type:"ninja_popups_submit_error",popup_id:b})}});jQuery.event.trigger({type:"ninja_popups_submit_after",popup_id:b});a.parents(".snppopup").find(".snp_ajax_after_optin").val()&&jQuery.ajax({url:a.parents(".snppopup").find(".snp_ajax_after_optin").val(),type:"POST",dataType:"json",data:g});return!1}var q=0;jQuery('input[type="text"]',a).each(function(a){this.value?jQuery(this).removeClass("snp-error"):(q=1,jQuery(this).addClass("snp-error"))});if(1==q)return!1;"_blank"==
a.attr("target")&&snp_close();d&&(document.location.href=d);!0!==a.data("analyzed")&&snp_onconvert("optin",b,c);a.data("analyzed",!0);return!0}
function snp_onconvert(a,b,c,d){var f=jQuery("#snp_popup").val();b||(b=parseInt(jQuery("#snp_popup_id").val()));if(f){var e="";snp_separate_cookies&&(e=b);var h=jQuery("#"+f+" .snp_cookie_conversion").val();h||(h=30);snp_set_cookie("snp_"+f+e,"1",h)}jQuery.event.trigger({type:"ninja_popups_convert",popup_id:b});jQuery.post(snp_ajax_url,{action:"snp_popup_stats",type:a,popup_ID:b,ab_ID:c});"optin"!=a&&(a=jQuery("#"+f).find(".snp_optin_redirect_url").val())&&(document.location.href=a);snp_ga("popup",
"subscribe",b);1==d&&snp_close()}function snp_onshare_li(){snp_onconvert("li",0,!1,!0)}function snp_onshare_gp(){snp_onconvert("gp",0,!1,!0)}
function snp_onclose_popup(){snpIsPopupShowed=!1;var a=jQuery("#snp_popup").val(),b=parseInt(jQuery("#snp_popup_id").val()),c="";snp_separate_cookies&&(c=b);b=jQuery("#snp_popup").val()?jQuery("#"+jQuery("#snp_popup").val()+" .snp_cookie_close").val():-1;Cookies.get(snp_cookie_prefix+"snp_"+a+c)||(b||(b=-1),snp_set_cookie("snp_"+a+c,"1",b));jQuery("#snp_exithref").val()&&(document.location.href=jQuery("#snp_exithref").val());jQuery.event.trigger({type:"ninja_popups_close",popup_id:jQuery("#snp_popup_id").val()});
1==snp_is_mobile&&jQuery("body").removeClass("ninja-popup-open");jQuery(".fancybox-overlay").removeClass("snp-pop-"+jQuery("#snp_popup_id").val()+"-overlay");jQuery(".snp-wrap").removeClass("snp-pop-"+jQuery("#snp_popup_id").val()+"-wrap");jQuery("#snp_popup_theme").val("");jQuery("#snp_popup").val("");jQuery("#snp_popup_id").val("");jQuery("#snp_exithref").val("");jQuery("#snp_exittarget").val("")}
function snp_onstart_popup(){1==snp_is_mobile&&jQuery("body").addClass("ninja-popup-open");jQuery(".fancybox-overlay").addClass("snp-pop-"+jQuery("#snp_popup_id").val()+"-overlay");jQuery(".snp-wrap").addClass("snp-pop-"+jQuery("#snp_popup_id").val()+"-wrap");jQuery(".snp-wrap").addClass("snp-pop-"+jQuery("#snp_popup_theme").val()+"-wrap");var a=jQuery(".snp-pop-"+jQuery("#snp_popup_id").val()).find(".snp_popup_ab_id").val();void 0===a&&(a=!1);jQuery.post(snp_ajax_url,{action:"snp_popup_stats",type:"view",
popup_ID:jQuery("#snp_popup_id").val(),ab_ID:a})}
function snp_open_popup(a,b,c,d,f){if(void 0===jQuery.fancybox2||!jQuery.fancybox2.isOpen)if(0!=snp_enable_mobile||"content"==d||1!=snp_is_mobile){if((void 0===snp_ignore_cookies||1!=snp_ignore_cookies)&&"content"!=d){var e="";snp_separate_cookies&&(e=jQuery("#"+c+" >  .snp_popup_id").val());if(1==Cookies.get(snp_cookie_prefix+"snp_"+c+e))return!0}var h=parseInt(jQuery("#"+c+" .snp_autoclose").val());e=jQuery("#"+c+" .snp_show_cb_button").val();h&&(snp_timer=setTimeout("snp_close()",1E3*h),jQuery("#"+
c+" input").focus(function(){clearTimeout(snp_timer)}));h=jQuery("#"+c+" .snp_overlay").val();jQuery("#snp_popup").val(c);jQuery("#snp_popup_id").val(jQuery("#"+c+" >  .snp_popup_id").val());jQuery("#snp_popup_theme").val(jQuery("#"+c+" >  .snp_popup_theme").val());jQuery("#snp_exithref").val(a);jQuery("#snp_exittarget").val(b);snp_ga("popup","open",jQuery("#snp_popup_id").val());"iframe"==d&&jQuery("#"+c).find(".ninja-popup-external-link-iframe").prop("src",f.src);void 0!==snp_f[c+"-open"]?(jQuery("#"+
c).appendTo("body"),snp_f[c+"-open"](),snp_onstart_popup()):(a={},"disabled"==h&&(a.background="none"),jQuery.fancybox2({href:"#"+c,helpers:{overlay:{locked:!1,closeClick:!1,showEarly:!1,speedOut:5,css:a}},padding:0,autoCenter:1==snp_is_mobile?!1:!0,autoDimensions:!0,titleShow:!1,closeBtn:"yes"==e?!0:!1,keys:{close:"yes"==e?[27]:""},showNavArrows:!1,wrapCSS:"snp-wrap",afterClose:function(){return snp_onclose_popup()},beforeShow:function(){return snp_onstart_popup()}}));0<jQuery("#"+c+" .snp-subscribe-social").length&&
("undefined"!=typeof FB&&FB.Event.subscribe("edge.create",function(){snp_onconvert("fb",0,!1,!0)}),"undefined"!=typeof twttr&&(twttr.events.bind("tweet",function(a){snp_onconvert("tw_t",0,!1,!0)}),twttr.events.bind("follow",function(a){snp_onconvert("tw_f",0,!1,!0)})),jQuery("#"+c+" a.pin-it-button").click(function(){snp_onconvert("pi",0,!1,!0)}));"content"!=d&&(snpIsPopupShowed=!0);jQuery.event.trigger({type:"ninja_popups_open",popup_id:jQuery("#snp_popup_id").val()});return!1}}
function snp_bld_gotostep(a,b){var c=jQuery(".snp-pop-"+a).find(".snp-builder"),d=c.find(".snp-bld-showme"),f=c.find(".snp-bld-step-"+b);void 0!==d.data("animation-close")?(d.removeClass("animated "+d.attr("data-animation")),d.addClass("animated "+d.attr("data-animation-close")).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){d.removeClass("animated "+d.attr("data-animation-close"));d.removeClass("snp-bld-showme")})):d.removeClass("snp-bld-showme");if(void 0!==
f.attr("data-animation"))f.addClass("animated "+f.attr("data-animation")).addClass("snp-bld-showme").one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){jQuery(this).removeClass("animated "+jQuery(this).attr("data-animation"))});else f.addClass("snp-bld-showme");snp_resp(b);"disabled"==f.attr("data-overlay")?c.next(".snp-overlay").removeClass("snp-overlay-show"):c.next(".snp-overlay").addClass("snp-overlay-show");0<jQuery("#snp-bld-step-bg-"+b).length&&jQuery("#snp-bld-step-bg-"+
b).mb_YTPlayer();snp_stop_video(d);snp_start_video(f);snp_init_map(f);snp_ga("popup","step"+b,jQuery("#snp_popup_id").val());jQuery.event.trigger({type:"ninja_popups_gotostep",popup_id:a,step:b})}function snp_start_video(a){a.find(".snp-bld-video").each(function(){var a=jQuery(this).attr("data-src")+jQuery(this).attr("data-autoplay");jQuery(this).attr("src",a)})}function snp_stop_video(a){a.find(".snp-bld-video").each(function(){var a=jQuery(this).attr("data-src");jQuery(this).attr("src",a)})}
function snp_init_map(a){a.find(".snp-bld-googleMap").each(function(){jQuery(this).height(jQuery(this).parent().height());jQuery(this).width(jQuery(this).parent().width());switch(jQuery(this).attr("data-mapType")){case "ROADMAP":var a=google.maps.MapTypeId.ROADMAP;break;case "SATELLITE":a=google.maps.MapTypeId.SATELLITE;break;case "HYBRID":a=google.maps.MapTypeId.HYBRID;break;case "TERRAIN":a=google.maps.MapTypeId.TERRAIN}a={center:new google.maps.LatLng(parseFloat(jQuery(this).attr("data-coordx")),
parseFloat(jQuery(this).attr("data-coordy"))),zoom:parseInt(jQuery(this).attr("data-zoom")),mapTypeId:a};var c=jQuery(this);a=new google.maps.Map(c[0],a);a={position:new google.maps.LatLng(parseFloat(jQuery(this).attr("data-coordx")),parseFloat(jQuery(this).attr("data-coordy"))),map:a,icon:jQuery(this).attr("data-icon")};new google.maps.Marker(a)})}
function snp_spend_time(){snpSpendTimeTimeout=setTimeout(function(){jQuery.ajax({url:snp_ajax_url,type:"POST",dataType:"json",data:{action:"snp_popup_spend_time"},success:function(a){a.time>=jQuery("#snppopup-welcome .snp_open_spend_time").val()&&(snp_open_popup("","","snppopup-welcome","welcome"),clearTimeout(snpSpendTimeTimeout))}});snp_spend_time()},snp_ajax_ping_time)}
jQuery(document).ready(function(a){jQuery(window).resize(function(){snp_resp(!1)});jQuery(".snp_nothanks, .snp_closelink, .snp-close-link").click(function(){snp_close();return!1});jQuery(".snp_subscribeform").on("submit",function(a){return snp_onsubmit(jQuery(this))});jQuery(".snp-calendar-input").length&&jQuery(".snp-calendar-input").datepicker();var b=jQuery("#snppopup-welcome .snp_close").val();if(0<jQuery("#snppopup-welcome").length){var c=jQuery("#snppopup-welcome .snp_open").val(),d=jQuery("#snppopup-welcome .snp_open_after").val(),
f=jQuery("#snppopup-welcome .snp_open_inactivity").val(),e=jQuery("#snppopup-welcome .snp_open_scroll").val(),h=jQuery("#snppopup-welcome .snp_close_scroll").val(),l=!1;if("inactivity"===c){var k=0,n=setInterval(function(){k++;k>f&&(window.clearTimeout(n),snp_open_popup("","","snppopup-welcome","welcome"))},1E3);jQuery(this).mousemove(function(a){k=0});jQuery(this).keypress(function(a){k=0})}else"scroll"===c?jQuery(window).scroll(function(){var a=jQuery(document).height()-jQuery(window).height(),
b=jQuery(window).scrollTop();parseInt(b/a*100)>=e&&0==l&&(snp_open_popup("","","snppopup-welcome","welcome"),l=!0)}):"spend_time"===c?snp_spend_time():d?snp_timer_o=setTimeout("snp_open_popup('','','snppopup-welcome','welcome');",1E3*d):snp_open_popup("","","snppopup-welcome","welcome")}if(0<jQuery("#snppopup-exit").length)if(c=jQuery("#snppopup-exit .snp_show_on_exit").val(),2==c)jQuery("a").click(function(){if(jQuery(this).hasClass("noexitpopup"))snp_is_internal_link=!0;else{if(jQuery(this).hasClass("snppopup"))return snp_open_popup(jQuery(this).attr("href"),
jQuery(this).attr("target"),"snppopup-exit","exit");var a=jQuery(this).attr("href");void 0===a?snp_is_internal_link=!0:"#"!=a.slice(0,1)&&(snp_is_internal_link=0<a.length&&!snp_hostname.test(a)&&snp_http.test(a)?-1==jQuery.inArray(a,snp_excluded_urls)?!1:!0:!0)}}),jQuery(window).bind("beforeunload",function(a){if(!(1==Cookies.get(snp_cookie_prefix+"snp_snppopup-exit")&&0==snp_ignore_cookies||void 0!==jQuery.fancybox2&&jQuery.fancybox2.isOpen||1==snp_is_internal_link)){setTimeout("snp_open_popup(jQuery(this).attr('href'),jQuery(this).attr('target'),'snppopup-exit','exit');",
1E3);if(a=a||window.event)a.returnValue=jQuery("#snppopup-exit .snp_exit_js_alert_text").val().replace(/\\n/g,"\n");return jQuery("#snppopup-exit .snp_exit_js_alert_text").val().replace(/\\n/g,"\n")}});else if(3==c){var m=!1;jQuery(document).bind("mouseleave",function(a){jQuery(window).width();0==m&&0>=a.clientY&&(snp_open_popup(jQuery(this).attr("href"),jQuery(this).attr("target"),"snppopup-exit","exit"),m=!0)})}else if(4==c){c=jQuery("#snppopup-exit .snp_exit_scroll_down").val();var p=jQuery("#snppopup-exit .snp_exit_scroll_up").val();
new DialogTrigger(function(){new DialogTrigger(snp_open_exit_popup,{trigger:"scrollUp",percentUp:p})},{trigger:"scrollDown",percentDown:c})}else snp_use_in_all&&jQuery("a:not(.snppopup)").click(function(){if(jQuery(this).hasClass("snppopup"))return snp_open_popup(jQuery(this).attr("href"),jQuery(this).attr("target"),"snppopup-exit","exit");var a=jQuery(this).attr("href");if(!snp_hostname.test(a)&&"#"!=a.slice(0,1)&&snp_http.test(a)&&-1==jQuery.inArray(a,snp_excluded_urls))return snp_open_popup(jQuery(this).attr("href"),
jQuery(this).attr("target"),"snppopup-exit","exit")}),jQuery("a.snppopup").click(function(){return snp_open_popup(jQuery(this).attr("href"),jQuery(this).attr("target"),"snppopup-exit","exit")});jQuery(window).scroll(function(){var a=jQuery(document).height()-jQuery(window).height(),c=jQuery(window).scrollTop();a=parseInt(c/a*100);"scroll"==b&&h&&a>=h&&snp_close()});jQuery(".snp-submit").click(function(){a(this).blur()});jQuery(".snp_nextstep").click(function(){var b=a(this).data("nextstep"),c=a(this).parents(".snp-fb");
c.find(".snp-step-show").fadeOut(function(){jQuery(this).removeClass("snp-step-show");c.find(".snp-step-"+b).fadeIn(function(){jQuery(this).addClass("snp-step-show")})});snp_ga("popup","step"+b,jQuery("#snp_popup_id").val());jQuery.event.trigger({type:"ninja_popups_gotostep",popup_id:jQuery("#snp_popup_id").val(),step:b});return!1});jQuery(".snp-overlay").click(function(){"yes"==a(this).attr("data-close")&&snp_close()});jQuery(".snp-bld-gotostep").click(function(){var b=a(this).data("step"),c=a(this).parents(".snppopup").find(".snp_popup_id").val();
snp_bld_gotostep(c,b);return!1});jQuery(document).on("click","a.snppopup-content, a[href^='#ninja-popup-']",function(a){a.preventDefault();(a=jQuery(this).attr("rel"))||(a=jQuery(this).attr("href").replace("#ninja-popup-",""));if(a)return snp_open_popup("","","snppopup-content-"+a,"content")});jQuery(document).on("click","a.snppopup-iframe-content, a[href^='#ninja-popup-iframe-']",function(a){a.preventDefault();(a=jQuery(this).attr("rel"))||(a=jQuery(this).attr("href").replace("#ninja-popup-iframe-",
""));var b=jQuery(this).data("ninja-popup-href");if(a)return snp_open_popup("","","snppopup-content-"+a,"iframe",{src:b})})});function snp_open_exit_popup(){snp_open_popup("","","snppopup-exit","exit")}
function snp_resp(a){var b=jQuery("#snp_popup").val();if(void 0!==b){b=jQuery("#"+b).find(".snp-builder");a=!1===a?b.find(".snp-bld-showme"):b.find("#snp-bld-step-"+a);var c=jQuery(window).height();b=jQuery(window).width()/a.data("width");c/=a.data("height");b=(b>c?c:b)-.01;1<b&&(b=1);a=a.parent(".snp-bld-step-cont");1>b?(a.css("transform","translateX(-50%) translateY(-50%) scale("+b+")"),a.css("-webkit-transform","translateX(-50%) translateY(-50%) scale("+b+")"),a.css("-moz-transform","translateX(-50%) translateY(-50%) scale("+
b+")"),a.css("-ms-transform","translateX(-50%) translateY(-50%) scale("+b+")")):(a.css("transform",""),a.css("-webkit-transform",""),a.css("-moz-transform",""),a.css("-ms-transform",""))}}
function snp_open_select_link(a,b){jQuery("#snp_popup").val();var c=parseInt(jQuery("#snp_popup_id").val()),d=jQuery(".snp-pop-"+jQuery("#snp_popup_id").val()).find(".snp_popup_ab_id").val();void 0===d&&(d=!1);var f=jQuery(a).data("redirect-rules"),e="";jQuery.map(jQuery(".snp-el-bld-select option:selected"),function(a){f[a.value]&&(e=f[a.value]);return a.value});"yes"==jQuery(a).data("set-cookie")&&snp_onconvert("redirect",!1,d,!0);e&&(b?window.open(e,"_blank"):window.location.href=e);jQuery.event.trigger({type:"ninja_popups_open_link",
popup_id:c});return!1}function snp_open_link(a,b){jQuery("#snp_popup").val();var c=parseInt(jQuery("#snp_popup_id").val()),d=jQuery(".snp-pop-"+jQuery("#snp_popup_id").val()).find(".snp_popup_ab_id").val();void 0===d&&(d=!1);"yes"==jQuery(a).data("set-cookie")&&snp_onconvert("optin",!1,d,!0);b?window.open(jQuery(a).data("url"),"_blank"):window.location.href=jQuery(a).data("url");jQuery.event.trigger({type:"ninja_popups_open_link",popup_id:c});return!1}
function _snp_bld_open(a){var b=jQuery(".snp-pop-"+a+" .snp-builder").not(".snp-pos-static").addClass("snp-bld-showme").find(".snp-bld-step-1");b.addClass("snp-bld-showme");snp_start_video(b);snp_init_map(b);"disabled"!=b.attr("data-overlay")&&jQuery(".snp-pop-"+a+" .snp-overlay").addClass("snp-overlay-show");0<jQuery("#snp-bld-step-bg-1").length&&jQuery("#snp-bld-step-bg-1").mb_YTPlayer();snp_resp(1)}
function _snp_bld_close(a){var b=jQuery(".snp-pop-"+a+" .snp-builder").not(".snp-pos-static"),c=b.find(".snp-bld-showme");snp_stop_video(c);void 0!==c.data("animation-close")?(c.removeClass("animated "+c.attr("data-animation")),c.addClass("animated "+c.attr("data-animation-close")).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){jQuery(this).removeClass("animated "+jQuery(this).attr("data-animation-close"));jQuery(this).removeClass("snp-bld-showme")})):
c.removeClass("snp-bld-showme");b.removeClass("snp-bld-showme");jQuery(".snp-pop-"+a+" .snp-overlay").removeClass("snp-overlay-show")}
function snp_sound(a){var b=document.createElement("audio");b.setAttribute("preload","auto");if(b.canPlayType){for(var c=0;c<arguments.length;c++){var d=document.createElement("source");d.setAttribute("src",arguments[c]);arguments[c].match(/\.(\w+)$/i)&&d.setAttribute("type",audiotypes[RegExp.$1]);b.appendChild(d)}b.load();b.playclip=function(){b.pause();b.currentTime=0;b.play()};return b}};