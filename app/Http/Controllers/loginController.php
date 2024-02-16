<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{

    public function register(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::login($user);
        return redirect("http://localhost/example-ap/public/loginin");
    }





    public function login(Request $request){
    $credentials = [
        "email" => $request->email,
        "password" => $request->password,
    ];
    $remember = $request->has('remember');
    if (Auth::attempt($credentials, $remember)) {
        $request->session()->regenerate();
        $user = auth()->user();
        if (!$user->carrito) {
            $carrito = new Carrito();
            $user->carrito()->save($carrito);
        }
        return redirect()->intended("http://localhost/example-ap/public/inicio");
    } else {
        return redirect('loginin')->with('error', 'Correo o contraseña incorrectos. Por favor, inténtalo de nuevo.');
    }
}





    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('loginin'));

    }

}
