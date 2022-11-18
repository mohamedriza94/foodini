<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//recipe control routes
Route::get('/recipe', [App\Http\Controllers\recipeController::class, 'index'])->name('recipe');
Route::get('/recipeDetail', [App\Http\Controllers\recipeController::class, 'openRecipeDetail'])->name('recipeDetail');
Route::post('/addRecipe', [App\Http\Controllers\recipeController::class, 'addRecipe']);
Route::get('/getRecipe', [App\Http\Controllers\recipeController::class, 'getRecipe']);
Route::get('/getCategorizedRecipe/{category}', [App\Http\Controllers\recipeController::class, 'getCategorizedRecipe']);
Route::get('/getLatestRecipe', [App\Http\Controllers\recipeController::class, 'getLatestRecipe']);
Route::put('/updateRecipe/{id}', [App\Http\Controllers\recipeController::class, 'updateRecipe']);
Route::get('/deleteRecipe/{id}', [App\Http\Controllers\recipeController::class, 'deleteRecipe']);
Route::get('/getSingleRecipe/{id}', [App\Http\Controllers\recipeController::class, 'getSingleRecipe']);
Route::get('/searchRecipe/{input}', [App\Http\Controllers\recipeController::class, 'searchRecipe']);


//order control routes
Route::get('/order', [App\Http\Controllers\orderController::class, 'index'])->name('order');
Route::post('/placeOrder', [App\Http\Controllers\orderController::class, 'placeOrder']);
Route::get('/getOrder', [App\Http\Controllers\orderController::class, 'getOrder']);
Route::get('/getFilteredOrder/{filter}', [App\Http\Controllers\orderController::class, 'getFilteredOrder']);
Route::put('/updateOrderStatus/{id}', [App\Http\Controllers\orderController::class, 'updateOrderStatus']);
Route::get('/getSingleOrder/{id}', [App\Http\Controllers\orderController::class, 'getSingleOrder']);
Route::get('/searchOrder/{input}', [App\Http\Controllers\orderController::class, 'searchOrder']);


//register user
Route::get('/register', [App\Http\Controllers\Auth\registerController::class, 'index'])->name('register');
Route::post('/registerUser', [App\Http\Controllers\Auth\registerController::class, 'registerUser']);

//explore routes
Route::get('/explore', [App\Http\Controllers\recipeController::class, 'explorePage'])->name('explore');
Route::get('/searchRecipe/{input}', [App\Http\Controllers\recipeController::class, 'searchRecipe']);

//cart routes
Route::get('/cart', [App\Http\Controllers\cartController::class, 'index'])->name('cart');

//user dashboard routes
Route::get('/dashboard', [App\Http\Controllers\userController::class, 'index'])->name('userDash');
Route::post('/addToCart', [App\Http\Controllers\cartController::class, 'addToCart']);
Route::get('/getCart', [App\Http\Controllers\cartController::class, 'getCart']);
Route::get('/getSingleCart/{id}', [App\Http\Controllers\cartController::class, 'getSingleCart']);
Route::get('/deleteCartItem/{id}', [App\Http\Controllers\cartController::class, 'deleteCartItem']);

//administrator routes
Route::get('/getAllOrders', [App\Http\Controllers\orderController::class, 'getAllOrders']);
Route::get('/getAllClients', [App\Http\Controllers\orderController::class, 'getAllClients']);
Route::get('/getSingleClient/{id}', [App\Http\Controllers\orderController::class, 'getSingleClient']);