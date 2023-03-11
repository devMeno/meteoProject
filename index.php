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
          <div class="row tout">
               <div class="col-sm-3">
                    <form action="meteo.php" method="post">
                         <div class="input-icone">
                              <ion-icon name="search-outline" class="recherche"></ion-icon>
                              <input type="text" placeholder="Search for places..." name="ville" class="search">
                              <button type="reset"><ion-icon name="close-circle-outline" class="reset"></ion-icon></button>
                         </div>
                    </form>
                    <div class="center">
                         <div class="picture">
                              <div class="image">
                                   <img src="Images/photo_2023-03-08_13-40-46-removebg.png" alt="Photo">
                              </div>
                         </div>
                         <div class="maininfo">
                              <div class="temperature">12°C</div>
                              <div class="date">Monday,<em>16:00</em></div><hr>
                              <div class="description">
                                   <ion-icon name="partly-sunny-outline" id="descr"></ion-icon><label for="descr">Mostly Cloudy</label><br>
                                   <ion-icon name="rainy-outline" id="rain"></ion-icon><label for="rain">Rain - <em>30%</em></label>
                              </div>
                         </div>
                    </div>
                    <div class="city"><h3>Ville</h3></div>
               </div>
               <div class="col-sm-9">
                    <h1>Today's weather forecast</h1>
                    <div class="info">
                         <div class="row inforow">
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
                         
                              <div class="col-sm-4">
                                   <p class="line">Sunrise & Sunset</p>
                                   <div class="lignes">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                             <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
                                        </svg>
                                        <div class="pile">
                                             <h5>6:35 AM</h5>
                                             <small>-1m 46s</small>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                                        </svg>
                                        <div class="pile">
                                             <h5>5:55 PM</h5>
                                             <small>+2m 22s</small>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p class="line">Temp min & max</p>
                                   <div class="lignes">
                                        <img src="Images/thermometer-temperature-control-tool.png" alt="logo">
                                        <div class="pile">
                                             <h5>28.3°C</h5>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <img src="Images/thermometer-temperature-control-tool.png" alt="logo">
                                        <div class="pile">
                                             <h5>30°C</h5>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-4">
                                   <p class="line">Geographical cordinates</p>
                                   <div class="lignes">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                             <path fill-rule="evenodd" d="M10 18a.75.75 0 01-.75-.75V4.66L7.3 6.76a.75.75 0 11-1.1-1.02l3.25-3.5a.75.75 0 011.1 0l3.25 3.5a.75.75 0 01-1.1 1.02l-1.95-2.1v12.59A.75.75 0 0110 18z" clip-rule="evenodd" />
                                        </svg>
                                        <div class="pile">
                                             <h5>Longitude</h5>
                                             <small>2.32</small>
                                        </div>
                                   </div>
                                   <div class="lignes">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                             <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25L12 21m0 0l-3.75-3.75M12 21V3" />
                                        </svg>
                                        <div class="pile">
                                             <h5>Latitude</h5>
                                             <small>48.8589</small>
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