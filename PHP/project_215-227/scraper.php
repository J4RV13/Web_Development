<?php
  // $city = $_GET["city"];
  // str_replace(" ", "-", $city);
  // $contents = file_get_contents("https://www.weather-forecast.com/locations/" . $city . "/forecasts/latest");

  // preg_match("/\"phrase\">(.*?)</span>/i", $contents, $matches);

  // echo $matches[1];

  // ----------------------------------- API -----------------------------------
  $city = $_GET["city"];
  $apikey = "5992b2d1dd9351dd69f42aa13b651fcb";
  $contents = file_get_contents("https://api.openweathermap.org/data/2.5/forecast?q=" . $city . "&appid=" . $apikey); /// . "&lang=zh_tw"
//   echo $contents;
  $contents = json_decode($contents, true);

  $cityName = $contents["city"]["name"]; /// https://jsoneditoronline.org/
//   print_r ($cityName);
  $description = $contents["list"]["6"]["weather"]["0"]["description"];
//   print_r ($description);
  $temperature = $contents["list"]["6"]["main"]["temp"] - 273.15; /// absolute zero
//   print_r ($temperature);
  $result = "City: " . $cityName. ", Weather Description: " . $description . ", Temperature: " . $temperature . "°C";

  if ($cityName != "") {
    echo $result;
  }
?>