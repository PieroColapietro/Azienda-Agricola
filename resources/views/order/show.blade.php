<x-layout>



    <div class="container">
        <div class="row mb-5">
            <div class="col-12 col-md-4 offset-md-4 mt-5">
                <div class="row mt-5">
                    <div class="card card-middle">
                        <div class="card-body">
                            <h5 class="card-title">Riepilogo del tuo ordine</h5>
                            <p class="card-text">Nome: {{ $order->name }}</p>
                            <p class="card-text">Indirizzo: {{ $order->address }}</p>
                            <p class="card-text">Email: {{ $order->email }}</p>
                            <p class="card-text">Numero: {{ $order->number }}</p>
                            <p class="card-text">Creato da: {{ $order->user->name }}</p>
                            <form method="POST" action="{{ route('order.fruits', compact('order')) }}">
                                @csrf
                                <select name="fruit">
                                    @foreach ($fruits as $fruit)
            
                                        <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
                                    @endforeach
                                </select> <br>
                                <button type="submit" class="btn btn-custom mt-2 mb-2">Aggiungi frutto</button>
                            </form>

                            
                            <ul>
                                @foreach ($order->fruits as $fruit)
                                    <li>Il frutto scelto: {{ $fruit->name }}</li>
            
                                @endforeach
                                
                            </ul>
                        
                            <p class="card-text">Creato il: {{ $order->created_at->format('d-m-Y / H:i:s') }}</p>
                            <p class="card-text">Ultima modifica: {{ $order->updated_at->format('d-m-Y / H:i:s') }}
                            </p>
                            <button class="btn btn-custom"><a class="text-light" style="text-decoration:none"
                                    href="{{ route('order.index') }}">Torna ai tuoi ordini</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
