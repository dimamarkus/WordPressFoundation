<?php

/*
Template Name: Logic X Template
*/

?>


<!DOCTYPE html>
<!-- saved from url=(0036)http://www.dubspot.com/ableton-live/ -->
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script id="LR1" type="text/javascript" async="" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/client.js"></script><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/auth016.js"></script><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/widgets.js"></script><link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/widget118.css" media="all">
  
  <meta property="twitter:account_id" content="21449728">
  
  <meta content="index,follow" name="robots">
  <meta content="global" name="distribution">
  <meta content="us-en" http-equiv="content-language">
  <meta content="Copyright 2008 Dubspot, DS14, Inc. All logos and trademarks are property of their respective owners." name="copyright">
  <meta content="7 Days" name="Revisit-After">
  <title>Ableton Live Courses | Learn Ableton Live - Classes Online or NYC | Dubspot</title>
   
        <link type="text/css" media="screen" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/style.css">
    <link type="text/css" media="screen" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/fabric.css">
  <link rel="pingback" href="http://dubspot.com/xmlrpc.php">
  <!--[if IE 6]>
<link type="text/css" media="screen" rel="stylesheet" href="http://dubspot.com/wp-content/themes/dubspotheme/ie6.css" />
<![endif]-->
  <!--[if gt IE 6]>
<link type="text/css" media="screen" rel="stylesheet" href="http://dubspot.com/wp-content/themes/dubspotheme/ie.css" />
<![endif]-->
<!-- t -->
  <script type="text/javascript" async="" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/ga.js"></script><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.easing.1.3.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.metadata.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.validate.pack.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/additional-methods.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/dubspot.js"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/dubspotonline.js"></script>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/rounded-corners.js"></script>
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/prettyPhoto.css" type="text/css" media="screen">
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.prettyPhoto.js"></script>
    
    <link href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
  <script src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery-ui.min.js"></script>
      <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.mCustomScrollbar.js"></script>
        
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.mousewheel.min.js"></script>





  <script type="text/javascript">
    (function($) {

$.quote_rotator = {
  defaults: {
    rotation_speed: 5000,
    pause_on_hover: true,
    randomize_first_quote: false,
    buttons: false
  }
  }

  $.fn.extend({
    quote_rotator: function(config) {
      
      var config = $.extend({}, $.quote_rotator.defaults, config);
      
      return this.each(function() {
        var rotation;
        var quote_list = $j(this);
        var list_items = quote_list.find('li');
        var rotation_active = true;
        var rotation_speed = config.rotation_speed < 2000 ? 2000 : config.rotation_speed;
        
        var add_active_class = function() {
          var active_class_not_already_applied = quote_list.find('li.active').length === 0;
          if (config.randomize_first_quote) {
            var random_list_item = $j(list_items[Math.floor( Math.random() * (list_items.length) )]);
            random_list_item.addClass('active');
          } else if (active_class_not_already_applied) {
              quote_list.find('li:first').addClass('active');
          }
        }();
        
        var get_next_quote = function(quote) {
          return quote.next('li').length ? quote.next('li') : quote_list.find('li:first');
        }
        
        var get_previous_quote = function(quote) {
          return quote.prev('li').length ? quote.prev('li') : quote_list.find('li:last');
        }
        
        var rotate_quotes = function(direction) {
          var active_quote = quote_list.find('li.active');
          var next_quote = direction === 'forward' ? get_next_quote(active_quote) : get_previous_quote(active_quote)
          
          active_quote.animate({
            opacity: 0
          }, 1000, function() {
            active_quote.hide();
            list_items.css('opacity', 1);
            next_quote.fadeIn(1000);
          });
          
          active_quote.removeClass('active');
          next_quote.addClass('active');
        };
        
        var start_automatic_rotation = function() {
          rotation = setInterval(function() {
            if (rotation_active) { rotate_quotes('forward'); }
          }, rotation_speed);
        };

        var pause_rotation_on_hover = function() {
          quote_list.hover(function() {
            rotation_active = false;
          }, function() {
            rotation_active = true;
          });
        };
        
        var include_next_previous_buttons = function() {
          quote_list.append(
            '<div class="qr_buttons">\
              <button class="qr_previous">'+ config.buttons.previous +'</button>\
              <button class="qr_next">'+ config.buttons.next +'</button>\
            </div>'
          );
          quote_list.find('button').click(function() {
            clearInterval(rotation);
            rotate_quotes( $j(this).hasClass('qr_next') ? 'forward' : 'backward' );
            start_automatic_rotation();
          });
        };
        
        if (config.buttons) { include_next_previous_buttons(); }
        if (config.pause_on_hover) { pause_rotation_on_hover(); }
        
        list_items.not('.active').hide();
        
        start_automatic_rotation();
      })
    }
  })

})(jQuery);
    </script>

    <link rel="stylesheet" id="admin-bar-css" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/admin-bar.css" type="text/css" media="all">
<link rel="stylesheet" id="contact-form-7-css" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="lightboxStyle-css" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/colorbox.css" type="text/css" media="screen">
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/l10n.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/swfobject.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/comment-reply.js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://dubspot.com/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://dubspot.com/wp-includes/wlwmanifest.xml"> 
<link rel="index" title="Dubspot" href="http://www.dubspot.com/">
<link rel="prev" title="Weekend Workshops" href="http://www.dubspot.com/weekend-workshops/">
<link rel="next" title="About Dubspot" href="http://www.dubspot.com/about/">
<meta name="generator" content="WordPress 3.2.1">

<!-- All in One SEO Pack 1.6.13.3 by Michael Torbert of Semper Fi Web Design[622,703] -->
<meta name="description" content="Dubspot helps you discover your sound and develop it into a body of work. Learn business and promotional skills as you complete this program with a portfolio of original music.">
<meta name="keywords" content="ableton live,  ableton live 4, ableton live 7 tutorial, ableton live 8 suite, ableton live 8 tutorial, ableton live dj, ableton live classes, ableton live school, ableton live lite, ableton live suite 8, ableton live tutorial, dubstep ableton, how to use ableton live, learn ableton, learn ableton live, live ableton, dubspot, audio production classes, dj school, electronic music production course, make your own beats, music production classes, online music production school, sound production schools, study music production, learn music production">
<link rel="canonical" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/Ableton Live Courses   Learn Ableton Live - Classes Online or NYC   Dubspot.html">
<!-- /all in one seo pack -->
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
  html { margin-top: 28px !important; }
  * html body { margin-top: 28px !important; }
</style>
<!-- Vipers Video Quicktags v6.3.0 | http://www.viper007bond.com/wordpress-plugins/vipers-video-quicktags/ -->
<style type="text/css">
.vvqbox { display: block; max-width: 100%; visibility: visible !important; margin: 10px auto; } .vvqbox img { max-width: 100%; height: 100%; } .vvqbox object { max-width: 100%; } 
</style>
<script type="text/javascript">
// <![CDATA[
  var vvqflashvars = {};
  var vvqparams = { wmode: "opaque", allowfullscreen: "true", allowscriptaccess: "always" };
  var vvqattributes = {};
  var vvqexpressinstall = "http://dubspot.com/wp-content/plugins/vipers-video-quicktags/resources/expressinstall.swf";
// ]]>
</script>
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-1289249-1']);
          _gaq.push(['_setDomainName', 'www.dubspot.com']);
          _gaq.push(['_setAllowHash', false]);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
   

             
