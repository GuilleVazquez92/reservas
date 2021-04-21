@extends('alojamientos.index')

@section('alojamiento')
           

	<div class="coronavirus-main-funnel-banner bui-alert--info">
<style>
.partner_header_wrapper .sw_loyalty_copy { display: none; }
</style>
<div id="bodyconstraint" class="   ">
<div id="bodyconstraint-inner">

<div data-block-id="header_survey">
</div>

<div data-trans-from="Desde" id="searchresultsTmpl" class="
sr_align_title_icons
">
<div id="basiclayout" class="main-spacing">
<div id="right" class="rlt-right maps-overlay-sr-container" role="main">

<div data-block-id="new_low_av">
</div>
<div data-block-id="heading">
<div class=" sr_header--wrapper  ">
<div class="sr_header--title">
<div class="sr_header " role="heading">
<h1>
Alojamientos en {{$city}}
</h1>

</div>
</div>
</div>
</div>


<div data-block-id="sr_messages">
	  							

</div>

<div id="ajaxsrwrap">
<div data-et-view="NAFLeOeJAETbUBPTVdCTEPMWQIXe:1 "></div>
<div data-component="plank-sorters-bar">

</div>
<div data-block-id="sr_warnings" class="sr_top_warnings_bui_colors">
</div>
@foreach($publicados as $key => $publi)
 @if($publi->alojamiento->idciudad == $ciudad)
@if($publi->habitacion->idtipo == $room)
<div class="hotellist_wrap tracked shorten_property_block" id="search_results_table" data-block-id="hotel_list" data-highlight-card-cta="">


<div class="hotellist sr_double_search ">
<!-- Heading read by screen reader -->
<h2 class="screen_reader_heading">Consulta los resultados de Encarnación</h2>
<div id="hotellist_inner" class="wider_image" role="region" aria-label="Resultados de la búsqueda" data-et-view=" OQLOLOLOMSVSRQbVKKMadMUWe:1 OQLOLOLOVCJVIQNcGZdMbHGQWKHC:2  OLGPNceIWDAOdbIVXVEHXT:1     OLGPNceIWDAOdbIVXVEHXT:4    OLGPNceIWDAOdbIVXVEHXT:6      OLGPNceIWDAOdbIVXVEHINET:1   OLGPNceIWDAOdbIVXVEHINET:4   OLGPNceIWDAOdbIVXVEHINET:5   OLGPNceIWDAOdbIVXVEHINET:8   ">
<div data-et-click="" class="sr_item  sr_item_new sr_item_default sr_property_block  sr_flex_layout         " data-hotelid="1140758" data-class="5" data-score="9,1">

<div class="sr_item_photo sr_card_photo_wrapper add-sr-red-tag" id="hotel_1140758">
<div class="
add-red-tag
add-red-tag--ribbon
all-inclusive-ribbon
js_icon_over_photo
bfast-included-ribbon
" data-et-view=" OLGHeTEFDZSJLZZCYWebFfKcVeRe:1 OLGHeTEFDZSJLZZCYWebFfKcVeRe:5 ">

</div>
  							
 @foreach($fotos as $foto)
							      @if($foto->idalojamiento == $publi->alojamiento->id)
							      @if($foto->orden == 1)

<a class="" target="_blank" rel="noopener" tabindex="-1" focusable="false" aria-hidden="true" data-et-click="">
<img class="hotel_image" src="{{$foto['codigo_imagen']}}" alt="Awa Resort Hotel" data-google-track="Click/sr_item_main_photo/0" width="200" height="200">
<span class="invisible_spoken">Se abre en una ventana nueva</span>
</a>


 @endif
							      @endif
							      @endforeach
