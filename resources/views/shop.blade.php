
@extends('layouts.app')

@section('content')
    <div class="background-image" style="background-image: url('https://images.vexels.com/content/77387/preview/travelling-elements-wallpaper-5b02d9.png');  height: 100vh; position: fixed; width: 100%;"></div>

    <div class="container" style="margin-top: 80px; position: relative; z-index: 1;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">

            </ol>
        </nav>

        <div class="row justify-content-center cereal-section" style="background-color: #690558e9; padding: 20px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4 class="text-white">TODOS LOS PRODUCTOS</h4>
                    </div>
                </div>
                <hr class="border-white">
                <div class="row">
                    @foreach($products as $pro)
                        <div class="col-lg-3">
                            <div class="card" style="margin-bottom: 20px; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <img src="{{ asset('images/' . $pro->image_path) }}"
                                     class="card-img-top mx-auto mt-3"
                                     style="height: 150px; width: 150px; display: block; border-radius: 50%;"
                                     alt="{{ $pro->image_path }}"
                                >
                                <div class="card-body">
                                    <a href="#" class="text-decoration-none"><h6 class="card-title">{{ $pro->name }}</h6></a>
                                    <p class="text-muted">${{ $pro->price }}</p>
                                    <form action="{{ route('cart.agregar', ['productoId' => $pro->id]) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-sm" title="Agregar al Carrito">
                                            <i class="fa fa-shopping-cart"></i> Agregar al Carrito
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