<!--<link href="http://fast.fonts.com/cssapi/9b4de1c1-79b4-47bb-9cee-1c55da97f249.css" rel="stylesheet" type="text/css" />
--> <script type="text/javascript" charset="utf-8" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/tracker.php"></script><style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}
.fb_invisible{display:none}
.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
.fb_reset > div{overflow:hidden}
.fb_link img{border:none}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
.fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px;border-radius:8px}
.fb_dialog_content{background:#fff;color:#333}
.fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px;top:8px\9;right:7px\9}
.fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
.fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
.fb_dialog_loader{background-color:#f2f2f2;border:1px solid #606060;font-size:24px;padding:20px}
.fb_dialog_top_left,
.fb_dialog_top_right,
.fb_dialog_bottom_left,
.fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
.fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}
.fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}
.fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}
.fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}
.fb_dialog_vert_left,
.fb_dialog_vert_right,
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
.fb_dialog_vert_left,
.fb_dialog_vert_right{width:10px;height:100%}
.fb_dialog_vert_left{margin-left:-10px}
.fb_dialog_vert_right{right:0;margin-right:-10px}
.fb_dialog_horiz_top,
.fb_dialog_horiz_bottom{width:100%;height:10px}
.fb_dialog_horiz_top{margin-top:-10px}
.fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
.fb_dialog_iframe{line-height:0}
.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3b5998;color:#fff;font-size:14px;font-weight:bold;margin:0}
.fb_dialog_content .dialog_title > span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif)
no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}
body.fb_hidden{-webkit-transform:none;height:100%;margin:0;overflow:visible;position:absolute;top:-10000px;left:0;width:100%}
.fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ya/r/3rhSv5V8j3o.gif)
white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
.fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}
#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}
#fb-root #fb_dialog_ipad_overlay.hidden{display:none}
.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
.fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
.fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%
}
.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px
}
.fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#4966A6),
color-stop(0.5, #355492), to(#2A4887));border:1px solid #29447e;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset,
rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
.fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
.fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
.fb_dialog_content .dialog_footer{background:#f2f2f2;border:1px solid #555;border-top-color:#ccc;height:40px}
#fb_dialog_loader_close{float:left}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
.fb_iframe_widget{display:inline-block;position:relative}
.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}
.fb_iframe_widget iframe{position:absolute}
.fb_iframe_widget_lift{z-index:1}
.fb_hide_iframes iframe{position:relative;left:-10000px}
.fb_iframe_widget_loader{position:relative;display:inline-block}
.fb_iframe_widget_fluid{display:inline}
.fb_iframe_widget_fluid span{width:100%}
.fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
.fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
.fb_connect_bar_container div,
.fb_connect_bar_container span,
.fb_connect_bar_container a,
.fb_connect_bar_container img,
.fb_connect_bar_container strong{background:none;border-spacing:0;border:0;direction:ltr;font-style:normal;font-variant:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal;vertical-align:baseline}
.fb_connect_bar_container{position:fixed;left:0 !important;right:0 !important;height:42px !important;padding:0 25px !important;margin:0 !important;vertical-align:middle !important;border-bottom:1px solid #333 !important;background:#3b5998 !important;z-index:99999999 !important;overflow:hidden !important}
.fb_connect_bar_container_ie6{position:absolute;top:expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")}
.fb_connect_bar{position:relative;margin:auto;height:100%;width:100%;padding:6px 0 0 0 !important;background:none;color:#fff !important;font-family:"lucida grande", tahoma, verdana, arial, sans-serif !important;font-size:13px !important;font-style:normal !important;font-variant:normal !important;font-weight:normal !important;letter-spacing:normal !important;line-height:1 !important;text-decoration:none !important;text-indent:0 !important;text-shadow:none !important;text-transform:none !important;white-space:normal !important;word-spacing:normal !important}
.fb_connect_bar a:hover{color:#fff}
.fb_connect_bar .fb_profile img{height:30px;width:30px;vertical-align:middle;margin:0 6px 5px 0}
.fb_connect_bar div a,
.fb_connect_bar span,
.fb_connect_bar span a{color:#bac6da;font-size:11px;text-decoration:none}
.fb_connect_bar .fb_buttons{float:right;margin-top:7px}
.fb_edge_widget_with_comment{position:relative;*z-index:1000}
.fb_edge_widget_with_comment span.fb_edge_comment_widget{position:absolute}
.fb_edge_widget_with_comment span.fb_send_button_form_widget{z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader{left:0;top:1px;margin-top:6px;margin-left:0;background-position:50% 50%;background-color:#fff;height:150px;width:394px;border:1px #666 solid;border-bottom:2px solid #283e6c;z-index:1}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader{background-color:#000;border-bottom:2px solid #ccc}
.fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender
.FB_Loader{margin-top:0}
.fbpluginrecommendationsbarleft,
.fbpluginrecommendationsbarright{position:fixed !important;bottom:0;z-index:999}
.fbpluginrecommendationsbarleft{left:10px}
.fbpluginrecommendationsbarright{right:10px}</style><style>[touch-action="none"]{ -ms-touch-action: none; touch-action: none; }[touch-action="pan-x"]{ -ms-touch-action: pan-x; touch-action: pan-x; }[touch-action="pan-y"]{ -ms-touch-action: pan-y; touch-action: pan-y; }[touch-action="scroll"],[touch-action="pan-x pan-y"],[touch-action="pan-y pan-x"]{ -ms-touch-action: pan-x pan-y; touch-action: pan-x pan-y; }</style><script id="yui__dyn_0" type="text/javascript" src="http://www.snapengage.com/snapabug/ServiceGetConfig?w=30f43b83-5596-4fa3-89dd-3fef8f5695b3&p=1"></script></head>
        <body data-twttr-rendered="true" style="margin: 0;"><iframe id="twttrHubFrameSecure" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrameSecure" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/hub(1).html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe><iframe id="twttrHubFrame" allowtransparency="true" frameborder="0" scrolling="no" tabindex="0" name="twttrHubFrame" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/hub.html" style="position: absolute; top: -9999em; width: 10px; height: 10px;"></iframe><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="padding-bottom: 50px; padding-right: 50px; display: none;"><div id="cboxWrapper" style=""><div style=""><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" class="" style="width: 0px; height: 0px; overflow: hidden;"></div><div id="cboxLoadingOverlay" class="" style=""></div><div id="cboxLoadingGraphic" class="" style=""></div><div id="cboxTitle" class="" style=""></div><div id="cboxCurrent" class="" style=""></div><div id="cboxNext" class="" style=""></div><div id="cboxPrevious" class="" style=""></div><div id="cboxSlideshow" class="" style=""></div><div id="cboxClose" class="" style=""></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
      
     <div id="navHoverBar">
     </div>
                   <!-- WPMG ROI Tracking Script BEGIN -->
<script type="text/javascript">
(function(){var d=document,u=((d.location.protocol==='https:')?'s':'')+'://www.conversionruler.com/bin/js.php?siteid=6096';
d.write(unescape('%3Cscript src=%22http'+u+'%22 type=%22text/javascript%22%3E%3C/script%3E'));}());
</script><script src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/js.php" type="text/javascript"></script><script type="text/javascript">
cr_track();
</script><noscript>&lt;div style="position: absolute; left: 0"&gt;&lt;img
src="https://www.conversionruler.com/bin/tracker.php?siteid=6096&amp;amp;nojs=1" alt="" width="1" height="1"
/&gt;&lt;/div&gt;</noscript>
<!-- WPMG ROI Tracking Script END -->
               
<div id="site-wrapper">
<div id="header">
      <div class="brand">
   <a style="" href="http://www.dubspot.com/">
    <div class="logo">
     
        </div>
        </a>
    <!--end logo-->
    
    <script type="text/javascript">
    $j(document).ready(function() {
      $j("a[rel^='prettyPhoto']").prettyPhoto({theme: 'dark_square', social_tools: '', default_height: 320});
      $j("#hdrNavProg1").mouseover(function()
      {
        $j("#hdrNavProgText").html("Music Foundations")
        $j("#hdrNavProg1 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/music_foundations_down.jpg"
          });
      });
      $j("#hdrNavProg2").mouseover(function()
      {
        $j("#hdrNavProgText").html("Maschine") 
        $j("#hdrNavProg2 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/maschine_down.png"
          });
      });
      $j("#hdrNavProg3").mouseover(function()
      {
        $j("#hdrNavProgText").html("DJ") 
        $j("#hdrNavProg3 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/dj_down.png"
          });
      });
      $j("#hdrNavProg4").mouseover(function()
      {
        $j("#hdrNavProgText").html("Music Production")
        $j("#hdrNavProg4 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/music_production_down.png"
          });
      });
      $j("#hdrNavProg5").mouseover(function()
      {
        $j("#hdrNavProgText").html("Sound Design")
        $j("#hdrNavProg5 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/sound_design_down.png"
          });
      });
      $j("#hdrNavProg6").mouseover(function()
      {
        $j("#hdrNavProgText").html("Mixing & Mastering")
        $j("#hdrNavProg6 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/mixing_and_mastering_down.png"
          });
      });
      
      <!--hover out-->
      $j("#hdrNavProg1").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg1 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/music_foundations_up.png"
          });
      });
      $j("#hdrNavProg2").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg2 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/maschine_up.png"
          });
      });
      $j("#hdrNavProg3").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg3 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/dj_up.png"
          });
      });
      $j("#hdrNavProg4").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg4 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/music_production_up.png"
          });
      });
      $j("#hdrNavProg5").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg5 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/sound_design_up.png"
          });
      });
      $j("#hdrNavProg6").mouseout(function()
      {
        $j("#hdrNavProgText").html("")
        $j("#hdrNavProg6 ").attr({ 
            src: "http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/themes/dubspotheme/images/nav/mixing_and_mastering_up.png"
          });
      });
      
      // navHoverBar
          //function(){
          
          //alert(offset.left + " ," + offset.top);
          /*var sendNavLiLocX = offset.left;
          var sendNavLiLocY = offset.top;
          var sendNavWidth = $j(this).css("width");
          var sendNavTag = this.tagName;
          //alert(sendNavLiLocY);   
          fadeMoveNavHvr(sendNavLiLocX, sendNavLiLocY, sendNavWidth);
          */
      
    
      
        /*$j(".nav-inner .menu .menu li").mouseout( function(){
        $j(this).css('background-image', 'none');   
      });
      */  
      
      
      /*function fadeMoveNavHvr(getNavLiLocX, getNavLiLocY, getNavLiWidth){ // chains bar size, size, position, and width; 
      var curNavLiLocX = getNavLiLocX;
      var curNavLiLocY = getNavLiLocY;
      var curNavLiWidth = getNavLiWidth; 
      //alert(curNavLiLocX);
      $j("#navHoverBar").css({ left : curNavLiLocX ,  top : curNavLiLocY,  width: curNavLiWidth}, 0);
      $j("#navHoverBar").show(200);
      }*/
      
    });
    
  $j(document).ready(function () {
  
      
      //nav bar script for over lay
      
      $j.fn.highlight =  function(){ 
          if($j(this).hasClass("children") == true){
            // This avoids allowing child-menus from using this script
          }else{
            $j(this).css('background-image', 'url(https://dubspot.com/wp-content/themes/dubspotheme/images/nav/yellow_back_hover.png)');
            $j(this).find('a').css('color','white');
          }
      };
      
      //check url for navbar kung-fo
      var currentURL = document.URL;
      
      if  (currentURL.search(".com/about/contact") != -1) {
      $j("a[href$=/contact]").parent(".nav-inner .menu .menu li").highlight();    
      } 
      
      else if (currentURL.search(".com/about") != -1) {
      $j("a[href$=/about]").parent(".nav-inner .menu .menu li").highlight();  
      
      } else if  (currentURL.search(/.com\/(courses|dj|ableton-live|djproducer|sound-design|mixing-mastering|music-foundations|maschine|logic-pro|reason|kids|weekend-workshops)/) != -1) {
      $j("a[href$=/courses]").parent(".nav-inner .menu .menu li").highlight();  

      } else if  (currentURL.search(".com/dubspot-online") != -1) {
      $j("a[href$=/dubspot-online]").parent(".nav-inner .menu .menu li").highlight(); 
                
      } else if  (currentURL.search(".com/instructors") != -1) {
      $j("a[href$=/instructors]").parent(".nav-inner .menu .menu li").highlight();  
      }
    
      else if (currentURL.substr(currentURL.length - 4) === "com/" || currentURL.substr(currentURL.length - 5) === "com/#") {
      $j("a[href='http://www.dubspot.com']").parent(".nav-inner .menu .menu li").highlight();
      }
              
});       
    
  </script>
     <div class="header-programs">
      <div style="float: left;">
            <ul>
            
                <li>
                <a href="http://www.dubspot.com/music-foundations/"><img id="hdrNavProg1" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/music_foundations_up.png" width="34" height="33"></a>
                </li>
                <li>
                <a href="http://www.dubspot.com/dj/"><img id="hdrNavProg3" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/dj_up.png" width="34" height="33"></a>
                </li>
                <li>
                 <a href="http://www.dubspot.com/music-production/"><img id="hdrNavProg4" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/music_production_up.png" width="34" height="33"></a>
                </li>
                <li>
                  <a href="http://www.dubspot.com/sound-design/"><img id="hdrNavProg5" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sound_design_up.png" width="34" height="33"></a>
                </li>
                <li>
                  <a href="http://www.dubspot.com/mixing-mastering/"><img id="hdrNavProg6" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/mixing_and_mastering_up.png" width="34" height="33"></a>
                </li>
            </ul>
        </div>
        <div id="hdrNavProgText" style="margin-top: -5px; float: left; clear: both; font-size: 12px; font-weight: 600; color: #000000;">
        
        </div>
    </div>
