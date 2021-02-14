@extends('alojamientos.index')

@section('alojamiento')
 <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="{{route('busqueda')}}"  method="POST" class="tm-search-form tm-section-pad-2">
                                    {{csrf_field()}}
                                    <div class="form-row tm-search-form-row">
                                        
                                        
                                        <div class="form-group tm-form-element tm-form-element-2" >
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>                           
                                            <input type="text" class="searchName form-control tm-select" name="origen"  placeholder="Salida" >
                                        </div>



                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="salida" type="date" class="form-control"  placeholder="Llegada">
                                        </div>



                                         <div class="form-group tm-form-element tm-form-element-2" >
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
                                            <input type="number" class="form-control tm-select" name="adultos"  placeholder="Adultos" >
                                        </div>

                                        


                                    </div>


                                    <div class="form-row tm-search-form-row">
                                        

                                        <div class="form-group tm-form-element tm-form-element-2">      <input type="text" class="searchName form-control tm-select" name="destino"  placeholder="Llegada" name="destino">                                      
                                            <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                        </div>



                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="retorno" type="date" class="form-control"  placeholder="retorno">
                                        </div>



                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Buscar</button>
                                        </div>
                                      </div>
                                      <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                          <p class="tm-margin-b-0">Ingrese todos los campos.</p>
                                          <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Necesitas ayuda?</a>
                                      </div>
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
       
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
  
  @endsection