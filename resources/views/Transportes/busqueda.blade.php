@extends('alojamientos.index')

@section('alojamiento')
            

            <div class="tm-section tm-bg-img" id="tm-section-1">
                <div class="tm-bg-white ie-container-width-fix-2">
                    <div class="container ie-h-align-center-fix">
                        <div class="row">
                            <div class="col-xs-12 ml-auto mr-auto ie-container-width-fix">
                                <form action="{{route('reservarTransporte')}}" method="POST" class="tm-search-form tm-section-pad-2">
                                    {{csrf_field()}}
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2" >
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
    
                                        <select id="city" class="form-control tm-select " name="city">
                                          <option selected>Salida</option>

                                          @foreach($ciudades as $ciudad)
                                          <option value="{{$ciudad['id']}}">
                                            {{$ciudad['descripcion']}}
                                          </option>
                                          @endforeach

                                        </select>
                                        @if ($errors->has('city'))
            <small class="form-text text-danger">{{ $errors->first('city') }}</small>
                                        @endif
                                          </div>

                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-in" type="date" class="form-control" id="input" placeholder="Llegada">
                                            @if ($errors->has('check-in'))
            <small class="form-text text-danger">{{ $errors->first('check-in') }}</small>
                                        @endif
                                        </div>
                                        <div class="form-group tm-form-element tm-form-element-50">
                                            <i class="fa fa-calendar fa-2x tm-form-element-icon"></i>
                                            <input name="check-out" type="date" class="form-control" id="input" placeholder="Salida">
                                                         @if ($errors->has('check-out'))
            <small class="form-text text-danger">{{ $errors->first('check-out') }}</small>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="form-row tm-search-form-row">
                                        <div class="form-group tm-form-element tm-form-element-2" >
                                            <i class="fa fa-map-marker fa-2x tm-form-element-icon"></i>
    
                                        <select id="city" class="form-control tm-select " name="city">
                                          <option selected>Llegada</option>

                                          @foreach($ciudades as $ciudad)
                                          <option value="{{$ciudad['id']}}">
                                            {{$ciudad['descripcion']}}
                                          </option>
                                          @endforeach

                                        </select>
                                        @if ($errors->has('city'))
            <small class="form-text text-danger">{{ $errors->first('city') }}</small>
                                        @endif
                                          </div>
                                     

                            <div class="form-group tm-form-element tm-form-element-2">
                                            <select name="cantidad" class="       form-control tm-select" id="tipo">
                                             <option selected>Cantidad de Pax</option>
                                             <option>1</option>
                                             <option >2</option>


                              

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