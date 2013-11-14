

$(document).ready(function() {


  $("#hdrNavProg1").mouseover(function()
  {
    $("#hdrNavProgText").html("Music Foundations");
    $("#hdrNavProg1 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/music_foundations_down.jpg"
      });
  });
  $("#hdrNavProg2").mouseover(function()
  {
    $("#hdrNavProgText").html("Maschine");
    $("#hdrNavProg2 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/maschine_down.png"
      });
  });
  $("#hdrNavProg3").mouseover(function()
  {
    $("#hdrNavProgText").html("DJ");
    $("#hdrNavProg3 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/dj_down.png"
      });
  });
  $("#hdrNavProg4").mouseover(function()
  {
    $("#hdrNavProgText").html("Music Production");
    $("#hdrNavProg4 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/music_production_down.png"
      });
  });
  $("#hdrNavProg5").mouseover(function()
  {
    $("#hdrNavProgText").html("Sound Design");
    $("#hdrNavProg5 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/sound_design_down.png"
      });
  });
  $("#hdrNavProg6").mouseover(function()
  {
    $("#hdrNavProgText").html("Mixing & Mastering");
    $("#hdrNavProg6 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/mixing_and_mastering_down.png"
      });
  });
  
  // <!--hover out-->
  $("#hdrNavProg1").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg1 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/music_foundations_up.png"
      });
  });
  $("#hdrNavProg2").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg2 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/maschine_up.png"
      });
  });
  $("#hdrNavProg3").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg3 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/dj_up.png"
      });
  });
  $("#hdrNavProg4").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg4 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/music_production_up.png"
      });
  });
  $("#hdrNavProg5").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg5 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/sound_design_up.png"
      });
  });
  $("#hdrNavProg6").mouseout(function()
  {
    $("#hdrNavProgText").html("");
    $("#hdrNavProg6 ").attr({
        src: "http://dubspot.com/wp-content/themes/dubspotheme/images/nav/mixing_and_mastering_up.png"
      });
  });
});

$(document).ready(function() {

  //nav bar script for over lay
  
  $.fn.highlight =  function() {
      if($(this).hasClass("children") === true){
        // This avoids allowing child-menus from using this script
      }else{
        $(this).css('background-image', 'url(http://dubspot.com/wp-content/themes/dubspotheme/images/nav/yellow_back_hover.png)');
        $(this).find('a').css('color','white');
      }
  };
  
  //check url for navbar kung-fo
  var currentURL = document.URL;
  
  if  (currentURL.search(".com/about/contact") != -1) {
  $("a[href$=/contact]").parent(".nav-inner .menu .menu li").highlight();
  }
  
  else if (currentURL.search(".com/about") != -1) {
  $("a[href$=/about]").parent(".nav-inner .menu .menu li").highlight();
  
  } else if  (currentURL.search(/.com\/(courses|dj|ableton-live|djproducer|sound-design|mixing-mastering|music-foundations|maschine|logic-pro|reason|kids|weekend-workshops)/) != -1) {
  $("a[href$=/courses]").parent(".nav-inner .menu .menu li").highlight();

  } else if  (currentURL.search(".com/dubspot-online") != -1) {
  $("a[href$=/dubspot-online]").parent(".nav-inner .menu .menu li").highlight();
            
  } else if  (currentURL.search(".com/instructors") != -1) {
  $("a[href$=/instructors]").parent(".nav-inner .menu .menu li").highlight();
  }

  else if (currentURL.substr(currentURL.length - 4) === "com/" || currentURL.substr(currentURL.length - 5) === "com/#") {
  $("a[href='http://www.dubspot.com']").parent(".nav-inner .menu .menu li").highlight();
  }


});



// Clicking the checkout button reveals the cart page in an iframe

$(document).ready(function() {

  var iframe = $("#checkout-iframe");


  $( "#checkout-button" ).click(function() {
    $("iframe").show(function(){
        $(this).animate({height:800},200);
      },function(){
        $(this).animate({height:800},200);
      });


    // Upon loading, we need to hide the cancel-purchase element
      console.log($('#checkout-iframe').contents().find('#cancel-purchase'));

  });



});

// $('#checkout-iframe').load(function()
// {
//   // $('#checkout-iframe').contents().find('#cancel-purchase').hide();
//   console.log($('#checkout-iframe').contents().find('#cancel-purchase'));

// });













