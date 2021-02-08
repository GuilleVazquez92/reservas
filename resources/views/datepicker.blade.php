<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.structure.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-ui.theme.min.css">
    <title>Busqueda de Vuelo</title>
  </head>
  <body>


   <form class="form-inline" action="{{route('busqueda')}}" method="POST">
    {{csrf_field()}}
      <label for="text">Origen: 
      <input type="text" class="searchName" placeholder="traveling from" name="origen">
      </label>

      <label for="text">Destino:  
      <input type="text" class="searchName" placeholder="traveling to" name="destino">
      </label>

      <label for="text">Salida:  
      <input type="date" class="" name="salida">
      </label>

      <label for="text">Retorno:  
      <input type="date" class="" name="retorno">
      </label>

      <label for="text">Adult(s):  
      <input type="number" class="" name="adultos">
      </label>

      
      <button type="submit">Submit</button>
   </form>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    

    <script>
        

         $('.searchName').autocomplete({
            source: function(request, response ){
               $.ajax({
                  url:"{{route('vuelos')}}",
                  type : 'GET',
                   dataType: "json",
                   data:{
                    term: request.term 
                   },

                   success: function (data){
                    //alert(data);
                     response($.map(data, function (item) {
                return {
                    label: item.name+',  ' + item.city  +',  (' + item.iataCode +')',
                    value: item.iataCode
                }
            }));
                      }

               } );
             }
                
         });
      
    </script>
  
   </body>
</html>