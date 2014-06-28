<?php

/* FrontFrontendBundle:Activity:show_map.html.twig */
class __TwigTemplate_5b5ddc7a28f7a007390781171e0ebe65849399fb020659fa3837bf23bd9e96ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xmlns:v=\"urn:schemas-microsoft-com:vml\">
  <head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <script type=\"text/javascript\" src=\"//maps.google.com/maps/api/js?sensor=false\"></script>
    <script type=\"text/javascript\">

      var map;
      function initialize() {
        var mapDiv = document.getElementById('maps');
        map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(37.4419, -122.1419),
          zoom: 13,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      
        google.maps.event.addListenerOnce(map, 'tilesloaded', addMarkers);
      
      if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
 
                        var latitud = position.coords.latitude;
\t\t\tvar longitud = position.coords.longitude;

\t\t\tvar position = new google.maps.LatLng(latitud,longitud);
                        
                        
                        \$('#lti').val(latitud);
                        \$('#lgi').val(longitud);\t

   
      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: position,
        content: 'You Here'
      });
   
//    var circle = new google.maps.Circle({
//            center: new google.maps.LatLng(latitud,longitud),
//            radius: 20000,
//            fillColor: \"#blue\",
//            map: map
//        });
//      
      map.setCenter(position);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
      
      }
      
      
      
      function addMarkers() {
              
           var marker = new google.maps.Marker({
                 
            position: new  google.maps.LatLng( latitud, longitud),
                map: map
            });
            
            map.setZoom(14);
            map.setCenter(marker.getPosition());
      }
      

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>

       <style>
      .gmaps{
                height: 360px;

            }

        .gmaps img {
                        max-width: none;
        }
        </style>
        <div class=\"row\">
                 <div class=\"col-md-12\">
              <div class=\"col-md-9 col-md-offset-1 if\"><div id=\"maps\"class=\"gmaps\"></div></div>
                  <div class=\"row\">
                          <div class=\"col-md-6 col-md-offset-3 buscar1\">      
                            <br/>
                            <br/>
                            <h1 class=\"text-center\">Actividad</h1>
                            <br/>
                        </div>  
                    </div>
          </div>
        </div>
     

</html>";
    }

    public function getTemplateName()
    {
        return "FrontFrontendBundle:Activity:show_map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  155 => 5,  151 => 4,  148 => 3,  130 => 85,  126 => 84,  122 => 83,  118 => 82,  114 => 81,  104 => 74,  100 => 73,  93 => 69,  80 => 58,  75 => 56,  67 => 53,  62 => 51,  59 => 50,  57 => 49,  45 => 39,  43 => 38,  34 => 33,  32 => 3,  29 => 2,);
    }
}
