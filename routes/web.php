<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\EntreesController;
use App\Http\Controllers\SortiesController;

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
Route::post('/authenticate', [LoginController::class, 'authenticate'])
    ->name('authenticate');

Route::get('/', [LoginController::class, 'returnView'] )
    ->name('login');

Route::get('/logout', [LoginController::class, 'logout'])
    ->name('logout');

Route::get('/acceuil', [AccueilController::class, 'index'])  
    ->name('acceuil')
    ->middleware('auth');

Route::get('/categories', [CategoriesController::class, 'liste'])  
    ->name('categories')
    ->middleware('auth');
Route::post('/ajouterCategories', [CategoriesController::class, 'ajouter'])  
    ->name('ajouterCategories')
    ->middleware('auth');
Route::get('/modifierCategorie/{id}', [CategoriesController::class, 'updatePage'])  
    ->middleware('auth');
Route::post('/modifierCategorie/{id}', [CategoriesController::class, 'updateCategorie'])  
    ->name('modifierCategorie')
    ->middleware('auth');
Route::get('/deleteCategorie/{id}', [CategoriesController::class, 'deleteCategorie'])  
    ->middleware('auth');

Route::get('/produit', [ProduitController::class, 'liste'])  
    ->name('produit')
    ->middleware('auth');
Route::get('/modifierProduit/{id}', [ProduitController::class, 'updatePage']) 
    ->middleware('auth');
Route::get('/supprimerProduit/{id}', [ProduitController::class, 'deleteProduit']) 
    ->middleware('auth');
Route::post('/modifierProduit/{id}', [ProduitController::class, 'updateProduit']) 
    ->middleware('auth');
Route::post('/ajouterProduit', [ProduitController::class, 'ajouter'])  
    ->name('ajouterProduit')
    ->middleware('auth');

Route::get('/entrees', [EntreesController::class, 'liste'])  
    ->name('entrees')
    ->middleware('auth');
Route::post('/ajouterEntree', [EntreesController::class, 'ajouter'])  
    ->name('ajouterEntree')
    ->middleware('auth');
Route::get('/modifierEntree/{id}', [EntreesController::class, 'updatePage']) 
    ->middleware('auth');
Route::get('/supprimerEntree/{id}', [EntreesController::class, 'deleteEntree']) 
    ->middleware('auth');
Route::post('/modifierEntree/{id}', [EntreesController::class, 'updateEntree']) 
    ->middleware('auth');

Route::get('/sorties', [SortiesController::class, 'liste'])  
    ->name('sorties')
    ->middleware('auth');
Route::post('/ajouterSortie', [SortiesController::class, 'ajouter'])  
    ->name('ajouterSortie')
    ->middleware('auth');
Route::get('/modifierSortie/{id}', [SortiesController::class, 'updatePage'])
    ->middleware('auth');
Route::post('/modifierSortie/{id}', [SortiesController::class, 'updateSortie'])
    ->middleware('auth');
Route::get('/supprimerSortie/{id}', [SortiesController::class, 'deleteSortie']) 
    ->middleware('auth');



