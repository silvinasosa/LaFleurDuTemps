  <?php

/*Web Routes
Here is where you can register web routes for your application. These
routes are loaded by the RouteServiceProvider within a group which
contains the "web" middleware group. Now create something great!*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', 'ProductsController');
Route::resource('profile', 'ProductsController');
Route::post('products/{id}', 'ProductsController@images');


Auth::routes();

Route::get('faq', 'ViewsController@faq');
Route::get('profile', 'ViewsController@profile');

// Route::resource('categories', 'CategoriesController');

Route::get('categories/{id}', 'CategoriesController@show');

// Route::get('/home', 'HomeController@index')->name('home');
