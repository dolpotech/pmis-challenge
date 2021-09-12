<?php
use Illuminate\Http\Request;
use App\MaterialsUsed;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Route::group(['middleware' => ['auth'],'prefix'=>'auth'], function(){
//     Route::post('chat/{project_id}', function(){
//         dd(1);
//     });
// });

Route::get( '/materialsUsed', function()
{
    return MaterialsUsed::all();
});