<div class="announcement"></div>

        <!-- begin: account -->
        <div class="account">
          <p>

 
<span id="time-homepage">12 November, 07:22 PM NYC</span>

            <a class="cart" href="http://www.dubspot.com/checkout/cart">Cart</a>  |


              <a class="myaccount" href="http://www.dubspot.com/online/dashboard"><b>Dima Markus</b></a> | <a href="http://www.dubspot.com/online/logout">Sign Out</a><!-- | <a href="#">Help Desk</a> -->
          </p>
 <script language="javascript" type="text/javascript">
 var __nycTimezoneOffset = -18000 * 1000;     // NYC timezone offset in msec
                                        function __updateCurrentTimestamp()
                                                {
                                                var timestampNYC = ((new Date()).getTime() - ((new Date()).getTimezoneOffset() * 60000 * -1) + __nycTimezoneOffset);
                                                var now = new Date(timestampNYC);
                                                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                                //var hours = (12 < now.getHours() ? now.getHours()-12 : now.getHours());
                                                var hours = now.getHours();
                                                //hours = hours < 10 ? '0' + hours : hours;
                                                //document.getElementById('time').innerHTML = now.getDate() + ' ' + months[now.getMonth()] + ', ' + hours + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes() + ' ' + (now.getHours() >= 12 ? 'PM' : 'AM') + ' NYC';
                                                var minutes = now.getMinutes();
                                                var seconds = now.getSeconds();
                                                var time = "" + ((hours >12) ? hours -12 :hours);
                                                time = ((time<10)? "0":"") + time;
                                                time += ((minutes < 10) ? ":0" : ":") + minutes;
                                                //time += ((seconds < 10) ? ":0" : ":") + seconds;
                                                time += (hours >= 12) ? " PM" : " AM";
                                                document.getElementById('time-homepage').innerHTML = now.getDate() + ' ' + months[now.getMonth()] + ', ' + time + ' NYC';
                                                }
                                        setInterval("__updateCurrentTimestamp();", 1000);                                       
                                        </script>
        </div>
        <!-- end: account -->

  </div>
      <!--end brand-->
      <div class="navigation">
    <div class="nav-inner">
                    <!-- old nav
      <ul id="nav-active-none">
        <li id="nav-about"><a title="About" href="/about">About</a></li>
        <li id="nav-courses"><a title="Courses" href="/courses">Courses</a></li>
        <li id="nav-onlineschool"><a title="Online School" href="/online-school">Online School</a></li>
        <li id="nav-instructors"><a title="Instructors" href="/instructors">Instructors</a></li>
        <li><a title="Blog" href="http://blog.dubspot.com">Blog</a></li>
        <li id="nav-contact"><a title="Contact" href="/about/contact">Contact</a></li>
      </ul> -->

          <!--new nav w dropdown -->
          <div class="menu">
        <div class="menu-header-nav-container"><ul id="menu-header-nav" class="menu"><li id="menu-item-7029" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-7029"><a href="http://www.dubspot.com/">Home</a></li>
