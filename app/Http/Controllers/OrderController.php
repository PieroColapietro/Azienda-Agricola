<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Models\Order;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function contatti(){
        return view('contatti');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        return view('order.index',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create(Order $order)
    {
        return view('order.create');
    }

    public function submit(Request $req){

        $user = $req->input('user');
        $message = $req->input('message');
        $email = $req->input('email');
        $number = $req->input('number');

        $contact = compact('user','message','number');
        
        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('contatti'))->with('message', 'Grazie! La tua richiesta è stata inoltrata!');
    }



    public function fruits(Request $req , Order $order){

        
        $order->fruits()->attach($req->fruit);

        return redirect()->back();
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'number'=>$request->number,
            'email'=>$request->email,
        ]);

        return redirect(route('order.index'))->with('status' , 'Ordine effettuato con successo!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $fruits = Fruit::all();
        
        return view('order.show', compact('order' , 'fruits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
