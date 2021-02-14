<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class PagosController extends Controller
{

	public function mostrar(Request $request){

        $monto = $request->get('precio');

        $params['monto']= $monto;
		return view('pago',$params);
	}
    public function otro(Request $request){

        $precio= $request->get('precio');
        dd($precio);
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
        return 'Cargo exitoso!';
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }
    
}
