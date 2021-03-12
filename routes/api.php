<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ChatBotController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/chatbot', [ChatBotController::class, 'listenToReplies']);

//Route::post('/chatbot', 'ChatBotController@listenToReplies');
Route::get('/prueba', [ChatBotController::class, 'getprueba']);
//Route::get('/chatbot', [ChatBotController::class, 'sendWhatsAppMessage']);