<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <form action="meteo.php" method="post">
          <input type="text" placeholder="Choisissez une ville" name="ville">
          <input type="submit">
     </form><br><br>

     <?php
     session_start();
     
     if(!empty($_SESSION)){
          echo $_SESSION['temperature'] .' et '.$_SESSION['description'];
     }
     ?>
</body>
</html>