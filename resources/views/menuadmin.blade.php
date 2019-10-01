  
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

                  <a href="#" class="boton-dos"><span class="glyphicon glyphicon-plane "></span>Distribucion y Precio</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> Instalacion y Servicio</a></li>

  

                <li><a href="#" class="boton-tres"><span class="glyphicon glyphicon-signal"></span> Fotos</a></li>

                <li><a href="#" class="boton-tres"><span class="glyphicon glyphicon-signal"></span>Condiciones</a></li>

                <li><a href="#" class="boton-tres"><span class="glyphicon glyphicon-signal"></span>Pagos</a></li>

              </ul>
            </div><!-- /.navbar-collapse -->
          </nav>
        </div>
      </div>      </div>
      <div class="col-md-10 content">
        <div class="panel panel-default">
          <div class="panel-heading">
            Dashboard
          </div>
          <div class="panel-body">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </div>
        </div>
           <div class="row contenido">
                <div class="col-md-12 contenido-uno">
                    <p>Primer div</p>
                </div>
                <div class="col-md-12 contenido-dos">
                    <p>Segundo div</p>
                </div>
                <div class="col-md-12 contenido-tres">
                    <p>Tercer div</p>
                </div>
            </div>
      </div>
      <footer class="pull-left footer">
        <p class="col-md-12">
          <hr class="divider">
          Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
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
            
            $('.boton-dos').click(function(){
                $('.contenido-uno').fadeOut();
                $('.contenido-dos').fadeIn();
                $('.contenido-tres').fadeOut();
                $('.boton-dos').addClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
            })
            
            $('.boton-tres').click(function(){
                $('.contenido-uno').fadeOut();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeIn();
                $('.boton-tres').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-uno').removeClass('boton-activo');
            })
            
            $('.boton-uno').click(function(){
                $('.contenido-uno').fadeIn();
                $('.contenido-dos').fadeOut();
                $('.contenido-tres').fadeOut();
                $('.boton-uno').addClass('boton-activo');
                $('.boton-dos').removeClass('boton-activo');
                $('.boton-tres').removeClass('boton-activo');
            })
            
        })
    </script>