</div>
<div class="sr_item_content sr_item_content_slider_wrapper ">
<div class="sr_property_block_main_row">
<div class="sr_item_main_block">
<div class="sr-hotel__title-wrap">
<h3 class="sr-hotel__title  
">
<a class="js-sr-hotel-link hotel_name_link url" href="" target="_blank" rel="noopener">
<span class="sr-hotel__name
" data-et-click="   ">
{{$publi->alojamiento->nombre}} 
</span>
<span class="invisible_spoken">Se abre en una ventana nueva</span>
</a>
</h3>
<span class="sr-hotel__title-badges">
<span class="c-accommodation-classification-rating">
<span class="c-accommodation-classification-rating__badge c-accommodation-classification-rating__badge--stars c-accommodation-classification-rating__badge--with-tooltip" data-et-mouseenter="NAFLeNIJDAUaDBYSdZLOLcZMO:1 NAFLeNIJDAUaDBYSdZLOLcZMO:2" data-component="accommodation-classification-rating" title="">
<span class="bui-rating bui-rating--smaller" role="img" aria-label="5 out of 5">

@for ($i = 0; $i < $publi->alojamiento->categoria; $i++)

<span aria-hidden="true" class="bui-icon bui-rating__item bui-icon--medium" role="presentation">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" focusable="false" aria-hidden="true" role="img">
<path d="M23.555,8.729a1.505,1.505,0,0,0-1.406-.98H16.062a.5.5,0,0,1-.472-.334L13.405,1.222a1.5,1.5,0,0,0-2.81,0l-.005.016L8.41,7.415a.5.5,0,0,1-.471.334H1.85A1.5,1.5,0,0,0,.887,10.4l5.184,4.3a.5.5,0,0,1,.155.543L4.048,21.774a1.5,1.5,0,0,0,2.31,1.684l5.346-3.92a.5.5,0,0,1,.591,0l5.344,3.919a1.5,1.5,0,0,0,2.312-1.683l-2.178-6.535a.5.5,0,0,1,.155-.543l5.194-4.306A1.5,1.5,0,0,0,23.555,8.729Z"></path>
</svg>
</span>
    
@endfor
         
</span>
</span>
</span>

</span>
</div>
<div class="sr_card_address_line">
<a class="bui-link" href="{{url('form')}}" target="_blank" data-map-caption="" rel="noopener">
{{$city}}
<span class="sr_card_address_line__item">
<span class="sr_card_address_line__dot-separator"></span>
Mostrar en el mapa</span>
</a>

</div>

</div>

</div>
<div class="sr_rooms_table_block clearfix sr_card_rooms_container">
<div class="room_details ">
<div class="featuredRooms sr_room_table sr_room_table_flex sr_rt_wider_urgency_msg sr_card_room_info__container 
 sr_rms_tbl_bdr " cellspacing="0" role="presentation">
<div>
<div class="roomrow roomrow_flex entire_row_clickable
" data-link="/hotel/py/awa-resort.es.html?aid=376374&amp;label=esrow-OtlvhU2CXhSVxek50Z_17wS410489931081%3Apl%3Ata%3Ap1%3Ap22.563.000%3Aac%3Aap%3Aneg%3Afi%3Atikwd-65526620%3Alp1011782%3Ali%3Adec%3Adm%3Appccp%3DUmFuZG9tSVYkc2RlIyh9YcUSe6BbHz0Ad_yDShFFSHQ&amp;sid=34ff3f16258a528e0d3cf7d303c8fdbc&amp;all_sr_blocks=114075805_285069832_0_1_0&amp;checkin=2021-03-17&amp;checkout=2021-03-19&amp;dest_id=-910745&amp;dest_type=city&amp;from_beach_non_key_ufi_sr=1&amp;group_adults=1&amp;group_children=0&amp;hapos=1&amp;highlighted_blocks=114075805_285069832_0_1_0&amp;hpos=1&amp;no_rooms=1&amp;req_adults=1&amp;req_children=0&amp;room1=A&amp;sr_order=popularity&amp;sr_pri_blocks=114075805_285069832_0_1_0__12400&amp;srepoch=1616003726&amp;srpvid=954c7e0689bb0162&amp;ucfs=1&amp;from=searchresults;show_room=114075805#RD114075805" data-target="_blank" tabindex="0" data-et-click="">
<div class="roomName roomName_flex --extended unit-info">
<div class="roomNameInner">
<div class="room_link">
<span style="color: #000;" role="link" tabindex="0">
<strong>{{$publi->habitacion->tipoHabitacion->descripcion}} </strong>
&nbsp;&nbsp;
<div class="c-occupancy-icons " style="font-size: 10px; color: #000000">


