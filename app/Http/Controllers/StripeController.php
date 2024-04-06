<?php 
 
namespace App\Http\Controllers;
 
use Exception;
use App\Models\Course;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
 
class StripeController extends Controller
{
    public function checkout(Course $cor)
    {
        return view('checkout',compact('cor'));
    }
 
    public function session(Request $request,Course $cor)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'USD',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total,
                    ],
                  'quantity'=>1,
                ],
                 
            ],
            'mode'        => 'payment',
            'success_url' => route('success',$cor),
            'cancel_url'  => route('checkout',$cor),
        ]);
 
        return redirect()->away($session->url);
    }
 
    public function success(Course $cor)
    {
        try {
            $student = Auth::user();
            Reservation::create([
                'user_id' => $student->id,
                'cource_id' => $cor->id,
                'accepted' => true,
            ]);
            $cor->decrement('avalable_seetes');
            $cor->save();
            Mail::send('emails.reservation_confirmed', ['course' =>$cor ,'student'=>$student], function ($message) use ($student) {
                $message->to($student->email)
                        ->subject('Reservation accepted');
            });
            return redirect()->route('cource_details',$cor)->with('success', 'Your reservation completed. Please check your email.');
        } catch (Exception $e) {
           
            return back()->with('error', 'you allredy reserved this coure'.$e);
        }

    }
}