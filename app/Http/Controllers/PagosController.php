<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Reserva;
use App\ReservaVuelo;
use Mail;
use App\Mail\Pago;


class PagosController extends Controller
{

	public function mostrar(Request $request){

        $monto = $request->get('precio');
        $id = $request->get('id'); 

        $params['monto']= $monto;
        $params['id'] = $id;
		return view('pago',$params);
	}
    public function mostrarVuelo(Request $request){

        $monto = $request->get('precio');
        $id = $request->get('id'); 

        $params['monto']= $monto;
        $params['id'] = $id;
        return view('pagovuelo',$params);

    }
    public function pagoVuelos(Request $request)
    {
         
        try {
            Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
        $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->get('precio'),
                'currency' => 'usd'
            ));
        $x=1;
        $id = $request->get('id');
        $app = ReservaVuelo::find($id);
        $app->bandera = 1;
        $app->save();
        $prueba = \Auth::user();
            if ( !empty($prueba) ) {
                    
            
            $reserva = ReservaVuelo::where('iduser', '=',$prueba->id)
                        ->get();
            

            
            $params['reserva']=$reserva;
            
            $data['nombre'] = $app->idaerolineas;
           $data['precio'] = $app->precio_total;
           $data['ticket'] = $app->id;
           $data['fecha_entrada'] = $app->ReservaVuelo->fecha_salida;
           $data['fecha_salida'] = $app->ReservaVuelo->fecha_llegada;
           $data['cliente'] = \Auth::user()->name; 
           $data['mail'] = \Auth::user()->email;


           Mail::send('emails.pago',$data, function($messagge) use($data) {

            $messagge->to($data['mail'],$data['precio'])->subject('Pago');   
        });
            return view('UserAdmin.vuelos',$params);

            }else {
                    
                
            echo 'No ha iniciado sesion';
            }


        return view('UserAdmin.vuelos');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    

	public function pago(Request $request)
    {
         
        try {
            Stripe::setApiKey(config('services.stripe.secret'));
        $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
        $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $request->get('precio'),
                'currency' => 'usd'
            ));
        $x=1;
        $id = $request->get('id');
        $app = Reserva::find($id);
        $app->bandera = 1;
        $app->save();
        $prueba = \Auth::user();
            if ( !empty($prueba) ) {
                    
            
            $reserva = Reserva::where('iduser', '=',$prueba->id)
                        ->get();
            

            
            $params['reserva']=$reserva;

            

           $data['nombre'] = $app->publicados->alojamiento->nombre;
           $data['precio'] = $app->precio_total;
           $data['ticket'] = $app->id;
           $data['fecha_entrada'] = $app->fecha_entrada;
           $data['fecha_salida'] = $app->fecha_salida;
           $data['cliente'] = \Auth::user()->name; 
           $data['mail'] = \Auth::user()->email;


           Mail::send('emails.pago',$data, function($messagge) use($data) {

            $messagge->to($data['mail'],$data['precio'])->subject('Pago');   
        });

   
             
            return view('UserAdmin.reservas',$params);

            }else {
                    
                
            echo 'No ha iniciado sesion';
            }


        return view('UserAdmin.reservas');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }


    public function otro(Request $request){

        $x=1;
        $id = $request->get('id');
        $params['x']=$x;
        $params['id']=$id;
        return $params;
    }

    public function pdf(){

        $pdf =  \PDF::loadView('emails.pdf');
        return $pdf->download();
    }
    
}
