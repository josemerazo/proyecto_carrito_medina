<?php
namespace App\Http\Controllers;


use App\Models\Carrito;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{



public function shop()
{
    $products = Product::all();
    return view('shop', compact('products'));
}




public function cart()
{
    $cartCollection = \Cart::getContent();
    if (auth()->check()) {
        $user = auth()->user();
        if ($user->carrito) {
            $cartCollection = $user->carrito->productos;
        }
        $cartCollection = $cartCollection->map(function ($item) {
            $product = Product::find($item->id);
            $item->image = $product ? asset('images/' . $product->image_path) : asset('images/default-image.jpg');
            return $item;
        });
    }
    return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);
}




public function agregarAlCarrito(Request $request, $productoId)
{
    if (auth()->check()) {
        $user = auth()->user();
        if (!$user->carrito) {
            $carrito = new Carrito();
            $user->carrito()->save($carrito);
        }
        $producto = $user->carrito->productos()->find($productoId);
        if ($producto) {
            $user->carrito->productos()->updateExistingPivot($productoId, ['quantity' => $producto->pivot->quantity + 1]);
        } else {
            $user->carrito->productos()->attach($productoId, ['quantity' => 1]);
        }
        return redirect()->back()->with('success', 'Producto agregado al carrito correctamente.');
    }
    return redirect('login')->with('error', 'Debes iniciar sesión para agregar productos al carrito.');
}




public function add(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $request->img,
                'slug' => $request->slug,
            ],
        ]);
        return redirect()->route('shop')->with('success_msg', 'Producto agregado al carrito correctamente.');
    }




public function remove(Request $request)
{
    $productId = $request->input('id');
    $user = auth()->user();

    if ($user->carrito) {
        $user->carrito->productos()->detach($productId);
    }
    return redirect()->route('cart.index')->with('success', 'Producto eliminado correctamente.');
}




public function update(Request $request)
{
    $validator = Validator::make($request->all(), [
        'id' => 'required|numeric',
        'quantity' => 'required|numeric|min:1',
    ]);
    if ($validator->fails()) {
        return redirect()->route('cart.index')->withErrors($validator);
    }
    Cart::update($request->id, $request->quantity);

    return redirect()->route('cart.index')->with('success', 'Cart updated successfully');
}




public function updateQuantity(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity');

    $product = Product::find($productId);
    $product->updateQuantity($quantity);

    return redirect()->route('cart.index')->with('success', 'Quantity updated successfully');
}



public function checkout()
{

    session()->flash('success', '¡Pedido pagado con éxito!');


    return redirect()->route('confirmation.page');
}


}

