var map = new GMaps({
                        el: '#mapa_div',
                        lat: 6.250,
                        lng: -75.568,
                        zoom: 12,
                        minZoom: 2,
                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                        mapTypeControl:false,
                        zoomControl: true,
                        zoomControlOpt: {
                            style: 'SMALL',
                            position: 'RIGHT_BOTTOM'
                        },
                        panControl: false,
                        fullscreenControl: false,
                        streetViewControl: false,
                        overviewMapControl: false
                    });


function cargar_mapa(url){
  infoWindow = new google.maps.InfoWindow({});
  map.loadFromKML({
      url: url,
      suppressInfoWindows: true,
      events: {
        click: function(point){
          infoWindow.setContent(point.featureData.infoWindowHtml);
          infoWindow.setPosition(point.latLng);
          infoWindow.open(map.map);
        }
      }
    });
}                   


