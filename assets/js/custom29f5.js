$(document).ready(function(){$(".nav-open").on("click",function(){$(".nav-bar").toggleClass("active")}),$(".book-slider").slick({dots:!1,arrows:!0,lazyLoad:"ondemand",infinite:!0,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}}]}),$(".geners,.industry").slick({dots:!1,arrows:!0,lazyLoad:"ondemand",infinite:!0,slidesToShow:1,slidesToScroll:1,fade:!0}),$(".review").slick({dots:!1,arrows:!0,lazyLoad:"ondemand",infinite:!0,slidesToShow:1,slidesToScroll:1,fade:!1}),$(".nav-item .nav-link").click(function(){$(".book-slider").slick("refresh")}),$(".geners ").on("lazyLoaded",function(o,s,e,i){e=$(".image"),parentSlide=$(".image").parent(".slick-slide"),i.src=e.attr("src"),parentSlide.css("background-image",'url("'+i+'")').addClass("loaded"),e.remove()})});