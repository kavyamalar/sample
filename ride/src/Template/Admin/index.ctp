<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Displaying users points</title>
  <script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <style>
    body {
      margin: 0;
      padding :0;
    }
    .map {
      position: absolute;
      top: 10;
      bottom: 0;
      left:25%;
      width: 75%;
      height:93%;
    }
  </style>
</head>
<body>
<?php
$conn = pg_connect("host=localhost port=5432 dbname=ctm user=postgres password=vps2018 ")

   or die('Could not connect: ' . pg_last_error());

$result = pg_query($conn,"SELECT * FROM map"); 

$res = pg_fetch_all($result,1);


$count=pg_num_rows($result);

echo "<script>var count = {$count};var one = [],two = [],mobile = [];</script>";

$i=0;
foreach($res as $data){
    echo "<script>mobile[{$i}] = {$data['mobile']};one[{$i}] = {$data['lat']};two[{$i}] = {$data['lng']};</script>";
    $i++;
}

?>
<div class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('View Details') ?></li>
        <li><?= $this->Html->link(__('Admin'), ['controller' => 'Users','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Drivers'), ['controller' => 'Driver','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Taxi'), ['controller' => 'Taxi','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Employee'), ['controller' => 'Emp','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Customers'), ['controller' => 'Customer','action' => 'index']) ?></li>
    </ul>
</div>
<div id='map-leaflet' class='map'> </div>

<script>
console.log(name);
console.log(one);
L.mapbox.accessToken = 'pk.eyJ1Ijoia2FydGhpa3Nlbm5peWFwcGFuIiwiYSI6ImNqYzhsMXA1NzAzcWQzM2trcmJreWlvb2oifQ.rVOdiLi6Y1xQPRXN4gLQGA';
var mapLeaflet = L.mapbox.map('map-leaflet', 'mapbox.streets')
  .setView([11.0764, 77.0030], 8);
    var i = 0;
    while(i < count){
    onee = one[i];
    twoo = two[i];
    namee = mobile[i];
    L.marker([onee, twoo]).addTo(mapLeaflet).bindPopup('<h5>'+namee+'</h5>');
    i++;
    }
    
    

    mapLeaflet.scrollWheelZoom.disable();
</script>

</body>
</html>