</div>
</span>
</div>
<span class="room_info">
<div data-et-view="NAFLeOeJAETfJUIcIKHVPTdMZbGXNcXaO:8"></div>
<div class="c-beds-configuration">
{{$publi->habitacion->cant_camas}} cama/as
</div>
</span>
<div class="sr_card_room_policies__container">
<sup class="sr_room_reinforcement">
{{$publi->regimen->tipoRegimen->descripcion}}
</sup>
</div>
	


	 <button type="button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-lg">Más Fotos</button>

	   <div class="modal fade" id="modal-lg" style="position: fixed;">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
           
             
            	
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <div class="card-body">
                <div class="row">
                  <div class="col-sm-6">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-6">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                 
               </div>
               
            </div>
            </div>
        
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
							
							
					
    
      
</div>
</div>
<div class="roomPrice roomPrice_flex  sr_discount " colspan="2">
<div class="prco-wrapper bui-price-display prco-sr-default-assembly-wrapper prc-d-sr-wrapper">
<div class="prco-ltr-right-align-helper">
<div class="bui-price-display__label prco-inline-block-maker-helper">{{$fecha}} noches, {{$room}} adulto/s</div>
</div>
<div class="prco-ltr-right-align-helper">
	  <?php
							      $precio = 0;
							      $precio = $publi->regimen->precio + $publi->habitacion->precio;
							      $total = $precio * $fecha;
							      
							     
							      ?>
<div class="prco-inline-block-maker-helper">
<div class="bui-price-display__value prco-inline-block-maker-helper " aria-hidden="true" data-et-mouseenter="
customGoal:cCcCcCDUfcXIFbcDcbNXGDJae:1
goal:desktop_sr_hover_over_price
">
USD&nbsp; {{$total}}
</div>
<span class="bui-u-sr-only">
Precio
PYG&nbsp;817.967
</span>
</div>
</div>
<div class="prco-ltr-right-align-helper">
<div class="prd-taxes-and-fees-under-price prco-inline-block-maker-helper blockuid-" data-cur-stage="2" data-excl-charges-raw="40898.3377010592">
USD{{$precio}} por noche
</div>
</div>
</div>
<div>
<div>
<form action="{{route('reservasLogin')}}" method="post">
        							{{csrf_field()}}
<input type="hidden" value="{{$total}}" name="precio">
							      	 <input type="hidden" value="{{$publi->id}}" name="id">
							      	 <input type="hidden" value="{{$dbDesde}}" name="dbDesde">
							      	 <input type="hidden" value="{{$dbHasta}}" name="dbHasta">
							      	



<button type="input" class=" txp-cta bui-button bui-button--primary sr_cta_button  ">RESERVAR</button>

</form>	

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
  @endif
@endif
 @endforeach


<div class="clearfix" data-et-view="OQLOLOLOAXZQMMTfPESHaFYGZFWe:1 HZUaQWNOeBDKVdcSQTCRGWe:1 "></div>
<div class="results-meta  sr_results_footer__container" id="results_prev_next">

</div>



</div>


</div> <!-- /ajaxsrwrap -->




</div>
</div>
</div>
</div>

	<form action="{{route('filtros')}}" method="post" >

        							{{csrf_field()}}
					<input type="hidden" value="{{$ciudad}}" name="ciudad">
					 <input type="hidden" value="{{$dbDesde}}" name="dbDesde">
					<input type="hidden" value="{{$dbHasta}}" name="dbHasta">
					 <input type="hidden" value="{{$room}}" name="room">
           <input type="hidden" value="{{$city}}" name="city">

<button type="input" class=" txp-cta bui-button bui-button--primary sr_cta_button  ">APLICAR</button>


<div id="left" class="rlt-left " role="complementary" >
<div id="left_col_wrapper" style="z-index: 101;">

<div class="sb-searchbox__spacing"></div>

<div id="searchboxInc" class="searchbox_consistent_errors"><form id="filterbox_wrap" class="
barrel_o_filters
js-barrel_o_filters
sr_filters__container
" role="region" aria-label="Filtra tus resultados">


