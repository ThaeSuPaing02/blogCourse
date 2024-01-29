<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ArticleController;

//from PSK
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

Route::resource('willShowNothing',TestController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::get('testing/drawer',[ArticleController::class,'testUi']);
Route::get('tester/nav/side',function(){
    return view('Layouts.sidebar');
});
Route::get('testing/category',[CategoryController::class,'showList'])->name('category.show');

// project routes start from here
Route::resource('article',ArticleController::class)->names([
    'index'=>'articles#index',
]);
Route::get('new/article/readmore',[ArticleController::class,'readMore'])->name('article#readmore');
Route::post('article/updateArticle/{id}',[ArticleController::class,'updateArticle'])->name('article.updateArticle');
Route::get('article/save/favorites/{id}',[ArticleController::class,'favoriteArticles'])->name('article#favorite');


//from PSK


Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');

Route::get('/auth/redirect', function () {
    return Socialite::driver('github')->redirect();
});

Route::get('/auth/callback', function () {
    $githubUser = Socialite::driver('github')->user();

    $user = User::create([
        'name' => $githubUser->name,
        'email' => $githubUser->email,
        'github_id' => $githubUser->id,
        'github_token' => $githubUser->token,
        'github_refresh_token' => $githubUser->refreshToken,
    ]);
    Auth::login($user);
    // dd($githubUser->toArray());
    return redirect('/dashboard');
    // dd($user);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //change password
    Route::get('change', [UserController::class, 'changePasswordPage'])->name('user#changePasswordPage');
    Route::post('change', [UserController::class, 'changePassword'])->name('user#changePassword');

    //category
    Route::prefix('category')->group(function () {
        Route::get('list', [CategoryController::class, 'list'])->name('category#list');
        Route::get('create/page', [CategoryController::class, 'createPage'])->name('category#createPage');
        Route::post('create', [CategoryController::class, 'create'])->name('category#create');
        Route::get('delete/{id}', [CategoryController::class, 'delete'])->name('category#delete');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category#edit');
        Route::post('update/{id}', [CategoryController::class, 'update'])->name('category#update');
    });

    //courses
    Route::prefix('course')->group(function () {
        Route::get('list', [CourseController::class, 'list'])->name('course#list');
        Route::get('create/page', [CourseController::class, 'createPage'])->name('course#createPage');
        Route::post('create', [CourseController::class, 'create'])->name('course#create');
        Route::get('delete/{id}', [CourseController::class, 'delete'])->name('course#delete');
        Route::get('courseEdit/{id}', [CourseController::class, 'edit'])->name('course#edit');

    });
});

require __DIR__ . '/auth.php';
