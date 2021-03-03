<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
<link rel="stylesheet" href="src/leaflet-search.css" />
<link rel="stylesheet" href="style.css" />
<base href="{{asset('')}}"/> 
</head>

<body>
<h3><a href="../"><big>◄</big> Leaflet.Control.Search</a></h3>

<h4>Simple Example: <em>search markers in layer by title</em></h4>
<div id="map"></div>

<div id="post-it">
<b>Search values:</b><br />
aquamarine, black, blue, cyan, darkblue, darkred, darkgray, dodgerblue, gray, green, red, skyblue, yellow, white ...
</div>

<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="src/leaflet-search.js"></script>
<script>

  //sample data values for populate map
  var data = [
  ["LOCATION_1", 11.8166, 122.0942],
  ["LOCATION_2", 11.9804, 121.9189],
  ["LOCATION_3", 10.7202, 122.5621],
  ["LOCATION_4", 11.3889, 122.6277],
  ["LOCATION_5", 10.5929, 122.6325]
];

  
  var map = new L.Map('map', {zoom: 9, center: new L.latLng([11.206051, 122.447886]) });  //set center from first location

  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')); //base layer

  var markersLayer = new L.LayerGroup();  //layer contain searched elements
  
  map.addLayer(markersLayer);

  var controlSearch = new L.Control.Search({
    position:'topright',    
    layer: markersLayer,
    initial: false,
    zoom: 12,
    marker: false
  });

  map.addControl( controlSearch );

  ////////////populate map with markers from sample data
  for(i in data) {

  var title =data[i][0],
  loc =[data[i][1],data[i][2]],

    // var title = data[i].title, //value searched
    //  loc = data[i].loc,    //position found
      marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
    marker.bindPopup('title: '+ title );
    markersLayer.addLayer(marker);
  }

</script>

<div id="copy"><a href="http://labs.easyblog.it/">Labs</a> &bull; <a rel="author" href="http://labs.easyblog.it/stefano-cudini/">Stefano Cudini</a></div>

<script type="text/javascript" src="/labs-common.js"></script>

</body>
</html>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<title></title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.0/dist/leaflet.css" />
<link rel="stylesheet" href="../src/leaflet-search.css" />
<link rel="stylesheet" href="examples/style.css" />
</head>

<body>
<h3><a href="../"><big>◄</big> Leaflet.Control.Search</a></h3>

<h4>Simple Example: <em>search markers in layer by title</em></h4>
<div id="map"></div>

<div id="post-it">
<b>Search values:</b><br />
aquamarine, black, blue, cyan, darkblue, darkred, darkgray, dodgerblue, gray, green, red, skyblue, yellow, white ...
</div>

<script src="https://unpkg.com/leaflet@1.3.0/dist/leaflet.js"></script>
<script src="../src/leaflet-search.js"></script>
<script>

  //sample data values for populate map
  var data = [
  ["Lỗ khoan 1", 11.8166, 122.0942],
  ["Lỗ khoan 2", 11.9804, 121.9189],
  ["Lỗ khoan 3", 10.7202, 122.5621],
  ["Lỗ khoan 5", 11.3889, 122.6277],
  ["Lỗ khoan 4", 10.5929, 122.6325]
];

  
  var map = new L.Map('map', {zoom: 9, center: new L.latLng([11.206051, 122.447886]) });  //set center from first location

  map.addLayer(new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')); //base layer

  var markersLayer = new L.LayerGroup();  //layer contain searched elements
  
  map.addLayer(markersLayer);

  var controlSearch = new L.Control.Search({
    position:'topright',    
    layer: markersLayer,
    initial: false,
    zoom: 12,
    marker: false
  });

  map.addControl( controlSearch );

  ////////////populate map with markers from sample data
  for(i in data) {

  var title =data[i][0],
  loc =[data[i][1],data[i][2]],

    // var title = data[i].title, //value searched
    //  loc = data[i].loc,    //position found
      marker = new L.Marker(new L.latLng(loc), {title: title} );//se property searched
    marker.bindPopup('title: '+ title );
    markersLayer.addLayer(marker);
  }

</script>

<div id="copy"><a href="http://labs.easyblog.it/">Labs</a> &bull; <a rel="author" href="http://labs.easyblog.it/stefano-cudini/">Stefano Cudini</a></div>

<script type="text/javascript" src="/labs-common.js"></script>

</body>
</html>



