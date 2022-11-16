<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//recipe control routes
Route::get('/recipe', [App\Http\Controllers\recipeController::class, 'index'])->name('recipe');
Route::post('/addRecipe', [App\Http\Controllers\recipeController::class, 'addRecipe']);
Route::get('/getRecipe', [App\Http\Controllers\recipeController::class, 'getRecipe']);
Route::put('/updateRecipe/{id}', [App\Http\Controllers\recipeController::class, 'updateRecipe']);
Route::get('/deleteRecipe/{id}', [App\Http\Controllers\recipeController::class, 'deleteRecipe']);
Route::get('/getSingleRecipe/{id}', [App\Http\Controllers\recipeController::class, 'getSingleRecipe']);
Route::get('/searchRecipe/{input}', [App\Http\Controllers\recipeController::class, 'searchRecipe']);


//order control routes
Route::get('/order', [App\Http\Controllers\orderController::class, 'index'])->name('order');
Route::post('/placeOrder', [App\Http\Controllers\orderController::class, 'placeOrder']);
Route::get('/getOrder', [App\Http\Controllers\orderController::class, 'getOrder']);
Route::put('/updateOrderStatus/{id}', [App\Http\Controllers\orderController::class, 'updateOrderStatus']);
Route::get('/getSingleOrder/{id}', [App\Http\Controllers\orderController::class, 'getSingleOrder']);
Route::get('/searchOrder/{input}', [App\Http\Controllers\orderController::class, 'searchOrder']);


//register user
Route::get('/register', [App\Http\Controllers\Auth\registerController::class, 'index'])->name('register');
Route::post('/registerUser', [App\Http\Controllers\Auth\registerController::class, 'registerUser']);