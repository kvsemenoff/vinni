$(document).ready(function(){
    var owl_dg = $("#dgslider");
    owl_dg.owlCarousel({
    loop:true,
    nav:true, 
    autoplay:false,
    smartSpeed:1000,
    margin:5,
    mouseDrag:false,
    touchDrag: false,
        center:false,     //если нужны обрезаные края
        navText:['<span class="df-left"></span>','<span class="df-right"></span>'],
        responsive:{
          0:{
            items:1
          },
          480:{
            items:1 
          },
          750:{
            items:2 
          },
          990:{
            items:3
          },      

          1248:{
            items:3
          }
        }
      });
})