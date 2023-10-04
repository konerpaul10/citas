<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>poligono con google maps </title>
    <meta name="author" content="PAUL TOAPANTA">
    <meta name="description" content="sitio web con poligonos de google">
    <meta name="keywords" content="Mpas,utc,latacunga,septimo sistemas">

  </head>
  <body>
    <div id="mapa-poligono" style="height:90vh; width:100%;">  </div>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXV6fJ3AmkKcvYoxYWcAyQ5Y1ddJwSD68&libraries=places&callback=initMap">
    </script>
    <script type="text/javascript">
    function initMap(){
      //madagascar
      var coordenada1=  new google.maps.LatLng(-12.157518596254734, 49.32066047413812);
      var coordenada2=  new google.maps.LatLng(-15.242064995056365, 46.96585452546834);
      var coordenada3=  new google.maps.LatLng(-16.231134729895242, 44.40692965681303);
      var coordenada4=  new google.maps.LatLng(-17.54215556655097, 43.88305527651889);
      var coordenada5=  new google.maps.LatLng(-19.851335709207742, 44.406929664579444);
      var coordenada6=  new google.maps.LatLng(-22.071395701186088, 43.177839767036346);
      var coordenada7=  new google.maps.LatLng(-23.55715439414803, 43.72186316430953);
      var coordenada8=  new google.maps.LatLng(-24.379605242690342, 43.657663634637146);
      var coordenada9=  new google.maps.LatLng(-25.49408569030745, 45.73301215016075);
      var coordenada10=  new google.maps.LatLng(-25.03075598987045, 46.95062049541572);
      var coordenada11=  new google.maps.LatLng(-21.8263980117373, 48.15036127066793);
      var coordenada12=  new google.maps.LatLng(-17.66402142567051, 49.503404232856866);
      var coordenada13=  new google.maps.LatLng(-16.239366366621297, 49.84309472355016);
      var coordenada14=  new google.maps.LatLng(-15.940721941133955, 50.19319459867137);
      var coordenada15=  new google.maps.LatLng(-15.25489283831139, 50.45141301930542);
      var coordenada16=  new google.maps.LatLng(-11.98534432151233, 49.26986815594056);

//ecuador
      var coordenada17=  new google.maps.LatLng(1.4721474442849674, -78.89093566682263);
      var coordenada18=  new google.maps.LatLng(-0.3163269200785371, -80.72925797493805);
      var coordenada19=  new google.maps.LatLng(-2.402368605026081, -81.07704868187881);
      var coordenada20=  new google.maps.LatLng(-3.0971448646501023, -80.08336094776236);
      var coordenada21=  new google.maps.LatLng(-2.5512824796170985, -79.78525462752742);
      var coordenada22=  new google.maps.LatLng(-3.54355257975995, -80.33178288129146);
      var coordenada23=  new google.maps.LatLng(-4.336617495985587, -80.43115165470311);
      var coordenada24=  new google.maps.LatLng(-5.178334393341092, -78.89093566682263);
      var coordenada25=  new google.maps.LatLng(-3.345174124422978, -78.1953542529411);
      var coordenada26=  new google.maps.LatLng(-2.9936394029018154, -77.8425913173133);
      var coordenada27=  new google.maps.LatLng(-2.586110309994249, -76.64736443055823);
      var coordenada28=  new google.maps.LatLng(-1.5630038278965213, -75.56526390880985);
      var coordenada29=  new google.maps.LatLng(-0.9253825208387723, -75.40483020281478);
      var coordenada30=  new google.maps.LatLng(-0.9454203911602844, -75.21836073287669);
      var coordenada31=  new google.maps.LatLng(-0.5205756875930098, -75.25675838410802);
      var coordenada32=  new google.maps.LatLng(-0.1105819588370958, -75.59438700329582);
      var coordenada33=  new google.maps.LatLng(-0.1137786200623546, -75.27702470376997);
      var coordenada34=  new google.maps.LatLng(0.4349786574708186, -76.29109040338267);
      var coordenada35=  new google.maps.LatLng(0.2697923719689267, -76.44026009015985);
      var coordenada36=  new google.maps.LatLng(0.4340466660231043, -77.5564960946388);
      var coordenada37=  new google.maps.LatLng(0.6566897270392673, -77.50169757011552);
      var map=new google.maps.Map(document.getElementById("mapa-poligono"),
          {
            zoom:5,
            center:{lat:22.962465834594912,lng: -43.42252139763957},


            mapTypeId:"terrain"
          } );

          var coordenadasUTC=[
                coordenada1,
                coordenada2,
                coordenada3,
                coordenada4,
                coordenada5,
                coordenada6,
                coordenada7,
                coordenada8,
                coordenada9,
                coordenada10,
                coordenada11,
                coordenada12,
               coordenada13,
               coordenada14,
               coordenada15,
               coordenada16,


              ];

              var territorioUTC=
              new google.maps.Polygon({
                paths:coordenadasUTC,
                strokeColor:"#604021",
                strokeOpacity:"0.5",
                strokeWeight:3,
                fillColor:"#604021",
                fillOpacity:"0.3"
              });
              territorioUTC.setMap(map);
              var marker1 = new google.maps.Marker({
                  position: coordenada1,
                  map:map,
                  title:"Punto 1"
              });
              var marker2 = new google.maps.Marker({
                  position: coordenada2,
                  map:map,
                  title:"Punto 2"
              });
              var marker3 = new google.maps.Marker({
                  position: coordenada3,
                  map:map,
                  title:"Punto 3"
              });

              var marker4 = new google.maps.Marker({
                  position: coordenada4,
                  map:map,
                  title:"Punto 4"
              });

              var marker5 = new google.maps.Marker({
                  position: coordenada5,
                  map:map,
                  title:"Punto 5"
              });


                    var marker6 = new google.maps.Marker({
                          position: coordenada6,
                          map:map,
                          title:"Punto 6"
                      });
                      var marker7 = new google.maps.Marker({
                          position: coordenada7,
                          map:map,
                          title:"Punto 7"
                      });

                      var marker8 = new google.maps.Marker({
                          position: coordenada8,
                          map:map,
                          title:"Punto 8"
                      });

                      var marker9 = new google.maps.Marker({
                          position: coordenada9,
                          map:map,
                          title:"Punto 9"
                      });


              var marker10 = new google.maps.Marker({
              position: coordenada10,
              map:map,
              title:"Punto 10"
              });
              var marker11 = new google.maps.Marker({
                  position: coordenada11,
                  map:map,
                  title:"Punto 11"
              });

              var marker12 = new google.maps.Marker({
                  position: coordenada12,
                  map:map,
                  title:"Punto 12"
              });
              var marker13 = new google.maps.Marker({
                  position: coordenada13,
                  map:map,
                  title:"Punto 13"
              });
      var marker14 = new google.maps.Marker({
      position: coordenada14,
      map:map,
      title:"Punto 14"
      });
      var marker15 = new google.maps.Marker({
          position: coordenada15,
          map:map,
          title:"Punto 15"
      });

      var marker16 = new google.maps.Marker({
          position: coordenada16,
          map:map,
          title:"Punto 16"
      });
    //territorio
    var coordenadasUTC=[
                coordenada17,
                coordenada18,
                coordenada19,
                coordenada20,
                coordenada21,
                coordenada22,
                coordenada23,
                coordenada24,
                coordenada25,
                coordenada26,
                coordenada27,
                coordenada28,
                coordenada29,
                coordenada30,
                coordenada31,
                coordenada32,
                coordenada33,
                coordenada34,
                coordenada35,
                coordenada36,
                coordenada37,


              ];
    var territorioUTC=
    new google.maps.Polygon({
              paths:coordenadasUTC,
              strokeColor:"#61F221",
              strokeOpacity:"0.5",
              strokeWeight:3,
              fillColor:"#61F221",
              fillOpacity:"0.3"
          });
          territorioUTC.setMap(map);
          var marker17 = new google.maps.Marker({
          position: coordenada17,
          map:map,
          title:"Punto 17"
          });
    var marker18 = new google.maps.Marker({
    position: coordenada18,
    map:map,
    title:"Punto 18"
    });
    var marker19 = new google.maps.Marker({
      position: coordenada19,
      map:map,
      title:"Punto 19"
    });

    var marker20 = new google.maps.Marker({
      position: coordenada20,
      map:map,
      title:"Punto 20"
    });

    var marker21 = new google.maps.Marker({
      position: coordenada21,
      map:map,
      title:"Punto 21"
    });
    //territorio
          territorioUTC.setMap(map);
    var marker22 = new google.maps.Marker({
    position: coordenada22,
    map:map,
    title:"Punto 22"
    });
    var marker23 = new google.maps.Marker({
      position: coordenada23,
      map:map,
      title:"Punto 23"
    });

    var marker24 = new google.maps.Marker({
      position: coordenada24,
      map:map,
      title:"Punto 24"
    });

    var marker25 = new google.maps.Marker({
      position: coordenada25,
      map:map,
      title:"Punto 25"
    });
    var marker26 = new google.maps.Marker({
    position: coordenada26,
    map:map,
    title:"Punto 26"
    });
    var marker27 = new google.maps.Marker({
      position: coordenada27,
      map:map,
      title:"Punto 27"
    });

    var marker28 = new google.maps.Marker({
      position: coordenada28,
      map:map,
      title:"Punto 28"
    });
    var marker29 = new google.maps.Marker({
      position: coordenada29,
      map:map,
      title:"Punto 29"
    });
    var marker30 = new google.maps.Marker({
      position: coordenada30,
      map:map,
      title:"Punto 30"
    });

    var marker31 = new google.maps.Marker({
      position: coordenada31,
      map:map,
      title:"Punto 31"
    });
    //territorio
          territorioUTC.setMap(map);
    var marker32 = new google.maps.Marker({
    position: coordenada32,
    map:map,
    title:"Punto 32"
    });
    var marker33 = new google.maps.Marker({
      position: coordenada33,
      map:map,
      title:"Punto 33"
    });

    var marker34 = new google.maps.Marker({
      position: coordenada34,
      map:map,
      title:"Punto 34"
    });

    var marker35 = new google.maps.Marker({
      position: coordenada35,
      map:map,
      title:"Punto 35"
    });
    var marker36 = new google.maps.Marker({
    position: coordenada36,
    map:map,
    title:"Punto 36"
    });
    var marker37 = new google.maps.Marker({
      position: coordenada37,
      map:map,
      title:"Punto 37"
    });

    territorio.setMap(map);
            alert("Ok");

  }
    </script>


  </body>


</html>