<li id="menu-item-6247" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6247"><a href="http://www.dubspot.com/about">About</a>
<ul class="sub-menu">
  <li id="menu-item-6248" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6248"><a href="http://www.dubspot.com/instructors">Instructors</a></li>
  <li id="menu-item-6249" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6249"><a href="http://www.dubspot.com/about/facilities">Facilities</a></li>
  <li id="menu-item-6250" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6250"><a href="http://www.dubspot.com/about/partners">Partners</a></li>
  <li id="menu-item-6251" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6251"><a href="http://www.dubspot.com/about/open-house">Open House</a></li>
  <li id="menu-item-6252" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6252"><a href="http://www.dubspot.com/about/gift-certificates">Gift Certificates</a></li>
  <li id="menu-item-6253" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6253"><a href="http://www.dubspot.com/about/press">Press</a></li>
  <li id="menu-item-6254" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6254"><a href="http://www.dubspot.com/about/policies">Policies</a></li>
  <li id="menu-item-6255" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6255"><a href="http://www.dubspot.com/about/event-services">Event Services</a></li>
  <li id="menu-item-6256" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6256"><a href="http://www.dubspot.com/about/international-students">International Students</a></li>
  <li id="menu-item-6313" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6313"><a href="http://www.dubspot.com/about/nyc-housing-guide/">NYC Housing Guide</a></li>
  <li id="menu-item-6257" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6257"><a href="http://www.dubspot.com/about/opportunities/">Job Opportunities</a></li>
  <li id="menu-item-6258" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6258"><a href="http://www.dubspot.com/about/faq">FAQ</a></li>
  <li id="menu-item-6259" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6259"><a href="http://www.dubspot.com/contact">Contact</a></li>
