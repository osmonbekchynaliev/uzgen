window.addEventListener("DOMContentLoaded", () => {

  $(document).ready(function () {
    // slider
    $(".slider").slick({
      dots: false,
      infinite: true,
      speed: 600,
      cssEase: "linear",
      autoplay: true,
      autoplaySpeed: 6000,
    });

    // mobile menu
    $(".burger-menu").click(function () {
      $(".header_menu").css({ "display": "block" })
      $(".header_menu nav .nav_item_btn").css({ "color": "white" })
      $(".nav_item").css({ "color": "white" })
      $(window).css({"overflow":"hidden"})
    })
    $(".btn_close").click(function () {
      $(".header_menu").css({ "display": "none" })
    })

    // swipebox for gallery
    $( '.swipebox' ).swipebox( {
      useCSS : true, 
      useSVG : true, 
      initialIndexOnArray : 0, 
      hideCloseButtonOnMobile : false, 
      removeBarsOnMobile : true, 
      hideBarsDelay : 3000, 
      videoMaxWidth : 1140, 
      beforeOpen: function() {}, 
      afterOpen: null,
      afterClose: function() {},
    } );

  })
})
