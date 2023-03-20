document.getElementById("pays").addEventListener("submit", function (event) {
  event.preventDefault();
  var country = document.getElementById("ville").value;
  let formData = new FormData();
  formData.append("ville", country);
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "meteo.php", true);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log(xhr.responseText);
      let object = JSON.parse(xhr.responseText);
      document.getElementById("humidity").innerText = object.humidite;
      document.getElementById("visibility").innerText = object.visibilite;
      document.getElementById("wind").innerText = object.vent;
      document.getElementById("sunrise").innerText = object.sunrise;
      document.getElementById("sunset").innerText = object.sunset;
      document.getElementById("min").innerText = object.temp_min;
      document.getElementById("max").innerText = object.temp_max;
      document.getElementById("long").innerText = object.longitude;
      document.getElementById("lat").innerText = object.latitude;
      document.getElementById("city").innerText = object.ville;
      document.getElementById("temp").innerText = object.temperature;
    } else {
      //  alert("Une erreur est survenue");
    }
  };
  xhr.send(formData);
});
