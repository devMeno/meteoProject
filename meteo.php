<?php

function conversion($var){
     $var = strval($var);
     $var = substr($var,0,6);

     return $var;
}
if(!empty($_POST['ville']) && preg_match('#[A-Z a-z 0-9]{2,}#',$_POST['ville'])){

     session_start();

     $_POST['ville'] = htmlspecialchars($_POST['ville']);
     $ville = $_POST['ville'];

     $url = 'http://api.openweathermap.org/geo/1.0/direct?q='. $_POST['ville'] .'&limit=1&appid=d68b5e79df4aac83a103803c3e37c758';

     $curl = curl_init($url);

     curl_setopt($curl , CURLOPT_RETURNTRANSFER , true); 

     $api_result = curl_exec($curl);

     $api_result = json_decode($api_result,true);

     curl_close($curl);


     $url2 = 'https://api.openweathermap.org/data/2.5/weather?lat='. $api_result[0]['lat'] .'&lon='. $api_result[0]['lon'] .'&exclude=hourly,daily&appid=d68b5e79df4aac83a103803c3e37c758';

     $newCurl = curl_init($url2);

     curl_setopt($newCurl , CURLOPT_SSL_VERIFYPEER , false);

     curl_setopt($newCurl , CURLOPT_RETURNTRANSFER , true); 

     $result = curl_exec($newCurl);

     if ($result === false) {
     echo 'Erreur curl : ' . curl_error($newCurl);
     } else {
          $result = json_decode($result , true);
          $_SESSION['description'] = $result['weather'][0]['description'];
          $_SESSION['temperature'] = $result['main']['temp'];
          $_SESSION['sunrise'] = $result['sys']['sunrise'];
          $_SESSION['sunset'] = $result['sys']['sunset'];
          $_SESSION['vent'] = $result['wind']['speed'];
          $_SESSION['temp_min'] = $result['main']['temp_min'];
          $_SESSION['temp_max'] = $result['main']['temp_max'];
          $_SESSION['humidite'] = $result['main']['humidity'];
          $_SESSION['visibilite'] = $result['visibility'];
          $_SESSION['longitude'] = $result['coord']['lon'];
          $_SESSION['latitude'] = $result['coord']['lat'];
          $_SESSION['ville'] = $result['name'];
          
          //echo $_SESSION['temperature'] .' et '.$_SESSION['description'];
          //header('Location:index.php');

          $reponse = array(
               'description' => $_SESSION['description'],
               'temperature' => conversion($_SESSION['temperature'] - 273.15),
               'sunrise' => $_SESSION['sunrise'],
               'sunset' => $_SESSION['sunset'],
               'vent' => $_SESSION['vent'],
               'temp_min' => conversion($_SESSION['temp_min']),
               'temp_max' => conversion($_SESSION['temp_max']),
               'humidite' => $_SESSION['humidite'],
               'visibilite' => $_SESSION['visibilite']/1000,
               'longitude' => $_SESSION['longitude'],
               'latitude' => $_SESSION['latitude'],
               'ville' => $_SESSION['ville']
          );
          echo json_encode($reponse);
     }

     curl_close($newCurl);

}