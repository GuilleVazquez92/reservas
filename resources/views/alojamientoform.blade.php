

<!DOCTYPE html>
<html lang="en">
<head>

  <style>
    #mapa{
      width: 800px;
      max-width:100%;
      height: 600px;
      max-height: 100vh; 
    }
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa</title>
</head>
<body>

  <div id="mapa">  </div>
   
   <script src="https://maps.google.com/maps/api/js?key=AIzaSyC2QF1gXM89q7vo9JIc5x7x_lXjEgP8xQs"></script> 

   <script >
     
    google.maps.event.addDomListener(window, "load",function(){

     var mapElement = document.getElementById('mapa')


     var map = new google.maps.Map(mapElement,{
      center:{
        lat:-25.3486644,
        lng:-57.6237011
      },
      zoom:15
     })
       
    })
   </script>
    

  
  
</body>
</html>