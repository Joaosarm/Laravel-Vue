<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

    $services = DB::table('services')->get();
    $results = $services->map(function($service){
        return [
           'id' => $service->id,
           'technician' => $service->technician,
           'date' => $service->date,
        ];
     });

    return view('main', ['results'=>$services]);
});
