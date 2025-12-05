<?php

use App\Http\Controllers\PiscinaController;
use App\Models\Piscina;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ola-mundo/', function(){
    $piscinas = Piscina::all();
    return view('piscinas.index')->with('piscinas',$piscinas);
})->name('piscinas.index');

Route::get('show/{id}/', function(Request $request){
    $piscina = Piscina::find($request->id);
    return view('piscinas.show')->with('piscina',$piscina);
});

Route::get('create/', function(){
    return view('piscinas.create');
})->name('piscinas.create');

Route::post('store/', 
[PiscinaController::class, 'store'])
->name('piscinas.store');

Route::get('update/{id}', 
[PiscinaController::class, 'edit'])
->name('piscinas.update');

Route::post('store/', 
[PiscinaController::class, 'store'])
->name('piscinas.store');

Route::delete('delete/{id}', 
[PiscinaController::class, 'delete'])
->name('piscinas.delete');