<div id="" style="padding:0;">
<div class="filterbox_options_content" data-block-id="">
<div class="filter_by_wrapper">

<h3 class="filter_by" tabindex="-1">
Filtrar por:
</h3>
</div>
<div id="filter_price_tracking" class="filterbox_tracking"></div>


<div class="
vpm_d_sr_filter_suggestion
filterbox
" data-id="filter-suggestions" id="filter_filter-suggestions">
<div class="filtercategory icon_filtercategory_container">

</div>
<div class="filteroptions" data-component="fl/exposed" data-fl-exposed-id="VaRWSHWKNKfVdeWCTKIaHWSLWSHWSLWVKCTceTVfCIVQVJKVdeVaTaGfIaJMUaWIJMeJfXJVGaJRWSRT" data-fl-exposed-attr="data-id">
<div class="
filtercategory
 icon_filtercategory_container">
<h3 class="filtercategory-title">
Regimen
</h3>
<p></p>
</div>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="desayuno" value="1">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
Desayuno incluido
</span>

</div></label>
<p></p>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="media" value="2">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
Media Pensión
</span>

</div></label>
<p></p>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="all" value="3">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
All Inclusive
</span>

</div></label>
<p></p>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="sin" value="0">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
Sin regimen
</span>

</div></label>
<p></p>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="a" value="4">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
Desayuno Americano
</span>

</div></label>
<p></p>


</div>
</div>
<div style="display:none;" data-component="fl/stage" data-fl-stage-hash="OQPSJUaBNOXZXOTaSUONPBKUdTC" data-fl-stage-value="5"></div>
<div id="filter_health_and_hygiene_tracking" class="filterbox_tracking"></div>

<div id="filter_class_tracking" class="filterbox_tracking"></div>
<div class="
filterbox
" id="filter_class" data-id="filter_class" data-et-view="      ">
<div class="
filtercategory
 icon_filtercategory_container">
<h3 class="filtercategory-title">
Estrellas
</h3>
<p></p>
</div>
<div class="filteroptions" role="group">
<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="1star" value="1">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
1 estrella
</span>

</div></label>
<p></p>
<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="2star" value="2">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
2 estrellas
</span>

</div></label>
<p></p>

<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="3star" value="3">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
3 estrellas
</span>

</div></label>
<p></p>
<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="4star"value="4">
<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
4 estrellas
</span>

</div></label>
<p></p>
<label class="bui-checkbox">
<input class="bui-checkbox__input js-bui-checkbox__input" type="checkbox" name="5star" value="5">

<div class="bui-checkbox__label filter_item css-checkbox ">
<span class="filter_label">
5 estrellas
</span>
</div></label>
<p></p>

</div>
</div>




</div>
</form>	
</div>

</div></div></div></div>




<div class="clear"></div>
</div> <!-- /basiclayout -->
<div style="position: absolute;" id="calendar" class="calendar"></div>
<div data-et-view="OLGHXDbPfTWEcbYTHT:1"></div>
</div>

<svg class="bk-icon -streamline-arrow_nav_left" height="24" style="display:none;" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M14.55 18a.74.74 0 0 1-.53-.22l-5-5A1.08 1.08 0 0 1 8.7 12a1.1 1.1 0 0 1 .3-.78l5-5a.75.75 0 0 1 1.06 0 .74.74 0 0 1 0 1.06L10.36 12l4.72 4.72a.74.74 0 0 1 0 1.06.73.73 0 0 1-.53.22zm-4.47-5.72zm0-.57z"></path></svg>
<svg class="bk-icon -streamline-arrow_nav_right" height="24" style="display:none;" width="24" viewBox="0 0 24 24" role="presentation" aria-hidden="true" focusable="false"><path d="M9.45 6c.2 0 .39.078.53.22l5 5c.208.206.323.487.32.78a1.1 1.1 0 0 1-.32.78l-5 5a.75.75 0 0 1-1.06 0 .74.74 0 0 1 0-1.06L13.64 12 8.92 7.28a.74.74 0 0 1 0-1.06.73.73 0 0 1 .53-.22zm4.47 5.72zm0 .57z"></path></svg>
</div>
</div>



@endsection            


       