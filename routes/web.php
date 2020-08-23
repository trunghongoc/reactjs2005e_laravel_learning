<?php

use Illuminate\Support\Facades\Route;

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

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    // $users = User::paginate(1);
    // return response()->json($users);
    // return view('welcome');
    $user = Auth::user();

    $right = Hash::check('123', $user->password);
    dd($right);

    dd($user);
    return response()->json($user);
    return view('testBlade');
});

Route::get('/test', function() {
    // $students = [
    //     ['id' => 6, 'name' => 'Nguyễn Văn A'],
    //     ['id' => 9, 'name' => 'Phạm Văn B'],
    // ];
    // return view('testAbc', [
    //     'students' => $students
    // ]);
    return '123';

})->middleware('myJWT');

Route::get('/json', function() {
    $users = User::with('posts')->get();
    return response()->json([
        'users' => $users
    ]);
});

Route::post('/test', function() {
    return 'route post';
});

Route::post('/gift', function() {
    return view('a.gift');
});

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
        return view('a.gift');
    });
});

// Route::get('/about', 'PostController@index');
// Route::get('/about/create', 'PostController@formCreate');
// Route::post('/about/create', 'PostController@create');
// Route::post('/about', function () {
//     return 'method post của about';
// });


Route::get('/users', 'UserController@index');
Route::get('/users/{id}', 'UserController@show')->where(['id' => '\d+']);
Route::view('/users/new', 'users.new');
Route::post('/users/create', 'UserController@create');

Route::view('/login', 'login')->name('login');
Route::post('/login', 'AuthController@login');
