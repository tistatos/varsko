<?php
function loadGeoJson()
{
  $str = file_get_contents('geojson/allData.geojson');
  $json = json_decode($str, true);
  $feature = $json['features'];

  for($i = 0 ; $i < count($feature); $i++)
  {
    unset( $feature[$i]["geometry"]);
  }
  return $feature;
}
?>