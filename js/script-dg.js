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
    var s = new YMaps.Style();
    s.iconStyle = new YMaps.IconStyle();
    s.iconStyle.href = "/img/pin.png";
    s.iconStyle.size = new YMaps.Point(46, 76);
    s.iconStyle.offset = new YMaps.Point(-9, -29);

    var map = new YMaps.Map(YMaps.jQuery("#YMapsID")[0]);
    map.setCenter(new YMaps.GeoPoint(30.289997, 60.090432), 13);
    var placemark = new YMaps.Placemark(new YMaps.GeoPoint(30.289997, 60.090432),{style: s});
    placemark.name = "Винни-Пух";
    placemark.description = "Детский сад Винни-Пух";
    map.addOverlay(placemark);
    map.addControl(new YMaps.ToolBar());
    map.addControl(new YMaps.Zoom());
    map.addControl(new YMaps.ScaleLine());
})