<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DriverController;

use App\Http\Controllers\MpesaController;
use App\Http\Controllers\DistanceCostController;
use App\Http\Controllers\AddProduceController;
use App\Http\Controllers\RequestDeliveryController;
use App\Http\Controllers\DeleteProduceController;
use App\Models\AddProduce;

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



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/vehicle_page', [AdminController::class,'vehicle_page']);

Route::post('/add_vehicle', [AdminController::class,'add_vehicle']);

Route::get('/show_vehicle', [AdminController::class,'show_vehicle']);

Route::get('/delete_vehicle/{id}', [AdminController::class,'delete_vehicle']);

Route::get('/edit_vehicle/{id}', [AdminController::class,'edit_vehicle']);

Route::post('/update_vehicle/{id}', [AdminController::class,'update_vehicle']);


Route::get('/view_vehicle', [DriverController::class,'view_vehicle']);


Route::get('/track', function () {
    return view('track');
});
Route::get('/addproduce', function () {
    return view('addproduce');
});
Route::get('/payment', function () {
    return view('payment');
});
Route::get('/produceedit', function () {
    return view('produceedit');
});
//Route::post('viewproduce/{id}',[AddProduceController::class, 'edit'])->name('produceedit.edit');


Route::post('/confirmpayment', function () {
    return view('confirmpayment');
});

Route::post('/redirect', function () {
    return view('redirect');
});
Route::post('/await', function () {
    return view('await');
});
Route::get('viewproduce', function () {

    $produces = DB::table('add_produces')->get();

    return view('viewproduce', ['produces' => $produces]);
});
Route::delete('/viewproduce/{id}', [AddProduceController::class, 'destroy'])
    ->name('viewproduce.destroy');

    
    Route::get('/calculator', [DistanceCostController::class,'index']);
    Route::post('/calculator',[DistanceCostController::class, 'calculate']);
    
    Route::get('/payment', [MpesaController::class,'index']);
    Route::post('/payment',[MpesaController::class, 'mpesaSTKPush']);
    
    Route::get('/addproduce', [AddProduceController::class, 'index']);
    Route::post('/addproduce', [AddProduceController::class, 'add_produce']);
    
    
    Route::get('/requestdelivery', [RequestDeliveryController::class, 'index']);
    Route::post('/requestdelivery', [RequestDeliveryController::class, 'request_delivery']);
    
    //Route::get('viewproduce',[DeleteProduceController::class, 'index']);
    //Route::get('viewproduce/{id}',[DeleteProduceController::class, 'destroy']);
    

    Route::get('/show_delivery', [RequestDeliveryController::class,'show_delivery']);
    Route::get('/view_delivery', [RequestDeliveryController::class,'view_delivery']);

Route::get('/user_page', [AdminController::class,'user_page']);

Route::post('/add_user', [AdminController::class,'add_user']);

Route::get('/show_user', [AdminController::class,'show_user']);

Route::get('/edit_user/{id}', [AdminController::class,'edit_user']);

Route::post('/update_user/{id}', [AdminController::class,'update_user']);
