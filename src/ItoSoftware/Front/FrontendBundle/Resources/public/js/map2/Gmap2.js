
var markers = [];
var destino_markers = [];
var latlngbounds;
var marker_open = null;
var map;
var currentFeature_or_Features;
var infoWindow;
var circle;
var prueba;
var latitud;
function LoadMap() {
    var mapOptions = {
        zoom: 12,
        mapTypeId: google.maps.MapTypeId.ROADMAP

    };

  
    map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    latlngbounds = new google.maps.LatLngBounds();
    markers = [];
    marker_open = null;
    
    
    
    if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
 
                        var latitud = position.coords.latitude;
			var longitud = position.coords.longitude;

			var position = new google.maps.LatLng(latitud,longitud);
                        
                        
                        $('#lti').val(latitud);
                        $('#lgi').val(longitud);	

         
    map.setCenter(position);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }

}


function handleNoGeolocation(errorFlag) {
    if (errorFlag) {
        var content = 'Error: La localizacion fallo.';
    } else {
        var content = 'Error: Su navegador no soporta activación de GPS';
    }

 

    var infowindow = new google.maps.InfoWindow(options);
    map.setCenter(options.position);
}


function mapDetalle(latitude, length) {
    var latitude = 60;
    var length = 105;
  
   
       var position = new google.maps.LatLng(latitude, length);
       map.setCenter(position);
       // content: content
       
       
   
}



function addMarkerPlaces(places) {
    console.log(places);
   $.each(places.Places, function( index, element ) {
  var marker = new google.maps.Marker({
        position: new google.maps.LatLng(element.latitude, element.length),
        map: map  

    });

    
    var infoWindow = new google.maps.InfoWindow();
    
    google.maps.event.addListener(marker, 'click', function() { 
        
        var myHtml = '<strong>' + element.name + '</strong><br/>';
        var url = $('#url_detalle').val();
        url = url.substring(0, url.length-1);
        myHtml += '<div class="link">\n\
                   <a title="Ver más" href="'+ url + element.id +'">Ver más</a>\n';
        $.each(element.activity, function(index, objecto){
            myHtml += '<br>' + objecto.name + '</br>';

        });
        

      infoWindow.setContent(myHtml);
      infoWindow.open(map, marker);
      
       var object = new Array();
       object.push('palces_' + places.id);
       object.push(marker);
      
      
      
    
    });
    
});
    
    
}



function addMarkerActivity(places, activity) {
    alert('sa');
    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(places.latitude, places.length),
        map: map,
    });
    latlngbounds.extend(marker.getPosition());
    marker.set('id', activity.id);

    
    var myOptions = {
        content: '<div class="infobox">\n\
                            <div class="title">\n\
                                <p class="namepopup">' + recortarTexto(activity.name, 30) + '</p>\n\
                                <p class="descriptionpopup"> ' + recortarTexto(activity.description, 50) + '</p>\n\
                            </div>\n\
                            <div class="link">\n\
                                <a title="Ver más" onclick="cargarDetalleServicio('+ activity.id +')" href="#">Ver más</a>\n\
                            </div>\n\
                      </div>',
        disableAutoPan: false,
        maxWidth: 0,
        pixelOffset: new google.maps.Size(-145, -200),
        zIndex: null,
        //closeBoxURL: "",
        infoBoxClearance: new google.maps.Size(1, 1),
        position: new google.maps.LatLng(places.latitude, places.length),
        isHidden: false,
        pane: "floatPane",
        enableEventPropagation: false
    };

    marker.infobox = new InfoBox(myOptions);
    marker.infobox.isOpen = false;


    var myOptions = {
        draggable: true,
        disableAutoPan: true,
        pixelOffset: new google.maps.Size(-21, -58),
        position: new google.maps.LatLng(places.latitude, places.length),
        closeBoxURL: "",
        isHidden: false,
        pane: "mapPane",
        enableEventPropagation: true
    };

    marker.marker = new InfoBox(myOptions);
    marker.marker.open(map, marker);



    var object = new Array();
    object.push('servicio_' + servicio.id);
    object.push(marker);
    markers.push(object);
    if (markers.length > 1) {
        map.fitBounds(latlngbounds);
    } else {
        mapDetalle(servicio.latitud, servicio.longitud);
    }
}

// Sets the map on all markers in the array.
function setAllMap(map) {
    $.each(markers, function(index, object) {
        var marker = object[1];
        marker.setMap(map);
    })
}

// Removes the overlays from the map, but keeps them in the array.
function clearOverlays() {
    setAllMap(null);
}

// Shows any overlays currently in the array.
function showOverlays() {
    setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteOverlays() {

    clearOverlays();
    markers = [];
    latlngbounds = new google.maps.LatLngBounds();
    if (marker_open != null) {
        marker_open.infobox.close();
        marker_open = null;
    }
    
}



