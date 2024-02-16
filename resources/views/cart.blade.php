@extends('layouts.app')



<!-- Estilos CSS -->
<style>
    .container {
    margin-top: 50px;

}

.card {
    margin-bottom: 20px;


}

.card-title {
    font-size: 1.2rem;
}

.card-text {
    font-size: 0.9rem;
    color: #555;
}


.btn-info {
    background-color: #17a2b8;
    border-color: #17a2b8;

}

.btn-info:hover {
    background-color: #117a8b;
    border-color: #117a8b;
}

.btn-danger,
.btn-dark,
.btn-success {
    width: 100%;
}


.card-footer {
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
}


.btn-danger,
.btn-dark {
    margin-top: 10px;
}

.btn-success {
    margin-top: 10px;
    float: right;
}


.alert-info {
    margin-top: 20px;

}


.navbar {
    background-color: #343a40;
}

.navbar-dark .navbar-nav .nav-link {
    color: #fff;
}

.navbar-dark .navbar-nav .nav-link:hover {
    color: #17a2b8;
}
 /* ... Estilos CSS ... */
</style>

@section('content')
<!-- Fondo de pantalla del background del carrito -->
<div class="background-image" style="background-image: url('https://i.pinimg.com/originals/39/e8/73/39e873e380e2fe426f57d079f768c968.jpg'); height: 100vh; position: fixed; width: 100%;"></div>

<!-- Contenedor principal -->
<div class="container mt-5">
    <div class="row">

        <!-- Columna principal para mostrar los productos en el carrito -->
        <div class="col-md-8">
            @php
                $totalPrice = 0;
            @endphp

            @if(count($cartCollection) > 0)
                @foreach($cartCollection as $item)
                    <div class="card mb-3">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                @if($item->image)
                                    <img src="{{ $item->image }}" class="card-img" alt="{{ $item->name }}" style="max-width: 100%; max-height: 175px;">
                                @else
                                    <p class="card-text">No hay imagen</p>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <p class="card-text">
                                        <strong>Producto:</strong> {{ $item->name }}<br>
                                        <strong>Precio:</strong> ${{ $item->price }}<br>
                                        <strong>Cantidad:</strong> {{ $item->quantity }}<br>
                                        <strong>Subtotal:</strong> ${{ $item->getPriceSum() }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <strong>Cantidad:</strong>
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="product_id" value="{{ $item->id }}">
                                        <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" max="10">
                                        <button type="submit" class="btn btn-sm btn-info">Añadir</button>
                                    </form>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit" class="btn btn-dark btn-sm btn-block mt-2"><i class="fa fa-trash"></i> Eliminar del carrito</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $subtotal = $item->getPriceSum();
                        $totalPrice += $subtotal;
                    @endphp
                @endforeach
            @else
                <div class="alert alert-info" role="alert">
                    Tu carrito esta vacio.
                </div>
            @endif
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Total:</strong> ${{ $totalPrice }}</li>
                    </ul>
                </div>

                <div class="card-footer">
                    <!-- Formulario para limpiar el carrito -->
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-md"><i class="fa fa-trash"></i> Clear Cart</button>
                    </form>
                    <!-- enlaces -->
                    <a href="http://localhost/example-ap/public/shop" class="btn btn-dark btn-md"><i class="fa fa-arrow-left"></i> Continua comprando</a>
                    <a href="/checkout" class="btn btn-success btn-md float-right"><i class="fa fa-arrow-right"></i> Procede al pago</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
