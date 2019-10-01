<html>
<head>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb titulo">
            <li class="breadcrumb-item active" aria-current="page">TuViaje.com</li>
        </ol>
    </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="col-md-12 blog text-center">
        <select name="" id=""></select>
        <div class="container">
            <div class="row" align="left" >
                
                <div id="clickeable" onclick="location.href='http://reservas.local/alojamientos'" class="row col-md-5  img">
                    $tipo_alojamiento as $taloja
                    <option value=""{{$tipo_aloja['1']}}></option>
                    <div class="col-md-12"> 
                        <h3>Hotel</h3>
                    </div>
                    <div class="col-md-12">
                        
                        <p>Otorgar servicio de alojamiento a las personas y que permite a los visitantes sus desplazamientos,proveen a los huéspedes de servicios adicionales como restaurantes, piscinas y guarderías. </p>
                    </div>

                </div>
                <div class="col-md-1">
                </div>

                <div class=" row col-md-5  img">
                 <div class="col-md-12"> 
                    <h3>Hostal</h3>
                </div>
                <div class="col-md-12">
                    <p>Establecimiento privado o compartido con o sin servicios extras.</p>
                </div>
            </div>

        </div>
        <div class="col-md-1">

        </div>
        <div class="row" align="left" >
            <div class="row col-md-5  img">
             <div class="col-md-12"> 
                <h3>Apartamentos</h3>
            </div>
            <div class="col-md-12">
                <p>Unidad de vivienda que comprende una o más habitaciones diseñadas para proporcionar instalaciones completas para un individuo o una pequeña familia</p>
            </div>
        </div>
        <div class="col-md-1">

        </div>
        <div class=" row col-md-5 img">
         <div class="col-md-12"> 
            <h3>Otros</h3>
        </div>
        <div class="col-md-12">
            <p>Cargar un tipo especial de Alojamiento</p>
        </div>
    </div>

</div>
</div>

</div>

<style>

    .img {

        margin-bottom: 30px !important;
        margin: 0 auto;
        -webkit-transition: transform.1s;
        transition: transform.1s;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-line-pack: center;
        align-content: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        border: 2px solid lightblue;
    }


    .img:hover{
        cursor: pointer;
        -webkit-transform: scale(1.1);
        transform: scale(1.1)
    }

    .titulo{
        background-color:lightblue;

    }
    
</style>
</body>
</html>
