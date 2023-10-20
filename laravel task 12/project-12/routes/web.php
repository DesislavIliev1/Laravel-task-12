<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarUserController;






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
    return view('home');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('carAdmin')->name('carAdmin')->group(function(){

    Route::middleware(['auth','isAdmin'])->group(function(){

        Route::get('/', [HomeController::class, 'dashboard'])->name('home');

        

        
            
           
        


        Route::prefix('users')->name('users')->group(function(){

            Route::get('/', [UserController::class, 'index'])->name('index');

            Route::get('/factory', [UserController::class, 'factoryCreateUsers'])->name('factoryCreateUsers');

            

            Route::get('/create',[UserController::class, 'create'])->name('create');
            Route::post('/create',[UserController::class, 'store'])->name('store');

            Route::get('/{id}/edit',[UserController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit',[UserController::class, 'update'])->name('update');

            Route::get('/{id}/delete',[UserController::class, 'delete'])->name('delete');
            Route::delete('/{id}/delete',[UserController::class, 'delete'])->name('delete');


            


        });

        
        Route::prefix('cars')->name('cars')->group(function(){

            Route::get('/', [CarController::class, 'index'])->name('index');

            Route::get('/carfactory', [CarController::class, 'factoryCreateCars'])->name('factoryCreateCars');

            Route::get('/{id}/edit',[CarController::class, 'edit'])->name('edit');
            Route::post('/{id}/edit',[CarController::class, 'update'])->name('update');

            Route::get('/{id}/delete',[CarController::class, 'destroy'])->name('delete');
            Route::delete('/{id}/delete',[CarController::class, 'destroy'])->name('delete');


        });

        Route::prefix('carsUser')->name('carsUser.')->group(function (){
            // index
            Route::get('/', [CarUserController::class,'index'])->name('index');
        });

    });

});


