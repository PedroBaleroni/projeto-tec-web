<?php

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
});

Route::get('show/{id}/', function(Request $request){
    $piscina = Piscina::find($request->id);
    return view('piscinas.show')->with('piscina',$piscina);
});
