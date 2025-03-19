$(function(){

    var App = {

        initial : function(){

          App.scroll();
          App.menus();

        },

        scroll : function(){

          $('.link a').on('click', function(e){
            var href = $(this).attr( 'href' );
            $( 'html, body' ).animate({ scrollTop: $( href ).offset().top},1000);
            $(".box-menus").css({"right": "-100%"});
            $("#main-content").css({"marginRight" : "0px"});
            $(".box-menu-overlay").css({
              "width" : "0"
            });
            $(".modal-overlay-menu").css({"display" : "none"});
            e.preventDefault();
          });         
          
          $(".bg-img").parallaxScroll({friction:.5,direction:"vertical"});
        },

  
        menus : function(){


          $('.actBoxMenu').click(function(){
              $(".box-menus").css({"right" : "0px"});
              $("#main-content").css({"marginRight" : "100%"});
              $(".box-menu-overlay").css({
                "backgroundColor": "rgba(0,0,0,0.6)",
                "position" : "fixed",
                "width" : "100%",
                "height" : "100%",
                "top" : "0",
                "right" : "0",
                "z-index" : "99999"
              }); 
              $(".modal-overlay-menu").css({"display" : "block"});
          });
          $('.actCloseMenu').click(function(){
              $(".box-menus").css({"right": "-100%"});
              $("#main-content").css({"marginRight" : "0px"});
              $(".box-menu-overlay").css({
                "width" : "0"
              });
              $(".modal-overlay-menu").css({"display" : "none"});
          });

        }
  
       
    };

    App.initial();  

});