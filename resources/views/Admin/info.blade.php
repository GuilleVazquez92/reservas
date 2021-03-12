 
@extends('Admin.index')

@section('contenido')

 <section class="content">
      <div class="container-fluid">
          <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$p}}</h3>

                <p>Alojamientos</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$c}}</h3>
                <p>Habitaciones</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$re}}</h3>

                <p>Regimenes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
        
          <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Reservas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Cliente</th>
                      <th>Alojamiento</th>
                      <th>Entrada</th>
                      <th>Salida</th>
                      <th>Estado</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                    @foreach($reserva as $key => $rese)   
                    <td> {{$rese->user->name}} </td>
                    <td> {{$rese->publicados->alojamiento->nombre}}</td>
                    <td> {{parsearFechaDeVuelo($rese->fecha_entrada)}}</td>
                    <td> {{parsearFechaDeVuelo($rese->fecha_salida)}}</td>  
                          
                    @if($rese->bandera == 0 ||$rese->bandera == 4)    
                    <th> <span class="badge badge-warning">Pendiente</span></th>
                    @elseif($rese->bandera == 1)
                    <th> <span class="badge badge-success">Pagado</span></th>
                    @elseif($rese->bandera == 3)
                    <th> <span class="badge badge-danger">Cancelado</span></th>

                    @endif
                    </form>   
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                   @endforeach
                      
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
               
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- ./col -->
        </div>

</div>
            <!-- /.card -->
          </section>

          @endsection