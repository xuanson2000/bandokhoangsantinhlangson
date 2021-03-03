




<!DOCTYPE html>
<html>
   <head>
      <title>Leaflet Multi Polygons</title>
      <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
      <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
   </head>
   
   <body>
      <div id = "map" style = "width: 900px; height: 580px"></div>
  

      <script>
         // Creating map options
         var mapOptions = {
            center: [21.851790, 106.746938],
            zoom: 15
         }
         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);
         
         // Creating latlng object
         var latlang1 = <?php echo json_encode($array0); ?>;

         // var latlang1 = [
         //    [[17.385044, 78.486671], [16.506174, 80.648015], [17.686816, 83.218482]],
         //    [[13.082680, 80.270718], [12.971599, 77.594563],[15.828126, 78.037279]]
         // ];


         for (var i = 0; i < latlang1.length; i++) {
         

          var multiPolygonOptions = {color:'red', weight:2};
          var title=latlang1[i][i+1];
      
         // Creating multi polygons
         var latlang=[latlang1[i][i]];

         var multipolygon = L.multiPolygon(latlang , multiPolygonOptions);
         multipolygon.setStyle({color:'red',opacity:.5});

          multipolygon.bindPopup("Thông tin: " + title);
         
         // Adding multi polygon to map
         multipolygon.addTo(map);

       }



         // Creating multi polygon options
       
      </script>
   </body>
   
</html>




















 // Creating latlng object

         // var mapss = <?php echo json_encode($mapss); ?>;
         // var idmos = <?php echo json_encode($idmos); ?>;
         // var string1='';
         //  var latlang='';

         //  for(let i=0; i <= idmos.length; i++ )
         //  {
         //    for(let j=0; j <= mapss.length; j++ )
         //    {
         //      if()


         //    }

         //  }

  //        foreach($idmos as $idmoi) {

  //         foreach($mapss as $maps) {

  //           if($maps->idMo==$idmoi->idMo)
  //           {
  //             $latlang=$latlang."[".$maps->toaDoX.",".$maps->toaDoY."]";

  //           }  

  //         }



  //   //  dd($string2);

  // }

  // $string1=$string1.$string2."+";



  //        for(let i=0; i <= arrays.length; i++) {
  //         var latlang[1]=arrays[0][0];

  //       }

      // var latlang=[arrays0];

     //alert(latlang);

     // <?php foreach ($variable as $key => $value): ?>
   
 // <?php endforeach ?>



 <!DOCTYPE html>
<html>
   <head>
      <title>Leaflet Multi Polygons</title>
      <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
      <script src = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
   </head>
   
   <body>
      <div id = "map" style = "width: 1400px; height: 580px"></div>
      <script>


         // Creating map options
         var mapOptions = {
            center: [21.853254, 106.744121],
            zoom: 15 
         }

         // Creating a map object
         var map = new L.map('map', mapOptions);
         
         // Creating a Layer object
         var layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
         
         // Adding layer to the map
         map.addLayer(layer);

        
          



         <?php 
         $string1='';
         $string2='';
         ?>

         <?php   foreach ($idmos as $idmoi): ?>

           <?php    foreach ($mapss as $maps): ?>

           <?php if($maps->idMo==$idmoi->idMo): ?>


           
           <?php
            $string2=$string2."[".$maps->toaDoX.",".$maps->toaDoY."],"; 

           ?>

               <?php endif ?>

                  
            <?php endforeach ?>

          <?php 
         $string1="[[".$string2."]]";
         
// $string1=[[[21.855321,106.746128][21.855401,106.747179][21.854953,106.747275][21.854634,106.745998]]];
         
dd($string1);
         //$string1=[[[21.853168, 106.745359], [21.853123, 106.746392], [21.852319, 106.745221],]];

           ?>
    // dd($string2);

          var latlang = <?php  echo json_encode($string1); ?>;
     

        
          var multiPolygonOptions = {color:'blue', weight:1};

         // Creating multi polygons
          var multipolygon = L.multiPolygon(latlang , multiPolygonOptions);

         // Adding multi polygon to map      
          multipolygon.addTo(map);

      <?php endforeach ?>
    
         // var latlang = [[[21.853168, 106.745359], [21.853123, 106.746392], [21.852319, 106.745221]]];
         // Creating multi polygon options
        
      </script>
  



   </body>
   
</html>