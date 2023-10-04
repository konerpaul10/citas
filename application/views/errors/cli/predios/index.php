<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PREDIOS</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXV6fJ3AmkKcvYoxYWcAyQ5Y1ddJwSD68&libraries=places&callback=initMap">
</script>
  </head>
  <body>
    <div class="row">
      <div class="col-md-6">
        <center><legend>REGISTRAR PREDIO</legend></center>
        <form class="" action="<?php echo site_url('predios/insertarPredio'); ?>" method="post">
          <div class="col-md-12">
            <label for=""><b>NOMBRE DEL PROPIETARIO:</b></label>
            <input type="text" name="propietario_pre" id="propietario_pre"
            class="form-control" placeholder="Ingrese nombre y apellido" value="">
          </div>
          <br>
          <div class="col-md-12">
            <legend class="text-center"><b>COORDENADA 1</b></legend>
            <div class="row">
              <div class="col-md-6">
                <label for=""><b>LATITUD:</b></label>
                <input type="number" name="latitud1_pre" id="latitud1_pre"
                class="form-control" placeholder="Ingrese la latitud" value="">
              </div>
              <div class="col-md-6">
                <label for=""><b>LONGITUD:</b></label>
                <input type="number" name="longitud1_pre" id="longitud1_pre"
                class="form-control" placeholder="Ingrese la longitud" value="">
              </div>
            </div>
            <br><br>
            <div id="mapa_coordenada_1" style="border:2px solid black; height:300px;">

            </div>
          </div>

          <br>
          <div class="col-md-12">
            <legend class="text-center"><b>COORDENADA 2</b></legend>
            <div class="row">
              <div class="col-md-6">
                <label for=""><b>LATITUD:</b></label>
                <input type="number" name="latitud2_pre" id="latitud2_pre"
                class="form-control" placeholder="Ingrese la latitud" value="">
              </div>
              <div class="col-md-6">
                <label for=""><b>LONGITUD:</b></label>
                <input type="number" name="longitud2_pre" id="longitud2_pre"
                class="form-control" placeholder="Ingrese la longitud" value="">
              </div>
            </div>
                      <br><br>
            <div id="mapa_coordenada_2" style="border:2px solid black; height:300px;">

            </div>
          </div>


          <br>
          <div class="col-md-12">
            <legend class="text-center"><b>COORDENADA 3</b></legend>
            <div class="row">
              <div class="col-md-6">
                <label for=""><b>LATITUD:</b></label>
                <input type="number" name="latitud3_pre" id="latitud3_pre"
                class="form-control" placeholder="Ingrese la latitud" value="">
              </div>
              <div class="col-md-6">
                <label for=""><b>LONGITUD:</b></label>
                <input type="number" name="longitud3_pre" id="longitud3_pre"
                class="form-control" placeholder="Ingrese la longitud" value="">
              </div>
            </div>
            <div id="mapa_coordenada_3" style="border:2px solid black; height:300px;">

            </div>
          </div>


          <br>
          <div class="col-md-12">
            <legend class="text-center"><b>COORDENADA 4</b></legend>
            <div class="row">
              <div class="col-md-6">
                <label for=""><b>LATITUD:</b></label>
                <input type="number" name="latitud4_pre" id="latitud4_pre"
                class="form-control" placeholder="Ingrese la latitud" value="">
              </div>
              <div class="col-md-6">
                <label for=""><b>LONGITUD:</b></label>
                <input type="number" name="longitud4_pre" id="longitud4_pre"
                class="form-control" placeholder="Ingrese la longitud" value="">
              </div>
            </div>
            <div id="mapa_coordenada_4" style="border:2px solid black; height:300px;">

            </div>
          </div>

          <br>&nbsp;<br>
          <div class="col-md-12 text-center">
              <button type="submit" name="button" class="btn btn-success">
                GUARDAR
              </button>
              <button type="reset" name="button" class="btn btn-danger">
                CANCELAR
              </button>
          </div>


        </form>
      </div>
      <div class="col-md-6">
        <center><h3>LISTADO DE PREDIOS</h3></center>
      </div>
    </div>



    <script type="text/javascript">
          function initMap(){
            //alert("MAPA DE GOOGLE IMPORTADO EXITOSAMENTE");
            //Definiendo una coordenada
            var latitud_longitud=
            new google.maps.LatLng(-0.9374805,-78.6161327);
            //Creando el mapa
            var map=new google.maps.Map(document.getElementById('mapa_coordenada_1'),
              {
                  center:latitud_longitud,
                  zoom:12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            );
            var marcador1=new google.maps.Marker({
              position:latitud_longitud,
              map:map,
              title:'Seleccione la coordenada del predio',
              draggable:true


            });

            google.maps.event.addListener(marcador1,'dragend',function(event){
              var latitud1=this.getPosition().lat();
              var longitud1=this.getPosition().lng();
              //alert(latitud1+"\n"+longitud1);
              document.getElementById('latitud1_pre').value=latitud1;
              document.getElementById('longitud1_pre').value=longitud1;

            });




            var map=new google.maps.Map(document.getElementById('mapa_coordenada_2'),
              {
                  center:latitud_longitud,
                  zoom:12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            );
            var marcador1=new google.maps.Marker({
              position:latitud_longitud,
              map:map,
              title:'Seleccione la coordenada del predio',
              draggable:true


            });

            google.maps.event.addListener(marcador1,'dragend',function(event){
              var latitud1=this.getPosition().lat();
              var longitud1=this.getPosition().lng();
            //  alert(latitud1+"\n"+longitud1)2;
            document.getElementById('latitud2_pre').value=latitud1;
            document.getElementById('longitud2_pre').value=longitud1;

            });




            var map=new google.maps.Map(document.getElementById('mapa_coordenada_3'),
              {
                  center:latitud_longitud,
                  zoom:12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            );
            var marcador1=new google.maps.Marker({
              position:latitud_longitud,
              map:map,
              title:'Seleccione la coordenada del predio',
              draggable:true


            });

            google.maps.event.addListener(marcador1,'dragend',function(event){
              var latitud1=this.getPosition().lat();
              var longitud1=this.getPosition().lng();
            //  alert(latitud1+"\n"+longitud1)3;
            document.getElementById('latitud3_pre').value=latitud1;
            document.getElementById('longitud3_pre').value=longitud1;

            });


            var map=new google.maps.Map(document.getElementById('mapa_coordenada_4'),
              {
                  center:latitud_longitud,
                  zoom:12,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
              }
            );
            var marcador1=new google.maps.Marker({
              position:latitud_longitud,
              map:map,
              title:'Seleccione la coordenada del predio',
              draggable:true


            });

            google.maps.event.addListener(marcador1,'dragend',function(event){
              var latitud1=this.getPosition().lat();
              var longitud1=this.getPosition().lng();
            //  alert(latitud1+"\n"+longitud1)4;
            document.getElementById('latitud4_pre').value=latitud1;
            document.getElementById('longitud4_pre').value=longitud1;


            });




          }
    </script>

  </body>
</html>
