
<!DOCTYPE html>

<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mapa con circulos</title>
    <!--   API de google maps -->


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXV6fJ3AmkKcvYoxYWcAyQ5Y1ddJwSD68&libraries=places&callback=initMap"></script>

  </head>
  <body>

<div class="row">
  <div class="row">
    <div class="col-md-6">
      <form class="" action="<?php echo site_url('Radios/insertarRadio'); ?>" id="frm_nueva_marsectores" method="post">
        <div style="padding-left:2% ; padding-right:2%">

          <br>
          <div class="row">
            <div class="col-md-12 text-center">
              <label>Coordenada 1:</label>
              <div class="row">
                <div class="col-md-12">
                  <label for=""><b>Latitud:</b></label>
                  <input type="number" name="lat_rad" id="lat_rad" class="form-control" placeholder="Ingrese la latitud"  readonly required>
                </div>
                <div class="col-md-12">
                  <label for=""><b>Longitud:</b></label>
                  <input type="number" name="log_rad" id="log_rad"class="form-control" placeholder="Ingrese la longitud"  readonly required>
                </div>
              </div>
              <br>
              <div id="mapa_coordenada_1" style="border:2px solid black; width:800px; height:400px;"></div>

              <div class="row">
                <div class="col-md-12">
                  <br>
                  <label for=""><b>Kilometros:</b></label>
                  <input type="number" name="kl_rad" id="kl_rad"class="form-control" placeholder="Ingrese los Kilometros" value="" required>


                </div>
              </div>
              <br>
            </div>

          </div>
          <br>

          <div class="row">
            <div class="col-md-6 mt-5 text-center">
              <button class="btn btn-primary" style="width:60%"type="submit" name="button"> <i class="fa fa-save fa-lg">&nbsp;&nbsp;Guardar</i></button>
            </div>
          </div>
          <br>
        </div>
      </form>



    </div>
    <div class="col-md-6"> <br><br><br><br><br><br><br><br> <br>
          <div id="mapa1" style="border:2px solid black; width:800px; height:400px;"></div>

              <script type="text/javascript">
              function initMap(){

                var lat_log=new google.maps.LatLng(-0.9330512627565887, -78.6146556349335);

                //Creando el mapa
                //map es un nombre
                var map=new google.maps.Map(document.getElementById('mapa_coordenada_1'),
                  {
                      center:lat_log,
                      zoom:12,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  }
                );
                //maracador
                var marcador1= new google.maps.Marker({
                  //la posion de la coordenada
                  position: lat_log,
                  //llamamo a la variable map
                  map:map,
                  title: 'Seleccione la coordenada del previo',
                  //arrastrar
                  draggable:true

                });
                google.maps.event.addListener(marcador1,'dragend', function(event){
                var latitud1 =this.getPosition().lat();
                var longitud =this.getPosition().lng();

                document.getElementById('lat_rad').value=latitud1;
                document.getElementById('log_rad').value=longitud;
                });
                /////////////////mapa2///////////////////////////

                //alert("MAPA DE GOOGLE IMPORTADO EXITOSAMENTE");
                //Definiendo una coordenada
                var latitud_longitud=new google.maps.LatLng(-0.9170363925075244,-78.63310382061916);
                //Creando el mapa
                var mapa=new google.maps.Map(document.getElementById('mapa1'),
                  {
                      center:latitud_longitud,
                      zoom:12,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  }
                );
                // llamar datos de la base de datos
                <?php foreach ($listadoRadio->result() as $fila): ?>
                var coordenada=new google.maps.LatLng(<?php echo $fila->lat_rad;?>,<?php echo $fila->log_rad;?>);
                var circulo=new google.maps.Circle(
                  {
                    strokeColor:"#ff0000",
                    strokeOpacity:0.6,
                    strokeWeight:2,
                    fillColor:"#000000",
                    fillOpacity:0.35,
                    map:mapa,
                    center:coordenada,
                    radius:<?php echo $fila->kl_rad; ?>*1000

                  }

                );
                var marker1= new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $fila->lat_rad;?>, <?php echo $fila->log_rad;?>),
                map:mapa,
                title:"<?php echo $fila->id_rad;?>"
                });

                <?php endforeach; ?>



              }
              </script>


        </div>
    </div>


  </div>



  </body>
</html>
