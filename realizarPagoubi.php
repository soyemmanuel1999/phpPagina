<?php
session_start();
if(!isset($_SESSION['nombreusuario'])){
  header("location: login.php");
}?>
<?php include('recursos/header.php')?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin="" />
<?php include('recursos/body.php')?>

<script src="./jquery/jquery-3.6.0.min.js"></script>

<div class="container">     
            <div id="activar">
        <input type="submit" onclick="activarUbicacion()" class="btn btn-primary" name="guarda" value="ACTIVAR MI UBICACION">                                 
</div>


<div id="textile">

      </div>
<div id="text">

</div>

<div id="myMap" style="height: 400px"></div>
<div id="boton">

</div>
</div>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
<script>

function activarUbicacion()
{
   $("#activar").hide();
    
   var url="";
   var latitud="";
   var longitud="";

   navigator.geolocation.getCurrentPosition(
        (pos)=>{
          var crd = pos.coords;
          latitud=crd.latitude;
          longitud=crd.longitude;
          url="https://nominatim.openstreetmap.org/reverse?format=json&lat="+latitud+"&lon="+longitud+"&zoom=18&addressdetails=1";
          obtenerDireccion(url);
          verMapa(latitud,longitud);
        },
        (err)=>{
            console.log(err)
        },
        {
            enableHighAccuracy:true,
            timeout:5000,
            maximumAge:0
        }
    
    )

   
}
function obtenerDireccion(url,latitud,longitud){
   $.ajax({
             type: "GET",
              url: url,
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                  success: function (data) {                   
                    var direccion= data.address.road+", "+data.address.city+
                    ", "+data.address.state+", "+data.address.postcode+", "+ 
                    data.address.country;
                    $('#textile').text("DIRECCION");
                  $('#text').text(direccion);
                  var button = '<input type="submit" value="continuar con esta direccion" onclick="estaDireccion()" class="btn btn-primary" id="continuar" name="continuar"/>';
                  var button2 = '<input type="submit" value="usar otra direccion" onclick="otraDireccion()" class="btn btn-secondary" id="continuar" name="continuar"/>';
                
                  $('#boton').append(button);
                  $('#boton').append(button2);
                    console.log(direccion)
                  },
               failure: function (data) {
                alert(data.adresss.city);
               },
               error: function (data) {
                alert(data.responseText);
             }
            });
}
          function verMapa(latitud, longitud){
                    let myMap = L.map('myMap').setView([latitud, longitud], 16)

                     L.tileLayer(`https://maps.wikimedia.org/osm-intl/{z}/{x}/{y}.png`, {
	                  maxZoom: 18,
                     }).addTo(myMap);

                     let marker = L.marker([latitud, longitud]).addTo(myMap)


                  }
         function  estaDireccion(){
            navigator.geolocation.getCurrentPosition(
        (pos)=>{
          var crd = pos.coords;
          latitud=crd.latitude;
          longitud=crd.longitude;
          window.open("listarCarrito.php?ok=1&latitud="+latitud+"&longitud="+longitud);

        },
        (err)=>{
            console.log(err)
        },
        {
            enableHighAccuracy:true,
            timeout:5000,
            maximumAge:0
        }
    
    )
            window.open("listarCarrito.php?ok=1")

         }
         function otraDireccion(){
            window.open("realizarPago.php")
         }

</script>