  
@extends('layouts.app')



@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

 
  <div class="container-fluid main-container">
    <div class="col-md-2 sidebar">
      <div class="row">
        <!-- uncomment code for absolute positioning tweek see top comment in css -->
        <div class="absolute-wrapper"> </div>
        <!-- Menu -->
        <div class="side-menu">
          <nav class="navbar navbar-default" role="navigation">
            <!-- Main Menu -->
            <div class="side-menu-container">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#" class="boton-uno"><span class="glyphicon glyphicon-dashboard"></span>Informacion General</a></li>
                <li>

                  <a href="#" class="boton-dos"><span class="glyphicon glyphicon-plane "></span>Habitaciones</a></li>
                <li><a href="#" class="boton-tres"><span class="glyphicon glyphicon-cloud"></span> Regimenes</a></li>

  

                <li><a href="#" class="boton-cuatro" ><span class="glyphicon glyphicon-plane"></span> Fotos</a></li>

                <li><a href="#" class="boton-cinco"><span class="glyphicon glyphicon-signal"></span>Condiciones</a></li>

                <li><a href="#" class="boton-seis"><span class="glyphicon glyphicon-signal"></span>Pagos</a></li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>      </div>
      <div class="col-md-10 content">
      
           <div class="row contenido">
                <div class="col-md-12 contenido-uno">
                     <div class="panel panel-default">
          <div class="panel-heading">
            BIENVENIDO  
          </div>
          <div class="panel-body">
              Buenas, te damos la Bienvenida a Tuviaje.com, el lugar perfecto para compartir tu alojamiento con el resto del mundo. 
          </div>
        </div>
                </div>
                <div class="col-md-12 contenido-dos">
                    
            <h3 align="center">Cargar Habitaciones</h3>
                    <form>
    <div class="form-group">
     <div class="form-group">
    <label for="exampleFormControlSelect1">Tipo de Habitaciones</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlSelect1">Cantidad de camas </label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <label for="exampleFormControlInput1">Precio</label>
    <input type="int" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <button type="button" class="btn btn-primary btn-lg">Cargar Habitacion</button>
  
</form>

<h3 align="center">Habitaciones Cargadas</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Tipo de Habitacion</th>
      <th scope="col">Cantidad de Camas </th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


                </div>
                <div class="col-md-12 contenido-tres">
                       <h3 align="center">Cargar Regimenes</h3>
                    <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Descripcion</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    
  <label for="exampleFormControlInput1">Precio</label>
    <input type="int" class="form-control" id="exampleFormControlInput1" placeholder="">
  </div>
  <button type="button" class="btn btn-primary btn-lg">Cargar Regimen</button>
  
</form>

<h3 align="center">Habitaciones Cargadas</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Tipo de Regimen</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      
    </tr>
  </tbody>
</table>
                </div>
                    <div class="col-md-12 contenido-cuatro">
        
<h3 align="center">Imagenes</h3>
        <form>
  <div class="form-group">
    <label for="exampleFormControlFile1">Seleccione Imagenes de SU ALOJAMIENTO</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td colspan="2"></td>
      <td></td>
    </tr>
  </tbody>
</table>
                </div>
                 <div class="col-md-12 contenido-cinco">
        <p>div 5</p>
                </div>
                 <div class="col-md-12 contenido-seis">
        <p>div 6</p>
                </div>
            </div>
      </div>
      <footer class="pull-left footer">
        <p class="col-md-12">
          <hr class="divider">
          Copyright &COPY; 2020 <a href="">GUILLERMO VAZQUEZ</a>
        </p>
      </footer>
    </div>
    
