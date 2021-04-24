<x-layout>



    <div class="container">
        <div class="row mb-5">
            @foreach ($orders as $order)
                <div class="col-12 col-md-4 offset-md-4 mt-5">
                    <div class="row mt-5">
                        <div class="card card-middle">
                            <div class="card-body">
                                <h5 class="card-title">Riepilogo del tuo ordine</h5>
                                <p class="card-text">Nome: {{ $order->name }}</p>
                                <p class="card-text">Indirizzo: {{ $order->address }}</p>
                                <p class="card-text">Email: {{ $order->email }}</p>
                                <p class="card-text">Numero: {{ $order->email }}</p>
                                <ul>
                                    @foreach ($order->fruits as $fruit)
                                        <li>{{ $fruit->name }}</li>

                                    @endforeach
                                </ul>
                                <p class="card-text">Creato il: {{ $order->created_at->format('d-m-Y / H:i:s') }}</p>
                                <p class="card-text">Ultima modifica:
                                    {{ $order->updated_at->format('d-m-Y / H:i:s') }}</p>
                                <button class="btn btn-custom"><a class="text-light" style="text-decoration:none"
                                        href="{{ route('order.show', compact('order')) }}">Dettaglio</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
