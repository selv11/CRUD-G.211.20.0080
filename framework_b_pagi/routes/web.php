<?php
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/mahasiswa",
[MahasiswaController::class,'index']);

Route::get("/mahasiswa/create",
[MahasiswaController::class,'create']);

route::post("/mahasiswa/input",
function(request $req){
    echo "<pre>";
    print_r($req->post());
});
