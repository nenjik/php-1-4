<?php

$string ='http://api.openweathermap.org/data/2.5/weather?id=456172&units=metric&appid=d4b5e9fd3ae5f9033f2f01f4b6f49bb0';

$data = json_decode(file_get_contents($string),true);

$temp = $data['main']['temp'];

$country = "<h1>".$data['name'].",".$data['sys']['country']."</h1><br>";
$icon = $data['weather'][0]['icon'];
$visibility = $data['visibility'];
$visibilitykm = $visibility / 1000;

$logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>"."<br>";
$temperature =  "Temp:".$temp."°C<br>";
$clouds = "Clouds:".$data['clouds']['all']."%<br>";
$windspeed = "Wind Speed:".$data['wind']['speed']."m/s<br>";
$pressure = "Pressure:".$data['main']['pressure']."hpa<br>";
$visibility =  "Visibility:".$visibilitykm."Km<br>";


echo $country;
echo $logo;
echo $temperature;
echo $clouds;
echo $windspeed;
echo $pressure;
echo $visibility;

?>