</ul>
</li>
<li id="menu-item-6260" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-6260" style="background-image: url(http://www.dubspot.com/wp-content/themes/dubspotheme/images/nav/yellow_back_hover.png);"><a href="http://www.dubspot.com/courses" style="color: white;">Courses</a>
<ul class="sub-menu">
  <li id="menu-item-6268" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6268"><a href="http://www.dubspot.com/programs/emp-master-program/?from=171#courses" style="color: white;">EMP Master Program</a></li>
  <li id="menu-item-6263" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6263"><a href="http://www.dubspot.com/programs/djproducer-master-program/?from=531#courses" style="color: white;">DJ / Producer Master Program</a></li>
  <li id="menu-item-6262" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6262"><a href="http://www.dubspot.com/djproducer" style="color: white;">DJ / Producer</a></li>
  <li id="menu-item-6267" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6267"><a href="http://www.dubspot.com/music-foundations" style="color: white;">Music Foundations</a></li>
  <li id="menu-item-6261" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6261"><a href="http://www.dubspot.com/dj" style="color: white;">DJ</a></li>
  <li id="menu-item-6264" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6264"><a href="http://www.dubspot.com/ableton-live" style="color: white;">Music Production w/ Ableton Live</a></li>
  <li id="menu-item-6269" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6269"><a href="http://www.dubspot.com/logic-pro" style="color: white;">Music Production w/ Logic Pro</a></li>
  <li id="menu-item-6265" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6265"><a href="http://www.dubspot.com/sound-design" style="color: white;">Sound Design</a></li>
  <li id="menu-item-6266" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6266"><a href="http://www.dubspot.com/mixing-and-mastering" style="color: white;">Mixing and Mastering</a></li>
  <li id="menu-item-8755" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8755"><a href="http://www.dubspot.com/visual-performance/" style="color: white;">Visual Performance</a></li>
  <li id="menu-item-6746" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6746"><a href="http://www.dubspot.com/maschine" style="color: white;">Maschine</a></li>
  <li id="menu-item-6270" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6270"><a href="http://www.dubspot.com/reason" style="color: white;">Reason</a></li>
  <li id="menu-item-8694" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8694"><a href="http://www.dubspot.com/programs/turntablism-extensive-program/?from=105" style="color: white;">Turntablism</a></li>
  <li id="menu-item-6271" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6271"><a href="http://www.dubspot.com/kids" style="color: white;">Kids Programs</a></li>
  <li id="menu-item-6272" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6272"><a href="http://www.dubspot.com/weekend-workshops" style="color: white;">Weekend Workshops</a></li>
</ul>
</li>
<li id="menu-item-6273" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6273"><a href="http://www.dubspot.com/dubspot-online">Online School</a></li>
<li id="menu-item-6286" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6286"><a href="http://www.dubspot.com/instructors">Instructors</a></li>
<li id="menu-item-6274" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6274"><a href="http://blog.dubspot.com/">Blog</a>
<ul class="sub-menu">
  <li id="menu-item-6275" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6275"><a href="http://blog.dubspot.com/category/tips-tricks/">DJ Tips &amp; Tricks</a></li>
  <li id="menu-item-6277" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6277"><a href="http://blog.dubspot.com/category/production-tips-tricks/">Production Tips &amp; Tricks</a></li>
  <li id="menu-item-6345" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6345"><a href="http://blog.dubspot.com/category/mixing-mastering/">Mixing and Mastering</a></li>
  <li id="menu-item-6342" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6342"><a href="http://blog.dubspot.com/category/sound-design-synthesis/">Sound Design</a></li>
  <li id="menu-item-6279" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6279"><a href="http://blog.dubspot.com/category/gear/">Music Technology</a></li>
  <li id="menu-item-6346" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6346"><a href="http://blog.dubspot.com/category/ipad-music-apps/">iOS</a></li>
  <li id="menu-item-6282" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6282"><a href="http://blog.dubspot.com/category/events/">Events</a></li>
  <li id="menu-item-6280" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6280"><a href="http://blog.dubspot.com/category/artist-features/">Artists &amp; Labels</a></li>
  <li id="menu-item-6283" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6283"><a href="http://blog.dubspot.com/category/giveaways-contests/">Giveaways &amp; Contests</a></li>
  <li id="menu-item-6343" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6343"><a href="http://blog.dubspot.com/category/video-tutorials/">Video Tutorials</a></li>
  <li id="menu-item-6344" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6344"><a href="http://blog.dubspot.com/category/workshops-demos/">Workshops</a></li>
</ul>
</li>
</ul></div>        
<!--              <ul>
              <li><a href="/about">About</a>
            <ul>
                  <li><a href="/instructors">Instructors</a></li>
                  <li><a href="/about/facilities">Facilities</a></li>
                  <li><a href="/about/partners">Partners</a></li>
                  <li><a href="/about/open-house">Open House</a></li>
          <li><a href="/about/gift-certificates">Gift Certificates</a></li>  
                  <li><a href="/about/press">Press</a></li>
                  <li><a href="/about/policies">Policies</a></li>
                  <li><a href="/about/event-services">Event Services</a></li>
                  <li><a href="/about/international-students">International Students</a></li>
                  <li><a href="/about/opportunities/">Job Opportunities</a></li>
                  <li><a href="/about/faq">FAQ</a></li>
                  <li><a href="/contact">Contact</a></li>
                </ul>
          </li>
              <li><a href="/courses">Courses</a>
              <ul>
                  <li><a href="/dj">DJ</a></li>
                  <li><a href="/djproducer">DJ/Producer</a></li>
                  <li><a href="/programs/dubspot-djproducer-master-certificate-program/#courses">DJ/Producer Master Certificate</a></li>
                  <li><a href="/ableton-live">Ableton Live</a></li>
                  <li><a href="/sound-design-synthesis">Sound Design &amp; Synthesis</a></li>
                  <li><a href="/mixing-mastering">Mixing &amp; Mastering</a></li>
                  <li><a href="/essential-music-foundations">Essential Music Foundations</a></li>
                  <li><a href="/programs/dubspot-emp-master-certificate-program/#courses">EMP Master Certificate Program</a></li>
                  <li><a href="/logic-pro">Logic Pro</a></li>
                  <li><a href="/reason-record">Reason &amp; Record</a></li>  
                  <li><a href="/kids">Kids Programs</a></li>  
                  <li><a href="/weekend-workshops">Weekend Workshops</a></li>
                </ul>
          </li>
              <li><a href="/online-school">Online School</a></li>
              <li><a href="http://blog.dubspot.com">Blog</a>
            <ul>
                  <li><a href="http://blog.dubspot.com/category/tips-tricks/">DJ Tips and Tricks</a></li>
                  <li><a href="http://blog.dubspot.com/category/video-tutorials/dj-video-tutorials/">DJ Video Tutorials</a></li>
                  <li><a href="http://blog.dubspot.com/category/production-tips-tricks/">Production Tips and Tricks</a></li>
                  <li><a href="http://blog.dubspot.com/category/video-tutorials/production-video-tutorials/">Production Video Tutorials</a></li>
                  <li><a href="http://blog.dubspot.com/category/product-reviews/">Product Reviews</a></li>
                  <li><a href="http://blog.dubspot.com/category/artist-features/">Artist Features</a></li>
                  <li><a href="http://blog.dubspot.com/category/music/new-music-music-2/">New Music</a></li>
                  <li><a href="http://blog.dubspot.com/category/events/">Events</a></li>
                  <li><a href="http://blog.dubspot.com/category/giveaways-contests/">Giveaways and Contests</a></li>
                  <li><a href="http://blog.dubspot.com/category/ableton-live/">Ableton Live</a></li>
                  <li><a href="http://blog.dubspot.com/category/native-instruments/">Native Instruments</a></li>
                </ul>
          </li>
              <li><a href="/instructors">Instructors</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>-->
                                  <div id="mini-menu-nav" style="height: 100%;"><ul style="height: 100%;"><li><a style="height: 100%;" href="http://www.dubspot.com/faq/">FAQ</a></li><li><a style="height: 100%;" href="http://www.dubspot.com/contact/">Contact</a></li></ul></div>
      </div>
          <!--end menu-->
       
        </div>
    <!--end navinner-->
  <script>
    $j(document).ready(function(){
      $j('#menu-item-5097 li').hover(function(){ 
        $j('.viddler-iframe').toggle();
      });
    });
  </script>

  </div>
      <!--end navigation-->
    </div>
<!--end header-->
<!--site-wrapper ends in footer.php--><script type="text/javascript">
$j(document).ready(function(){
  $j('ul#quotes').quote_rotator();
  $j(".moreless").each(function(i,e){

      $j(e).click(function(){
          var ml = $j(this);
          if (ml.hasClass('closed')){
              ml.prev().fadeIn();
              ml.removeClass('closed');
              ml.text("less");
          } else {
              ml.prev().fadeOut();
              ml.addClass('closed');
              ml.text("more");
          }
      });

  });

        var theURL = document.location.toString();
        if (theURL.match('#')) { // the URL contains an anchor
            // click the navigation item corresponding to the anchor
           var myAnchor = theURL.split('#')[1];
           //alert($j('#' + myAnchor).attr('href'));
           window.location.href = $j('a[slug="' + myAnchor + '"]').attr('href');
           // $j('a[name="' + myAnchor + '"]').click();
        }

});

</script>



<!-- begin: VIEW CONTENT -->
<div id="content" class="default_page contentOnlineCourses">

    <!-- begin: catalog introduction -->
  <div id="courseCatalogIntro" style="background-image:url(http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/uploads/catalog_header_bg_ableton-1.jpg)">
            <div id="courseCatalogIntro-inner">
            <div class="shortdesc" style="background-image:url(http://www.dubspot.com/wp-content/themes/dubspotheme/wp-content/uploads/category_header_overview_ableton_9_ctc.png)"></div>
    <!-- TODO: ADD Next Couse Starts
                <h4>Next Course Starts: April 15, 2011</h4>
                -->
                          
                          
    <!-- begin: video -->
    <div class="video">
      <div id="flashplayer">
                         <p><iframe src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/_t23YJW-624.html" frameborder="0" width="540" height="304"></iframe></p>
<!-- PHP 5.x -->      </div>
    <!--
                <ul>
        <li><a class="active" href="#">About Ableton</a></li>
        <li><a href="#">The Dubspot Experience</a></li>
        <li><a href="#">Online Courses</a></li>
        <li><a href="#">Video 4</a></li>
      </ul>
                        -->
    </div>
    <!-- end: video -->
            </div>
  </div>
  <!-- end: catalog introduction -->
        <div class="content-inner">



<!-- begin: courses catalog -->
<div id="coursesCatalog">

  

  <!-- begin: catalog promotion -->
  <div class="courseCatalogPromotion">
    <center>
                        <a href="http://www.dubspot.com/sale/">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/dubspot_sale_banner_sitewide_131107.jpg" alt="Dubspot Early Bird Sale!">
                        </a>
                    </center> </div>
        

<ul class="banner_courses" style="background-image:url(&#39;http://www.dubspot.com/images/announces/schedule_banner.jpg&#39;)">
    <li>
        <h4><a href="https://www.dubspot.com/programs/djproducer-master-program">Master Programs</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>10/30</span> <i>or</i>
                                                                <span>11/5</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>12/8</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/djproducer-master-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/ableton-live-producer-certificate-program/?from=171#courses">Ableton Live</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>10/30</span> <i>or</i>
                                                                <span>12/2</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>12/8</span> <i>or</i>
                                                                <span>2/2</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/ableton-live-producer-certificate-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/music-foundations-program/?from=1994#courses">Music Foundations</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>10/30</span> <i>or</i>
                                                                <span>12/4</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>12/8</span> <i>or</i>
                                                                <span>2/2</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/music-foundations-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/sound-design-komplete-program/?from=295#courses">Sound Design</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>10/29</span> <i>or</i>
                                                                <span>1/6</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>1/19</span> <i>or</i>
                                                                <span>4/20</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/sound-design-komplete-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/mixing-and-mastering-program/?from=2003#courses">Mixing &amp; Mastering</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>10/29</span> <i>or</i>
                                                                <span>11/25</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>1/19</span> <i>or</i>
                                                                <span>4/20</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/mixing-and-mastering-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/dj-extensive-program/?from=105#courses">DJ</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>11/5</span> <i>or</i>
                                                                <span>11/13</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>12/8</span> <i>or</i>
                                                                <span>2/2</span>
                                    </p>
          <a class="seemore" href="https://www.dubspot.com/register/dj-extensive-program">See More Dates</a>
    </li>
    <li>
        <h4><a href="http://www.dubspot.com/programs/maschine-program/?from=5301#courses">Maschine</a></h4>
                    <p>
            <em>NYC</em>

                                                            <span>12/16</span> <i>or</i>
                                                                <span>1/22</span>
                                    </p>
                <p>
            <em>Online</em>

                                                            <span>1/19</span> <i>or</i>
                                                                <span>4/20</span>
                                    </p>
          <a class="seemore" href="https://dubspot.com/register/maschine-program">See More Dates</a>
    </li>
</ul>


  <!-- end: catalog promotion -->

  <!-- begin: catalog sidebar -->
  <div id="courseCatalogSidebar">

    <!-- begin: sidebar course menu -->
    <div class="sidebarCourseMenu">
      <h2>COURSES AVAILABLE</h2>

      <ul>
        <li class="title">PROGRAMS <span class="months"></span></li><li><a slug="ableton-live-producer-certificate-program" class="" href="http://www.dubspot.com/programs/ableton-live-producer-certificate-program/?from=171#courses"><div>Ableton Live Producer Certificate Program</div></a></li><li><a slug="emp-master-program" class="" href="http://www.dubspot.com/programs/emp-master-program/?from=171#courses"><div>EMP Master Program</div></a></li><li><a slug="djproducer-programs" class="" href="http://www.dubspot.com/programs/djproducer-programs/?from=171#courses"><div>DJ / Producer Programs</div></a></li></ul><ul class="last">
        <li class="title">COURSES &amp; WEEKEND WORKSHOPS <span class="months"></span></li><li><a slug="ableton-live-level-1-beats-sketches-and-ideas" class="" href="http://www.dubspot.com/catalog/ableton-live-level-1-beats-sketches-and-ideas/?from=171#courses"><div>Ableton Live Level 1: Beats, Sketches, and Ideas</div></a></li><li><a slug="intro-to-ableton-live" class="" href="http://www.dubspot.com/catalog/intro-to-ableton-live/?from=171#courses"><div>Intro to Ableton Live</div></a></li><li><a slug="djperforming-with-ableton-live-apc40" class="" href="http://www.dubspot.com/catalog/djperforming-with-ableton-live-apc40/?from=171#courses"><div>DJ / Performing with Ableton Live &amp; APC40</div></a></li></ul>
    </div>
    <!-- end: sidebar course menu -->

  </div>
  <!-- end: catalog sidebar -->

  <!-- begin: catalog body -->
  <div id="courseCatalogBody">

    <!-- begin: section breadcrumbs share -->
    <div class="sectionBreadcrumbsShare">
                   <script src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/all.js"></script>
                    
                    <div id="overview_addthis" class="addthis">
                            
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
                                    <div id="facebook-share"><fb:share-button type="button" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fwww.dubspot.com%2Fableton-live%2F&amp;locale=en_US&amp;sdk=joey&amp;type=button"><span style="vertical-align: bottom; width: 59px; height: 18px;"><iframe name="f1ca1bad88" width="1000px" height="1000px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:share_button Facebook Social Plugin" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/share_button.html" style="border: none; visibility: visible; width: 59px; height: 18px;" class=""></iframe></span></fb:share-button></div>
        <!-- <a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="85"></a> -->
                                <a class="addthis_button_tweet at300b" tw:count="none"><iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/tweet_button.1384205748.html" class="twitter-share-button twitter-tweet-button twitter-count-none" title="Twitter Tweet Button" data-twttr-rendered="true" style="width: 56px; height: 20px;"></iframe></a>
        <div class="atclear"></div></div>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/addthis_widget.js"></script><div id="_atssh" style="visibility: hidden; height: 1px; width: 1px; position: absolute; z-index: 100000;"><iframe id="_atssh201" title="AddThis utility frame" style="height: 1px; width: 1px; position: absolute; z-index: 100000; border: 0px; left: 0px; top: 0px;" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sh142.html"></iframe></div><script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/core108.js"></script>
        <!-- AddThis Button END --> 
      </div>
              
      <p>&nbsp;&nbsp;</p>
    </div>
    <!-- end: section breadcrumbs share -->

    <!-- begin: section overview -->
    <div class="sectionOverview">
      <!-- begin: testimonial -->
      <div class="testimonial">
            
               <p><sup>“</sup>I summarize my experience at Dubspot as an adventure! I learned the equipment and the mentality. Ableton is now my playground, and I owe it all to Dubspot.<sub>”</sub></p>
<p>Peter Ardent, NYC</p>
<!-- PHP 5.x -->              
      </div>
      <!-- end: testimonial -->

      <!-- begin: overview text -->
      <h4>An innovative production tool.</h4>
<p>From the studio to the stage, Ableton Live is used to create, record, produce, and even perform music. Learn about linear and improvisational styles of producing electronic music as we help you master the software’s innovative interface.</p>
<h4>Your ideas brought to life.</h4>
<p>Our curriculum guides you through the artistic journey of discovering your sound and developing it into a unique body of work. Learn valuable techniques as you complete a portfolio of original tracks.</p>
<!-- PHP 5.x -->      <!-- end: overview text -->
    </div>
    <!-- end: section overview -->

    <!-- begin: section help me choose -->
    <!-- TODO: implement help me choose
                <div class="sectionHelpMeChoose">
      <div class="photo">
        <img src="wp-content/themes/dubspotheme/images/dashboard-content-bg-i24a8.png" width="182" height="116" alt=""/>
        <a href="#">Compare Ableton Live Programs &gt;</a>
      </div>
      <h3>Help Me Choose</h3>
      <p>Aenean sit amet metus a risus lobortis vestibulum. Suspendisse ligula ipsum, sagittis non, vulputate ac, elementum non, nibh. Ut facilisis ante quis dui. Suspendisse nisl arcu, molestie id.</p>
    </div>
                -->
    <!-- end: section help me choose -->
                <br style="clear:both;">
                <div id="under-overview">
                <!-- begin: section divider -->
    <div class="sectionDivider"><hr></div>
    <!-- end: section divider -->


          <!-- begin: section group heading -->
    <div class="sectionGroupHeading">
      <h3>Featured Course</h3>
    </div>
    <!-- end: section group heading -->

    <!-- begin: section course item short -->
    <div id="featuredCourse" class="sectionCourseItemShort">
          <h2><a href="http://www.dubspot.com/programs/ableton-live-producer-certificate-program/?from=171">Ableton Live Producer Certificate Program</a></h2>

      <div class="photo">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/mp_filled_black.jpg" width="220" height="140" alt="">
        <a class="learnmore" href="http://www.dubspot.com/programs/ableton-live-producer-certificate-program/?from=171#courses"><span>Learn More</span></a>
        <p><a href="https://www.dubspot.com/register/ableton-live-producer-certificate-program">See Dates &amp; Register</a></p>
      </div>

      <div class="text">
        <h3>All six levels / 48 sessions</h3>
                                <div class="sectionText">
                                <p></p><div>
<div>

The flagship of our music training, with every Ableton Live course offered at the school. After completing this program, you will leave with a portfolio of original music, a remix entered in an active contest, a scored commercial to widen your scope, and the Dubspot Producer’s Certificate in Ableton Live.

</div>
</div><p></p>
                                        </div>
      </div>
    </div>
    <!-- end: section course item short -->
                
                </div> <!-- end under overview -->


  </div>
  <!-- end: catalog body -->

  <br class="clear">
</div>
<!-- end: courses catalog -->





<!-- end: VIEW CONTENT -->




</div><!--end interior-->
</div><!--end content-->

<div id="footer">
  <div class="footer-inner">
    <div class="submenu">
      <div class="submenuitem">
        <h4>About</h4>
        <ul>
          <li><a href="http://www.dubspot.com/instructors">Instructors</a></li>
          <li><a href="http://www.dubspot.com/about/facilities">Facilities</a></li>
          <li><a href="http://www.dubspot.com/about/partners">Partners</a></li>
          <li><a href="http://www.dubspot.com/about/open-house">Open House</a></li>
          <li><a href="http://www.dubspot.com/about/gift-certificates">Gift Certificates</a></li>
          <li><a href="http://www.dubspot.com/about/press">Press</a></li>
          <li><a href="http://www.dubspot.com/about/policies">Policies</a></li>
          <li><a href="http://www.dubspot.com/about/event-services">Event Services</a></li>
          <li><a href="http://www.dubspot.com/about/international-students">International Students</a></li>
          <li><a href="http://www.dubspot.com/about/opportunities/">Job Opportunities</a></li>
          <li><a href="http://www.dubspot.com/about/faq">FAQ</a></li>
          <li><a href="http://www.dubspot.com/about/press">Press</a></li>
          <li><a href="http://www.dubspot.com/about/contact">Contact</a></li>

        </ul>
      </div>
      <div class="submenuitem">
        <h4>Courses</h4>
        <ul>
    <li><a href="http://www.dubspot.com/programs/djproducer-master-program/#courses">DJ/Producer Master</a></li>
  <li><a href="http://www.dubspot.com/djproducer">DJ / Producer</a></li>
  <li><a href="http://www.dubspot.com/music-foundations">Music Foundations</a></li>
  <li><a href="http://www.dubspot.com/dj">DJ</a></li>
    <li><a href="http://www.dubspot.com/music-production">Music Production</a></li>
  <li><a href="http://www.dubspot.com/ableton-live">Ableton Live</a></li>
  <li><a href="http://www.dubspot.com/logic-pro">Logic Pro</a></li>
  <li><a href="http://www.dubspot.com/sound-design">Sound Design</a></li>
  <li><a href="http://www.dubspot.com/mixing-mastering">Mixing &amp; Mastering</a></li>
  <li><a href="http://www.dubspot.com/visual-performance">Visual Performance</a></li>
  <li><a href="http://www.dubspot.com/maschine">Maschine</a></li>
  <li><a href="http://www.dubspot.com/reason">Reason</a></li>
  <li><a href="http://www.dubspot.com/kids">Kids Programs</a></li>
  <li><a href="http://www.dubspot.com/weekend-workshops">Weekend Workshops</a></li>                
        </ul>
      </div>
      <div class="submenuitem">
        <h4>More from Dubspot</h4>
        <ul>
          <li><a href="http://www.youtube.com/user/DubSpot">Videos</a></li>
          <li><a href="http://www.dubspot.com/about/gift-certificates">Gift Certificates</a></li>
          <li><a href="http://www.dubspot.com/about/event-services">Events &amp; Rental Services</a></li>
        </ul>
      </div>
      <div class="submenuitem social-links">
        <h4>Interact With Us</h4>
  <a href="http://www.youtube.com/user/DubSpot"><img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sm_badge-youtube.png" alt="Dubspot Youtube"></a>
  <a href="http://www.facebook.com/DubSpot"><img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sm_badge-facebook.png" alt="Dubspot Facebook"></a>
  <a href="http://www.twitter.com/dubspot"><img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sm_badge-twitter.png" alt="Dubspot Twitter"></a>
  <a href="http://soundcloud.com/dubspot"><img src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/sm_badge-soundcloud.png" alt="Dubspot Soundcloud"></a>
      </div>
      <div class="newsletter">
        <h4>Stay Updated</h4>
        <p>Subscribe to our newsletter for the latest music courses, events and current school updates.</p>
        <form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" style="margin-bottom:3;" onsubmit="return cr_submit(this, &#39;5&#39;)">
        <fieldset>
          <div class="subscribe">
            <input type="text" name="ea" size="20" value="your email" class="tfield">
            <input class="button" id="submit" type="image" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/footer_signup_button.png">
            <input type="hidden" name="llr" value="ta9we5bab">
            <input type="hidden" name="m" value="1101596944403">
            <input type="hidden" name="p" value="oi">
          </div>
        </fieldset>
        </form>

      </div>
    </div>
    <div class="copyright">
            <div id="logos">
            <a id="ds-logo" href="http://www.dubspot.com/">Dubspot</a>
      <a id="ableton-logo" href="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/Ableton Live Courses   Learn Ableton Live - Classes Online or NYC   Dubspot.html"></a>
            </div>
      
      <p>© 2013 DS14, Inc. - Dubspot - 348 West 14th Street, New York, NY 10014 - 212.242.2100 - 1.877.DUBSPOT (1.877.382.7768) - <a href="http://www.dubspot.com/about/contact">Contact Us</a><br><a href="http://www.dubspot.com/about/policies#tos">Terms of Use</a> | <a href="http://www.dubspot.com/about/policies#privacy">Privacy Policy</a> | <a href="http://www.dubspot.com/about/contact">Send Feedback</a></p>
    </div>
  </div>
</div><!--end footer-->
</div><!--end site-wrapper-->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/admin-bar.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/scripts.js"></script><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/xd_arbiter.html" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tab-index="-1" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/xd_arbiter(1).html" style="border: none;"></iframe></div></div><div style="position: absolute; top: -10000px; height: 0px; width: 0px;"><div></div></div></div>
<!-- Lightbox Plus v2.3 - 2011.08.11 - Message: 0-->
<script type="text/javascript">
jQuery(document).ready(function($){
  $("a[rel*=lightbox]").colorbox({opacity:0.8});
});
</script>
    

    
<!--SNAPENGAGE START-->
<script type="text/javascript">
document.write(unescape("%3Cscript src='" + ((document.location.protocol=="https:")?"https://snapabug.appspot.com":"http://www.snapengage.com") + "/snapengage-dubspot.js' type='text/javascript'%3E%3C/script%3E"));</script><script src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/snapengage-dubspot.js" type="text/javascript"></script><script type="text/javascript">
SnapABug.addButton("30f43b83-5596-4fa3-89dd-3fef8f5695b3","0","80%", true);
</script><style type="text/css">body .SnapABug_Button{cursor:pointer;cursor:hand;overflow:hidden;position:fixed;_position:absolute;display:block;top:80%;_top:expression(eval(document.body.scrollTop)+767);left:0px;z-index:2147000000;margin:0;padding:0;border-collapse:collapse;border-spacing:0;border:none;outline:none;font-size:0px;line-height:0px;}</style><style type="text/css">@media print{body .SnapABug_Button{display:none;}}</style><div class="SnapABug_Button" onclick="SnapABug.startLink();"><img id="SnapABug_bImg" style="position: relative; left: -4px;" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/statusImage" alt="" border="0" onmouseover="SnapABug.buttonOver();" onmouseout="SnapABug.buttonOut();"></div><div id="SnapABug_W" style="position:fixed;_position:absolute;display:none;top:0%;_top:expression(eval(document.body.scrollTop));left:0px;width:100%;height:100%;text-align:left;z-index:2147483644;margin:0;padding:0;border-collapse:collapse;border-spacing:0;border:none;list-style:none;text-align:left;font-size:100%;font-weight:normal;outline:none;background-image:url(&#39;http://chtatic.appspot.com/wbg/blank.gif&#39;);background-repeat:repeat;"><div id="SnapABug_O" style="position:absolute;width:100%;height:100%;top:0px;left:0px;background-color:white;text-align:left;z-index:auto;-moz-opacity:0.5;opacity:.50;filter:alpha(opacity=50);"></div></div><div id="SnapABug_WP" style="position:fixed;_position:absolute;display:none;z-index:2147483645;overflow:hidden;margin:0;padding:0;border-collapse:collapse;border-spacing:0;border:none;list-style:none;outline:none;"><div id="SnapABug_P" style="position:absolute;left:0px;top:0px;margin:0;padding:0;border:none;text-align:left;z-index:1;overflow:hidden;background-color:transparent;"></div><div id="SnapABug_IP" style="position:absolute;left:0px;top:0px;z-index:0;"></div><div id="SnapABug_DB" style="position:absolute;left:0px;top:0px;margin:0;border:0;padding:0;z-index:1;cursor:move;background-image:url(&#39;http://chtatic.appspot.com/wbg/blank.gif&#39;);background-repeat:repeat;"></div><div id="SnapABug_Snd" style="width:0px;height:0px;font-size:0px;margin:0;padding:0;background-color:transparent;"></div></div><div id="SnapABug_Applet" style="position:fixed;_position:absolute;display:none;top:0%;_top:expression(eval(document.body.scrollTop));left:0px;width:100%;height:2px;text-align:left;z-index:2147483646;"></div>
<!--SNAPENGAGE FINISH-->

<!-- WPMG Google Code for Remarketing tag BEGIN -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1015676456;
var google_conversion_label = "zeihCOiNiQUQqPyn5AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<div style="display:none">
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/conversion.js">
  </script><iframe name="google_conversion_frame" title="Google conversion frame" width="300" height="13" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/saved_resource.html" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no">&lt;img height="1" width="1" border="0" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1015676456/?frame=0&amp;random=1384302151694&amp;cv=7&amp;fst=1384302151694&amp;num=1&amp;fmt=1&amp;label=zeihCOiNiQUQqPyn5AM&amp;guid=ON&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1054&amp;u_aw=1920&amp;u_cd=24&amp;u_his=4&amp;u_tz=-300&amp;u_java=true&amp;u_nplug=16&amp;u_nmime=78&amp;ref=http%3A//www.dubspot.com/programs/emp-master-program/%3Ffrom%3D171&amp;url=http%3A//www.dubspot.com/ableton-live/&amp;frm=0" /&gt;</iframe>
</div>
<noscript>
&lt;div style="display:inline;"&gt;
  &lt;img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1015676456/?value=0&amp;amp;label=zeihCOiNiQUQqPyn5AM&amp;amp;guid=ON&amp;amp;script=0"/&gt;
&lt;/div&gt;
</noscript>
<!-- WPMG Google Code for Remarketing tag END -->

  <!--VISISTAT SNIPPET//-->
  <script type="text/javascript">
  //<![CDATA[
  var DID=77371;
  var pcheck=(window.location.protocol == "https:") ? "https://sniff.visistat.com/live.js":"http://stats.visistat.com/live.js";
  document.writeln('<scr'+'ipt src="'+pcheck+'" type="text\/javascript"><\/scr'+'ipt>');
  //]]>
  </script><script src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/live.js" type="text/javascript"></script>

  <!--VISISTAT SNIPPET//-->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/infographic-375.js"></script>


<div id="wpadminbar">
      <div class="quicklinks">
        <ul>
                          
    <li id="wp-admin-bar-my-account-with-avatar" class="menupop">
      <a href="http://dubspot.com/wp-admin/profile.php"><span><img alt="" src="<?php echo get_stylesheet_directory_uri() ?>/logic-x-files/3814b023e1a95a81ebca137d6e977dfa" class="avatar avatar-16 photo" height="16" width="16">Dima Markus</span></a>

            <ul>
                      
    <li id="wp-admin-bar-edit-profile" class="">
      <a href="http://dubspot.com/wp-admin/profile.php">Edit My Profile</a>

      
          </li>                     
    <li id="wp-admin-bar-logout" class="">
      <a href="http://dubspot.com/wp-login.php?action=logout&_wpnonce=8e3b142365">Log Out</a>

      
          </li>             </ul>
      
          </li>                         
    <li id="wp-admin-bar-dashboard" class="">
      <a href="http://dubspot.com/wp-admin/">Dashboard</a>

      
          </li>                         
    <li id="wp-admin-bar-edit" class="">
      <a href="http://dubspot.com/wp-admin/post.php?post=171&action=edit">Edit Page</a>

      
          </li>                         
    <li id="wp-admin-bar-new-content" class="menupop">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=post"><span>Add New</span></a>

            <ul>
                      
    <li id="wp-admin-bar-new-post" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=post">Post</a>

      
          </li>                     
    <li id="wp-admin-bar-new-page" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=page">Page</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_course" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_course">course</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_program" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_program">Program</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_instructor" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_instructor">Instructor</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_pressrelease" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_pressrelease">Press Release</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_partner" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_partner">Partner</a>

      
          </li>                     
    <li id="wp-admin-bar-new-ds_home_slide" class="">
      <a href="http://dubspot.com/wp-admin/post-new.php?post_type=ds_home_slide">Home Page Slide</a>

      
          </li>                     
    <li id="wp-admin-bar-new-media" class="">
      <a href="http://dubspot.com/wp-admin/media-new.php">Media</a>

      
          </li>                     
    <li id="wp-admin-bar-new-link" class="">
      <a href="http://dubspot.com/wp-admin/link-add.php">Link</a>

      
          </li>                     
    <li id="wp-admin-bar-new-user" class="">
      <a href="http://dubspot.com/wp-admin/user-new.php">User</a>

      
          </li>                     
    <li id="wp-admin-bar-new-theme" class="">
      <a href="http://dubspot.com/wp-admin/theme-install.php">Theme</a>

      
          </li>                     
    <li id="wp-admin-bar-new-plugin" class="">
      <a href="http://dubspot.com/wp-admin/plugin-install.php">Plugin</a>

      
          </li>             </ul>
      
          </li>                         
    <li id="wp-admin-bar-comments" class="">
      <a href="http://dubspot.com/wp-admin/edit-comments.php">Comments <span id="ab-awaiting-mod" class="pending-count">492</span></a>

      
          </li>                         
    <li id="wp-admin-bar-appearance" class="menupop">
      <a href="http://dubspot.com/wp-admin/themes.php"><span>Appearance</span></a>

            <ul>
                      
    <li id="wp-admin-bar-themes" class="">
      <a href="http://dubspot.com/wp-admin/themes.php">Themes</a>

      
          </li>                     
    <li id="wp-admin-bar-widgets" class="">
      <a href="http://dubspot.com/wp-admin/widgets.php">Widgets</a>

      
          </li>                     
    <li id="wp-admin-bar-menus" class="">
      <a href="http://dubspot.com/wp-admin/nav-menus.php">Menus</a>

      
          </li>             </ul>
      
          </li>                         
    <li id="wp-admin-bar-updates" class="">
      <a href="http://dubspot.com/wp-admin/update-core.php"><span title="9 Plugin Updates, 2 Theme Updates">Updates <span id="ab-updates" class="update-count">11</span></span></a>

      
          </li>                 </ul>
      </div>

      <div id="adminbarsearch-wrap">
        <form action="http://www.dubspot.com/" method="get" id="adminbarsearch">
          <input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150">
          <input type="submit" class="adminbar-button" value="Search">
        </form>
      </div>
    </div></body></html>