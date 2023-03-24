<?php

use App\Http\Controllers\TodosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return view('welcome');
    //return 'Admin is here';
    return view('welcome');
});

Route::get('/test', ['uses' => 'TestController@index'])->name('test_index');

Route::post('/test/create/todo', ['uses' => 'TestController@store']);

Route::get('/test/todo/delete/{id}', [
    'uses' => 'TestController@delete',
    'as' => 'test.todo.delete'
]);

Route::get('/test/todo/update/{id}', [
    'uses' => 'TestController@update',
    'as' => 'test.todo.update'
]);

Route::post('/test/todo/save/{id}', [
    'uses' => 'TestController@save',
    'as' => 'test.todo.save'
]);

Route::get('/test/todo/mark_completed/{id}', [
    'uses' => 'TestController@mark_completed',
    'as' => 'test.todo.mark_completed'
]);

Route::get('/test/todo/mark_uncompleted/{id}', [
    'uses' => 'TestController@mark_uncompleted',
    'as' => 'test.todo.mark_uncompleted'
]);



Route::get('/todos', ['uses' => 'TodosController@index'])->name('todos');

Route::get('/new', [
    'uses' => 'PagesController@new'
]);

Route::post('/todos/create', [
    'uses' => 'TodosController@store'
]);

Route::get("/todos/delete/{id}", [
    'uses' => 'TodosController@destroy',
    'as' => 'todo.delete'
]);

Route::get("/todos/update/{id}", [
    'uses' => 'TodosController@update',
    'as' => 'todo.update'
]);

Route::get('/about', function () {
    return "About";
});

Route::get('/contact', function () {
    return "Contact";
});

Route::get("/post/{id}/{name}", function ($id, $name) {
    return "This is post {$id} {$name}";
});

Route::get("admin/posts/example", array("as" => "admin.home", function () {
    $url = route('admin.home');
    return "<a href='{$url}'>Click on me</a>";
}));

//Route::get('post', 'PostController@index');

Route::resource('test/{id}', 'PostController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
