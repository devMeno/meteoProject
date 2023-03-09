<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="container-fluid">
          <div class="row">
               <div class="col-sm-3">
                    <form action="meteo.php" method="post">
                         <div class="input-icone">
                              <ion-icon name="search-outline" class="recherche"></ion-icon>
                              <input type="text" placeholder="Search for places..." name="ville">
                              <button type="reset"><ion-icon name="close-circle-outline" class="reset"></ion-icon></button>
                         </div>
                    </form>
                    <div class="image">
                         <img src="Images/photo_2023-03-08_13-40-46-removebg.png" alt="Photo">
                    </div>
                    <div class="temperature">12°C</div>
                    <div class="date">Monday,<em>16:00</em></div><hr>
                    <div class="description">
                         <ion-icon name="partly-sunny-outline" id="descr"></ion-icon><label for="descr">Mostly Cloudy</label><br>
                         <ion-icon name="rainy-outline" id="rain"></ion-icon><label for="rain">Rain - <em>30%</em></label>
                    </div>
                    <div class="city"><h3>Ville</h3></div>
               </div>
               <div class="col-sm-9">
                    <h1>Today's weather forecast</h1>
                    <div class="info">
                         <div class="row">
                              <div class="col-sm-4">
                                   <p>Humidity</p>
                                   <div class="ligne haut">
                                        <h2>12</h2>
                                        <p>%</p>
                                   </div>
                                   <div class="ligne">
                                        <h4>Normal</h4>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p>Visibility</p>
                                   <div class="ligne haut">
                                        <h2>5.2</h2>
                                        <p>km</p>
                                   </div>
                                   <div class="ligne">
                                        <h4>Average</h4>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p>Wind Status</p>
                                   <div class="ligne haut">
                                        <h2>7.70</h2>
                                        <p>km/h</p>
                                   </div>
                                   <div class="ligne">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <h4>WSW</h4>
                                   </div>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-sm-4">
                                   <p>Sunrise & Sunset</p>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>6:35 AM</h5>
                                             <small>-1m 46s</small>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>5:55 PM</h5>
                                             <small>+2m 22s</small>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p>Temp min & max</p>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>6:35 AM</h5>
                                             <small>-1m 46s</small>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>5:55 PM</h5>
                                             <small>+2m 22s</small>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p>Quelque chose</p>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>6:35 AM</h5>
                                             <small>-1m 46s</small>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <img src="Images/Capture_d_écran_2023-03-08_170056-removebg-preview.png" alt="logo">
                                        <div class="pile">
                                             <h5>5:55 PM</h5>
                                             <small>+2m 22s</small>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     
     
     
     
     
     
     
     
     <!--<?php
     session_start();
     
     if(!empty($_SESSION)){
          echo $_SESSION['temperature'] .' et '.$_SESSION['description'];
     }
     ?>-->


     <script  type = "module"  src = "https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"> </script> 
     <script  nomodule  src = "https://unpkg .com/ionicons@5.5.2/dist/ionicons/ionicons.js"> </script>
</body>
</html>