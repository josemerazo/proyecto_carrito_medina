<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Product extends Model
{
    use HasFactory;

    public function carritos()
{
    return $this->belongsToMany(Carrito::class)->withPivot('quantity');
}




public function getPriceSum()
{
    $priceSum = 0;

    foreach ($this->carritos as $carrito) {
        $priceSum += $carrito->pivot->quantity * $this->price;
    }

    return $priceSum;
}




public function updateQuantity($quantity)
{
    $user = auth()->user();
    $carrito = $user->carrito;

    if ($carrito) {
        $productoEnCarrito = $carrito->productos()->find($this->id);

        if ($productoEnCarrito) {
            $carrito->productos()->updateExistingPivot($this->id, ['quantity' => $quantity]);
        }
    }
}




public function getQuantityAttribute()
{
    $user = auth()->user();
    $carrito = $user->carrito;

    if ($carrito) {
        $pivot = $carrito->productos()->where('product_id', $this->id)->first()->pivot;
        return $pivot->quantity ?? 0;
    }

    return 0;
}
}
