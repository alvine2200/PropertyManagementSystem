<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Property\PropertyController;
use PhpParser\Node\Stmt\PropertyProperty;

/*Users
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('', [PropertyController::class, 'home']);
Route::get('view_properties', [PropertyController::class, 'index']);
Route::post('create_property', [PropertyController::class, 'store']);
Route::get('edit_property/{id}', [PropertyController::class, 'edit']);
Route::post('update_property/{id}', [PropertyController::class, 'update']);
Route::any('delete_property/{id}', [PropertyController::class, 'destroy']);
Route::any('allocate_property/{id}', [PropertyController::class, 'allocate']);


require __DIR__ . '/auth.php';
