document.getElementById('pays').addEventListener('submit' , function(e){
     e.preventDefault();

     //var country = document.getElementsByName('ville').value;
     var xhr = new XMLHttpRequest();
     xhr.onreadystatechange = function(){
          /*if(this.readyState == 4 && this.status == 200){
               console.log(xhr.responseText);
          }*/
          console.log(this);
     }
     xhr.open('POST' , 'meteo.php' , true);
     //xhr.setRequestHeader("Content-Type", "application/x-www-formurlencoded");
     xhr.send();

     return false;
});