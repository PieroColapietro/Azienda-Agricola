<x-layout>
   
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-4 mt-5 mb-5">
                @if ($errors->any())
                <div class="alert alert-danger mt-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <h1 class="mb-5 mt-5">Cosa vuoi ordinare?</h1>
                <form method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mt-3">
                        <label for="inputName" class="col-sm-4 col-form-label">Inserisci il tuo nome</label>
                        <div class="col-sm-10">
                            <input name="name" type="name" class="form-control" id="inputName" placeholder="name" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputaddress" class="col-sm-4 col-form-label">Inserisci il tuo indirizzo</label>
                        <div class="col-sm-10">
                            <input name="address" type="address" class="form-control" id="inputaddress"
                                placeholder="address" value="{{old('address')}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputemail" class="col-sm-4 col-form-label">Inserisci la tua email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" id="inputemail" placeholder="email" value="{{old('email')}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputnumber" class="col-sm-4 col-form-label">Inserisci il tuo numero di
                            cellulare</label>
                        <div class="col-sm-10">
                            <input name="number" type="number" class="form-control" id="inputnumber"
                                placeholder="phone" value="{{old('number')}}">
                        </div>
                    </div>
                    <div class="form-group row mt-3">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ordina</button>
                        </div>
                    </div>
                </form>
                <div class="form-group row">
                    {{-- @if (Auth::id() == $order->user->id) --}}

                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>

</x-layout>
