@extends('alojamientos.index')

@section('alojamiento')
            

            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="{{route('reservarAlojamiento')}}" method="POST" class="tm-search-form tm-section-pad-2">
                                    {{csrf_field()}}
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2" >
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
    
                                        <select id="city" class="form-control tm-select " name="city">
                                          <option selected>Ciudades</option>

                                          @foreach($ciudades as $ciudad)
                                          <option value="{{$ciudad['id']}}">
                                            {{$ciudad['descripcion']}}
                                          </option>
                                          @endforeach

                                        </select>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-in" type="date" class="form-control" id="input" placeholder="Llegada">
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-out" type="date" class="form-control" id="input" placeholder="Salida">
                                        </div>
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="adult" class="form-control tm-select" id="adultos">
                                                <option value="">Adultos</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-2x fa-user tm-form-element-icon"></i>
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-2">                                            
                                            <select name="children" class="form-control tm-select" id="nino">
                                                <option value="">Niños</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                            <i class="fa fa-user tm-form-element-icon tm-form-element-icon-small"></i>
                                        </div>


                            <div class="form-group tm-form-element tm-form-element-2">
                                            <select name="room" class="       form-control tm-select" id="tipo">
                                             <option selected>habitacion</option>

                                         @foreach($tipo as $tip)
                            <option value="{{$tip -> id}}">
                                        {{$tip['descripcion']}}
                            </option>
                                         @endforeach

                          </select>
                                            </select>
                                            <i class="fa fa-2x fa-bed tm-form-element-icon"></i>
                                        </div>




                                        <div class="form-group tm-form-element tm-form-element-2">
                                            <button type="submit" class="btn btn-primary tm-btn-search">Buscar</button>
                                        </div>
                                      </div>
                                      <div class="form-row clearfix pl-2 pr-2 tm-fx-col-xs">
                                          <p class="tm-margin-b-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                          <a href="#" class="ie-10-ml-auto ml-auto mt-1 tm-font-semibold tm-color-primary">Necesitas ayuda?</a>
                                      </div>
                                </form>
                            </div>                        
                        </div>      
                    </div>
                </div>                  
            </div>
            
         
            
            
         @endsection

