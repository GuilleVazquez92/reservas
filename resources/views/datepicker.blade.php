
 
<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
<script src = "https://code.jquery.com/jquery-1.12.4.js"> </script> 
<script src = "https://code.jquery.com/ui/1.12.1/jquery-ui.js"> </script> 
<script type="text/javascript">
$ (function () { 
         $ ('. searchName'). autocomplete ({ 
            source: function (req, res) { 
               $ .ajax ({ 
                  url: "airportSearch /", 
                   dataType: "json", 
                   tipo: "GET", 
                   data: req, 
                   success: function (data) { 
                     res ($. map (data, function (el) { 
                        return { 
                          label: el.address.cityName + ('+ el.iataCode +'), 
                          value: el.iataCode 
                        } 
                     })); 
                   }, 
                   error:función (err) {
                     console.log (err.status); 
                   } 
               }); 
            }          
         }); 
       });
</script>
                <script type="text/javascript">
               app.get('/airportSearch/', function(req,res,next){ 
                amadeus.referenceData.locations.get({ 
                  keyword: req.query.term, 
                  subType: 'AIRPORT,CITY' 
                }).then(function(response){ 
                  res.json(response.data); 
                  console.log(response.data.iataCode); 
                }).catch(function(error){ 
                  console.log("error"); 
                  console.log(error.response); 
                }); 
                }); 
                </script>
                    <script type="text/javascript">
                        success: function (data){ 
            res($.map(data, function(el){ 
                return { 
                  label: el.address.cityName + (' + el.iataCode +'), 
                  value: el.iataCode 
                 } 
                 }));                        
        },  
        error: function(err){ 
                  console.log(err.status); 
                 } 
                 </script>
</body>
</html>