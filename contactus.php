<!DOCTYPE HTML>
<html lang="en">
<head>
  <title>My first HTML5 page</title>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/styles.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
<body>
<div id="container">
<?php include("includes/header.html");?>
<?php include("includes/nav.html");?>
<div id="content">
<table>
<caption>Opening Hours</caption>
<tr>
<th>Days</th>
<th>Times</th>
</tr>
<td>Monday</td>
<td>9:00 - 17:00</td>
<tr>
<td>Tuesday</td>
<td>9:00 - 17:00</td>
</tr>
<td>Wednesday</td>
<td>9:00 - 17:00</td>
</tr>
<td>Thursday</td>
<td>9:00 - 17:00</td>
</tr>
<td>Friday</td>
<td>9:00 - 17:00</td>
</tr>
<td>Saturday</td>
<td>9:00 - 17:00</td>
</tr>
<td>Sunday</td>
<td>Closed</td>

</tr>

</table>
<br>

  <h3>Address</h3>
  <br>
  15 Main Street Derry
  <br></br>
  <div id="map" class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d73218.77405338176!2d-7.381685010460458!3d55.006645438115406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x485fdde434d09363%3A0xbd21fa2ac755f32f!2sLondonderry%2C%20UK!5e0!3m2!1sen!2sie!4v1630681408903!5m2!1sen!2sie" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    
    </div>
  <!-- <script>
    function initMap(){
      var location = {lat: 54.99592, lng:-7.27378 };
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: location
      });
      var marker = new google.maps.Marker({
        position: location,
        map: map
      });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAURzbmrwS8-D1grXlIbXa2TYcP2EEcMn8&callback=initMap"></script> -->
  <br>
  <br>
  Telephone: 0785965698
  <br>
  <br>
  Email Address: brick&mortar@gmail.com
  <br>
</div>
<?php include("includes/footer.html");?>
</div>
</body>
</html>
