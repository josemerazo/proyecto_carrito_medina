    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\LoginController;
    use App\Http\Controllers\CartController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider and all of them will
    | be assigned to the "web" middleware group. Make something great!
    |
    */

    Route::get('/', function () {
        return view('welcome');
    });


        /*RUTAS PARA EÑ CARTCONTROLLER, CART, Y SHOP */
        Route::middleware('auth')->group(function () {
        Route::view('/inicio', 'inicio')->name('loginin');
        Route::post('/agregar-al-carrito/{productoId}', [CartController::class, 'agregarAlCarrito'])->name('cart.agregar');
        Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
        Route::put('/cart/update', [CartController::class, 'updateQuantity'])->name('cart.update');
        Route::delete('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
        Route::post('/cart/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');
        Route::get('/shop', [CartController::class, 'shop'])->name('shop');



    });

        /*RUTAS PARA EL LOGIN Y REGISTER */
        Route::view('/loginin', 'login')->name('loginin');
        Route::view('/Register', 'Register')->name('Register');
        Route::post('/validar-register', [LoginController::class, 'Register'])->name('validar-register');
        Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
