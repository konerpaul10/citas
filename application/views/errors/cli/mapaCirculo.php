<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mapa con Circulos</title>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8edoQMxT8c0wydXHuGtBrh69v1igx0W0&callback=initMap"></script>
  </head>
  <body>
    <center>
      <h1>Mapa Circulo</h1>
    </center>
    <br>
    <div id="mapa1" style="width:100%; height:80vh;"></div>
    <script type="text/javascript">
          function initMap(){
            //alert("MAPA DE GOOGLE IMPORTADO EXITOSAMENTE");
            //Definiendo una coordenada
            var latitud_longitud=
            new google.maps.LatLng(-0.9374805,-78.6161327);
            //Creando el mapa
            var map=new google.maps.Map(document.getElementById('mapa1'),
              {
                  center:latitud_longitud,
                  zoom:12,
                  strokeColor:"	#008000",
                  strokeOpacity:"0.5",
                  strokeWeight:3,
                  fillColor:"	#008000",
                  fillOpacity:"0.3",

                  mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            );

            var coodernadaUTC= new google.maps.LatLng(-0.3143167076362789, -78.63286774564314);
              var circulo=new google.maps.Circle(
                {
                  strokeColor:"#ff0000",
                  strokeOpacity:0.8,
                  strokeWeight: 2,
                  fillColor:"#ff0000",
                  fillOpacity:0.35,
                  map:map,
                  center:coodernadaUTC,
                  radius:50*1000
                }
              );
      }
    </script>
  </body>
</html>
