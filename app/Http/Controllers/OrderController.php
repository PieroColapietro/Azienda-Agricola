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
        $this->validate(
            $request,
            ['name' => 'required|min:3|max:20',
            'address' => 'required|min:3|max:50',
            'number' => 'required|min:3|max:20',
            'email' => 'required|min:3|max:50'],

            ['name.required' => 'Inserisci un nome (obbligatorio)',
            'name.min' => 'Il nome deve avere almeno 3 caratteri (obbligatorio)',
            'name.max' => 'Il nome deve avere massimo 20 caratteri (obbligatorio)',
            
            'address.required' => 'Inserisci un indirizzo (obbligatorio)',
            'address.min' => 'Il tuo indirizzo deve avere almeno 3 caratteri (obbligatorio)',
            'address.max' => 'Il tuo indirizzo deve avere massimo 50 caratteri (obbligatorio)',
            
            'number.required' => 'Inserisci un numero di telefono (obbligatorio)',
            'number.min' => 'Il tuo numero deve avere almeno 3 caratteri (obbligatorio)',
            'number.max' => 'Il tuo numero deve avere massimo 20 caratteri (obbligatorio)',
            
            'email.required' => 'Inserisci una email valida (obbligatorio)',
            'email.min' => 'La tua email deve avere almeno 3 caratteri',
            'email.max' => 'La tua email deve avere massimo 50 caratteri'],
        );

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

        return view('order.edit',compact('order'));
    }
    
    public function location(){
        return view('location');
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
        $order->name = $request->name;
        $order->address = $request->address;
        $order->email = $request->email;
        $order->number = $request->number;

        $order->save();
        return redirect(route('order.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    { 
        $order->delete();

        return redirect(route('order.index'));
    }
}
