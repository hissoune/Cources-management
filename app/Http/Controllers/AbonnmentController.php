<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\Stripe;
use App\Models\Abonnment;
use App\Models\Abonnment_Teacher;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Illuminate\Support\Facades\Auth;

class AbonnmentController extends Controller
{
    public function Abonnments_show(){
        $Abonnments=Abonnment::all();
        return view('director.Abonnments.index',compact('Abonnments'));
    }

    public function create_abonment(){
        return view('director.Abonnments.create');
    }
   
    public function Abonnment_store(Request $request){
    $request->validate([
        'type' => 'required|in:Free,premiume,vip',
        'number_cources'=>'required|numeric',
           'price'=>'required|numeric',
           'number_days'=>'required|numeric'
        ]);
        try{
        Abonnment::create([
            'type' =>$request->type,
            'number_cources'=>$request->number_cources,
            'price'=>$request->price,
            'number_days'=>$request->number_days,
        ]);
        return redirect()->route('Abonnments_show')->with('success','Abonnment created succesfuly');
    }catch(Exception $e){
        return back()->with('error','somthing went wrong echeck the informations');
    }
        
    }

    public function Edit_abonment(Abonnment $item){
   
       return view('director.Abonnments.Edit',compact('item'));
    }
    public function Abonnment_update(Abonnment $item,Request $request){
        $request->validate([
            'type' => 'required|in:Free,premiume,vip',
            'number_cources'=>'required|numeric',
               'price'=>'required|numeric',
               'number_days'=>'required|numeric'
            ]);

            try{
                $item->update([
                    'type' =>$request->type,
                    'number_cources'=>$request->number_cources,
                    'price'=>$request->price,
                    'number_days'=>$request->number_days,
                ]);
                return redirect()->route('Abonnments_show')->with('success','Abonnment updated succesfuly');
            }catch(Exception $e){
                return back()->with('error','somthing went wrong echeck the informations');
            }
    }

    public function delete_abonnment(Abonnment $item){
        try{
        $item->delete();
        return back()->with('success','Abonnment deleted successfully');
    }catch(Exception $e){
        return back()->with("error','Abonnment can'ty be deleted because there is mumbers");

    }
    }

    public function Abonnments_teacher(){
        $Abonnments=Abonnment::all();
        return view('client.Abonnments',compact('Abonnments'));
    }

    public function checkout_abonnment(Abonnment $Abonnment){
        return view('checkout_Abonnment',compact('Abonnment'));
    }
    public function session_abonnment(Request $request,Abonnment $Abonnment){
        Stripe::setApiKey(config('stripe.sk'));
 
        $productname = $request->get('productname');
        $totalprice = $request->get('total');
        $two0 = "00";
        $total = "$totalprice$two0";
 
        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'USD',
                        'product_data' => [
                            'name' => $productname, // Specify the product name
                        ],
                        'unit_amount' => $total,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
 
        
            'success_url' => route('success_Abonnment',$Abonnment),
            'cancel_url'  => route('checkout',$Abonnment),
        ]);
 
        return redirect()->away($session->url);
    }
    public function success_Abonnment(Abonnment $Abonnment){
        $user=Auth::user();
        if($user->abonnementTeacher)
          {
            $user->abonnementTeacher->delete();
          }
        
        Abonnment_Teacher::create([
             'user_id'=>$user->id,
            'abonnment_id'=>$Abonnment->id,
            'number_cources'=>$Abonnment->number_cources+$user->Coureces->count(),
        ]);
       return redirect()->route('Abonnments_teacher')->with('success','abonnment upgraded succesfully');
    }

    
}