@endsection
    <style>
      h1.page-header {
        margin-top: -5px;
      }

      .sidebar {
        padding-left: 0;
      }

      .main-container { 
        background: #FFF;
        padding-top: 15px;
        margin-top: -20px;
      }

      .footer {
        width: 100%;
      }  

      :focus {
        outline: none;
      }

      .side-menu {
        position: relative;
        width: 100%;
        height: 100%;
        background-color: #f8f8f8;
        border-right: 1px solid #e7e7e7;
      }
      .side-menu .navbar {
        border: none;
      }
      .side-menu .navbar-header {
        width: 100%;
        border-bottom: 1px solid #e7e7e7;
      }
      .side-menu .navbar-nav .active a {
        background-color: transparent;
        margin-right: -1px;
        border-right: 5px solid #e7e7e7;
      }
      .side-menu .navbar-nav li {
        display: block;
        width: 100%;
        border-bottom: 1px solid #e7e7e7;
      }
      .side-menu .navbar-nav li a {
        padding: 15px;
      }
      .side-menu .navbar-nav li a .glyphicon {
        padding-right: 10px;
      }
      .side-menu #dropdown {
        border: 0;
        margin-bottom: 0;
        border-radius: 0;
        background-color: transparent;
        box-shadow: none;
      }
      .side-menu #dropdown .caret {
        float: right;
        margin: 9px 5px 0;
      }
      .side-menu #dropdown .indicator {
        float: right;
      }
      .side-menu #dropdown > a {
        border-bottom: 1px solid #e7e7e7;
      }
      .side-menu #dropdown .panel-body {
        padding: 0;
        background-color: #f3f3f3;
      }
      .side-menu #dropdown .panel-body .navbar-nav {
        width: 100%;
      }
      .side-menu #dropdown .panel-body .navbar-nav li {
        padding-left: 15px;
        border-bottom: 1px solid #e7e7e7;
      }
      .side-menu #dropdown .panel-body .navbar-nav li:last-child {
        border-bottom: none;
      }
      .side-menu #dropdown .panel-body .panel > a {
        margin-left: -20px;
        padding-left: 35px;
      }
      .side-menu #dropdown .panel-body .panel-body {
        margin-left: -15px;
      }
      .side-menu #dropdown .panel-body .panel-body li {
        padding-left: 30px;
      }
      .side-menu #dropdown .panel-body .panel-body li:last-child {
        border-bottom: 1px solid #e7e7e7;
      }
      .side-menu #search-trigger {
        background-color: #f3f3f3;
        border: 0;
        border-radius: 0;
        position: absolute;
        top: 0;
        right: 0;
        padding: 15px 18px;
      }
      .side-menu .brand-name-wrapper {
        min-height: 50px;
      }
      .side-menu .brand-name-wrapper .navbar-brand {
        display: block;
      }
      .side-menu #search {
        position: relative;
        z-index: 1000;
      }
      .side-menu #search .panel-body {
        padding: 0;
      }
      .side-menu #search .panel-body .navbar-form {
        padding: 0;
        padding-right: 50px;
        width: 100%;
        margin: 0;
        position: relative;
        border-top: 1px solid #e7e7e7;
      }
      .side-menu #search .panel-body .navbar-form .form-group {
        width: 100%;
        position: relative;
      }
      .side-menu #search .panel-body .navbar-form input {
        border: 0;
        border-radius: 0;
        box-shadow: none;
        width: 100%;
        height: 50px;
      }
      .side-menu #search .panel-body .navbar-form .btn {
        position: absolute;
        right: 0;
        top: 0;
        border: 0;
        border-radius: 0;
        background-color: #f3f3f3;
        padding: 15px 18px;
      }
      /* Main body section */
      .side-body {
        margin-left: 310px;
      }
      /* small screen */
      @media (max-width: 768px) {
        .side-menu {
          position: relative;
          width: 100%;
          height: 0;
          border-right: 0;
        }

        .side-menu .navbar {
          z-index: 999;
          position: relative;
          height: 0;
          min-height: 0;
          background-color:none !important;
          border-color: none !important;
        }
        .side-menu .brand-name-wrapper .navbar-brand {
          display: inline-block;
        }
        /* Slide in animation */
        @-moz-keyframes slidein {
          0% {
            left: -300px;
          }
          100% {
            left: 10px;
          }
        }
        @-webkit-keyframes slidein {
          0% {
            left: -300px;
          }
          100% {
            left: 10px;
          }
        }
        @keyframes slidein {
          0% {
            left: -300px;
          }
          100% {
            left: 10px;
          }
        }
        @-moz-keyframes slideout {
          0% {
            left: 0;
          }
          100% {
            left: -300px;
          }
        }
        @-webkit-keyframes slideout {
          0% {
            left: 0;
          }
          100% {
            left: -300px;
          }
        }
        @keyframes slideout {
          0% {
            left: 0;
          }
          100% {
            left: -300px;
          }
        }
        /* Slide side menu*/
        /* Add .absolute-wrapper.slide-in for scrollable menu -> see top comment */
        .side-menu-container > .navbar-nav.slide-in {
          -moz-animation: slidein 300ms forwards;
          -o-animation: slidein 300ms forwards;
          -webkit-animation: slidein 300ms forwards;
          animation: slidein 300ms forwards;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
        }
        .side-menu-container > .navbar-nav {
          /* Add position:absolute for scrollable menu -> see top comment */
          position: fixed;
          left: -300px;
          width: 300px;
          top: 43px;
          height: 100%;
          border-right: 1px solid #e7e7e7;
          background-color: #f8f8f8;
          overflow: auto;
          -moz-animation: slideout 300ms forwards;
          -o-animation: slideout 300ms forwards;
          -webkit-animation: slideout 300ms forwards;
          animation: slideout 300ms forwards;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
        }
        @-moz-keyframes bodyslidein {
          0% {
            left: 0;
          }
          100% {
            left: 300px;
          }
        }
        @-webkit-keyframes bodyslidein {
          0% {
            left: 0;
          }
          100% {
            left: 300px;
          }
        }
        @keyframes bodyslidein {
          0% {
            left: 0;
          }
          100% {
            left: 300px;
          }
        }
        @-moz-keyframes bodyslideout {
          0% {
            left: 300px;
          }
          100% {
            left: 0;
          }
        }
        @-webkit-keyframes bodyslideout {
          0% {
            left: 300px;
          }
          100% {
            left: 0;
          }
        }
        @keyframes bodyslideout {
          0% {
            left: 300px;
          }
          100% {
            left: 0;
          }
        }
        /* Slide side body*/
        .side-body {
          margin-left: 5px;
          margin-top: 70px;
          position: relative;
          -moz-animation: bodyslideout 300ms forwards;
          -o-animation: bodyslideout 300ms forwards;
          -webkit-animation: bodyslideout 300ms forwards;
          animation: bodyslideout 300ms forwards;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
        }
        .body-slide-in {
          -moz-animation: bodyslidein 300ms forwards;
          -o-animation: bodyslidein 300ms forwards;
          -webkit-animation: bodyslidein 300ms forwards;
          animation: bodyslidein 300ms forwards;
          -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
        }
        /* Hamburger */
        .navbar-toggle-sidebar {
          border: 0;
          float: left;
          padding: 18px;
          margin: 0;
          border-radius: 0;
          background-color: #f3f3f3;
        }
        /* Search */
        #search .panel-body .navbar-form {
          border-bottom: 0;
        }
        #search .panel-body .navbar-form .form-group {
          margin: 0;
        }
        .side-menu .navbar-header {
          /* this is probably redundant */
          position: fixed;
          z-index: 3;
          background-color: #f8f8f8;
        }
        /* Dropdown tweek */
        #dropdown .panel-body .navbar-nav {
          margin: 0;
        }
        
      }

    </style>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
      $(function () {
        $('.navbar-toggle-sidebar').click(function () {
          $('.navbar-nav').toggleClass('slide-in');
          $('.side-body').toggleClass('body-slide-in');
          $('#search').removeClass('in').addClass('collapse').slideUp(200);
        });

        $('#search-trigger').click(function () {
          $('.navbar-nav').removeClass('slide-in');
          $('.side-body').removeClass('body-slide-in');
          $('.search-input').focus();
        });
      });
    </script>
        <script>
        $(document).ready(function(){
            $('.contenido-dos').hide();
            $('.contenido-tres').hide();
            $('.contenido-cuatro').hide();
            $('.contenido-cinco').hide();
            $('.contenido-seis').hide();
            
            $('.boton-dos').click(function(){
                $('.contenido-uno').fadeOut();
                $('.contenido-dos').fadeIn();
                $('.contenido-tres').fadeOut();
                $('.contenido-cuatro').fadeOut();
                $('.contenido-cinco').fadeOut();
                $('.contenido-seis').fadeOut();
                $('.boton-dos').addClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
                $('.boton-cuatro').removeClass('boton-activo');
                $('.boton-cinco').removeClass('boton-activo');
                $('.boton-seis').removeClass('boton-activo');
            })
            
            $('.boton-tres').click(function(){
                $('.contenido-uno').fadeOut();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeIn();
                $('.contenido-cuatro').fadeOut();
                $('.contenido-cinco').fadeOut();
                $('.contenido-seis').fadeOut();
                $('.boton-tres').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
                $('.boton-cuatro').removeClass('boton-activo');
                $('.boton-cinco').removeClass('boton-activo');
                $('.boton-seis').removeClass('boton-activo');
            })
            
            $('.boton-uno').click(function(){
                $('.contenido-uno').fadeIn();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeOut();
                $('.contenido-cuatro').fadeOut();
                $('.contenido-cinco').fadeOut();
                $('.contenido-seis').fadeOut();
                $('.boton-uno').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-cuatro').removeClass('boton-activo');
                $('.boton-cinco').removeClass('boton-activo');
                $('.boton-seis').removeClass('boton-activo');
            })

             $('.boton-cuatro').click(function(){
                $('.contenido-cuatro').fadeIn();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeOut();
                $('.contenido-uno').fadeOut();
                $('.contenido-cinco').fadeOut();
                $('.contenido-seis').fadeOut();
                $('.boton-cuatro').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
                $('.boton-cinco').removeClass('boton-activo');
                $('.boton-seis').removeClass('boton-activo');

            })
              $('.boton-cinco').click(function(){
                $('.contenido-cinco').fadeIn();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeOut();
                $('.contenido-uno').fadeOut();
                $('.contenido-cuatro').fadeOut();
                $('.contenido-seis').fadeOut();
                $('.boton-cinco').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
                $('.boton-cuatro').removeClass('boton-activo');
                $('.boton-seis').removeClass('boton-activo');

            })
               $('.boton-seis').click(function(){
                $('.contenido-seis').fadeIn();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeOut();
                $('.contenido-uno').fadeOut();
                $('.contenido-cuatro').fadeOut();
                $('.contenido-cinco').fadeOut();
                $('.boton-seis').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
                $('.boton-cuatro').removeClass('boton-activo');
                $('.boton-cinco').removeClass('boton-activo');

            })
        })
    </script>