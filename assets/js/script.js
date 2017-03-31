jQuery(document).ready(function ($) {    
 
      $('.multiple-items').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});      

        
 
});

jQuery(window).scroll(function(){
            if($(window).scrollTop() > $(".navbar").height()){
            
                console.log("affix");
                $(".navbar-nav li a").each(function() {
                    $(this).css({"line-height": "30px", 
                                "max-height": "30px", 
                                "padding-top": "0", 
                                "-webkit-transition": "all 500ms ease-in-out", 
                                "-moz-transition": "all 500ms ease-in-out", 
                                "-ms-transition": "all 500ms ease-in-out",
                                "-o-transition": "all 500ms ease-in-out",
                                "transition": "all 500ms ease-in-out"});
                });
                $("#navbar-brand-name").css({"padding-bottom": "0", "padding-top": "5px"});
            }else {
                console.log("affix-top");
                $(".navbar-nav li a").each(function() {
                    $(this).css({"line-height": "", 
                                "max-height": "", 
                                "padding-top": "", 
                                "-webkit-transition": "", 
                                "-moz-transition": "", 
                                "-ms-transition": "",
                                "-o-transition": "",
                                "transition": ""});
                });
                $("#navbar-brand-name").css({"padding-bottom": "", "padding-top": ""});
            }
        });

