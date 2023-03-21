<?php

function conversion($var){
     $var = strval($var);
     $var = substr($var,0,6);

     return $var;
}

if(!empty($_POST['ville']) && preg_match('#[A-Z a-z 0-9]{2,}#',$_POST['ville'])){

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

          $reponse = array(
               'description' => $result['weather'][0]['description'],
               'temperature' => conversion($result['main']['temp'] - 273.15),
               'sunrise' => $result['sys']['sunrise'],
               'sunset' => $result['sys']['sunset'],
               'vent' => $result['wind']['speed'],
               'temp_min' => conversion($result['main']['temp_min']),
               'temp_max' => conversion($result['main']['temp_max']),
               'humidite' => $result['main']['humidity'],
               'visibilite' => $result['visibility']/1000,
               'longitude' => $result['coord']['lon'],
               'latitude' => $result['coord']['lat'],
               'ville' => ucfirst($_POST['ville']),
               'date' => date("F j, Y - g:i a")
          );
          echo json_encode($reponse);
     }

     curl_close($newCurl);

}