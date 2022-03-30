<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutsController;
use App\Http\Controllers\LeedController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CheckController;

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

Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/freevideo', [HomeController::class,'freevideo'])->name('freevideo');

Route::group(['as' => 'leed.', 'prefix' => 'leed','namespace' => 'Leed'], function () {
    Route::post('/create', [LeedController::class,'create'])->name('create');
});    

Route::group(['as' => 'checkout.', 'prefix' => 'checkout','namespace' => 'Checkout'], function () {
    Route::get('/{course}/{name?}/{phone?}/{leed_id?}', [CheckoutsController::class,'index'])->name('index');
    Route::get('/blackcube', [CheckoutsController::class,'blackcube'])->name('blackcube');
    Route::post('/create', [CheckoutsController::class,'create'])->name('create');
});

Route::get('/login', [HomeController::class,'login'])->name('login');

Route::get('/thankyou/{course_id?}/{name?}', [HomeController::class,'thankyou'])->name('thankyou');

//Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['as' => 'admin.', 'prefix' => 'admin','namespace' => 'Admin', 'middleware' => ['auth', 'can:admin']], function () {
    
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
    
    Route::group(['as' => 'user.', 'prefix' => 'user',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        Route::post('/edit', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');
    });
    
    Route::group(['as' => 'course.', 'prefix' => 'course',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\CoursesController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CoursesController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'edit'])->name('edit');
        Route::post('/edit', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'video.', 'prefix' => 'video',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\VideoController::class, 'index'])->name('index');
        Route::get('/list', [App\Http\Controllers\Admin\VideoController::class, 'list'])->name('list');
        Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'comment.', 'prefix' => 'comment',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\CommentController::class, 'index'])->name('index');
        Route::delete('/delete/{id}', [App\Http\Controllers\CommentController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'sms.', 'prefix' => 'sms',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\SmsController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\SmsController::class, 'create'])->name('create');
        Route::post('/send', [App\Http\Controllers\Admin\SmsController::class, 'send'])->name('send');
        // Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        // Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        // Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'leed.', 'prefix' => 'leed',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\LeedController::class, 'index'])->name('index');
        Route::get('/list', [App\Http\Controllers\LeedController::class, 'list'])->name('list');
        Route::get('/listPaid', [App\Http\Controllers\LeedController::class, 'listPaid'])->name('listPaid');
        Route::delete('/delete/{id}', [App\Http\Controllers\LeedController::class, 'delete'])->name('delete');
        // Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        // Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        // Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        // Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'transaction.', 'prefix' => 'transaction',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [TransactionController::class, 'index'])->name('index');
        Route::delete('/delete/{id}', [App\Http\Controllers\LeedController::class, 'delete'])->name('delete');
        // Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        // Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        // Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        // Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    });
    Route::group(['as' => 'coupon.', 'prefix' => 'coupon',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\CouponController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\CouponController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\CouponController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\CouponController::class, 'edit'])->name('edit');
        Route::post('/edit', [App\Http\Controllers\Admin\CouponController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\CouponController::class, 'delete'])->name('delete');
        // Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
        // Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
        // Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
        // Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    });
    Route::group(['as' => 'permission.', 'prefix' => 'permission',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/', [App\Http\Controllers\Admin\PermissionController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\PermissionController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\PermissionController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'edit'])->name('edit');
        Route::post('/edit', [App\Http\Controllers\Admin\PermissionController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\PermissionController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'export.', 'prefix' => 'export',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
        Route::get('/users', [App\Http\Controllers\ExportController::class, 'users'])->name('users');
        Route::get('/leeds', [App\Http\Controllers\ExportController::class, 'leeds'])->name('leeds');
        Route::get('/unpaidleeds', [App\Http\Controllers\ExportController::class, 'unpaidleeds'])->name('unpaidleeds');
        Route::get('/paidleeds', [App\Http\Controllers\ExportController::class, 'paidleeds'])->name('paidleeds');
        Route::get('/transactions', [App\Http\Controllers\ExportController::class, 'transactions'])->name('transactions');
        // Route::get('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('create');
        // Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('store');
        // Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('edit');
        // Route::post('/edit', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('update');
        // Route::delete('/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('delete');
    });
});

Route::group(['as' => 'user.', 'prefix' => 'user','namespace' => 'User', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::post('/edit', [App\Http\Controllers\UserController::class, 'update'])->name('update');
    
    
    Route::group(['as' => 'course.', 'prefix' => 'course','namespace' => 'Course'], function () {
        Route::get('/', [App\Http\Controllers\CoursesController::class, 'index'])->name('index');
        Route::get('/{id}', [App\Http\Controllers\CoursesController::class, 'show'])->name('show');
        Route::get('/pay/{id}', [App\Http\Controllers\CoursesController::class, 'pay'])->name('pay');
    }); 
    Route::get('/transactions', [App\Http\Controllers\UserController::class, 'transactions'])->name('transactions');
   
    Route::group(['as' => 'video.', 'prefix' => 'video','namespace' => 'Video', 'middleware' => ['auth']], function () {
        Route::get('/{id}', [App\Http\Controllers\User\VideoController::class, 'show'])->name('show');
    });
    // Route::get('/users', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('showUsers');
    // Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('createUser');
    // Route::post('/user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('storeUser');
    // Route::get('/user/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('editUser');
    // Route::post('/user/edit', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('updateUser');
    // Route::delete('/user/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('deleteUser');

    
    // Route::group(['as' => 'course.', 'prefix' => 'course',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
    //     Route::get('/', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('index');
    //     Route::get('/create', [App\Http\Controllers\Admin\CoursesController::class, 'create'])->name('create');
    //     Route::post('/store', [App\Http\Controllers\Admin\CoursesController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'edit'])->name('edit');
    //     Route::post('/edit', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'delete'])->name('delete');
    // });

    // Route::group(['as' => 'video.', 'prefix' => 'video',/*'namespace' => 'Admin', 'middleware' => ['auth', 'can:admin-panel'] */], function () {
    //     Route::get('/', [App\Http\Controllers\Admin\VideoController::class, 'index'])->name('index');
    //     Route::get('/create', [App\Http\Controllers\Admin\VideoController::class, 'create'])->name('create');
    //     Route::post('/store', [App\Http\Controllers\Admin\VideoController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [App\Http\Controllers\Admin\VideoController::class, 'edit'])->name('edit');
    //     Route::post('/edit', [App\Http\Controllers\Admin\VideoController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [App\Http\Controllers\Admin\VideoController::class, 'delete'])->name('delete');
    // });
});

Route::group(['as' => 'comment.', 'prefix' => 'comment','namespace' => 'Comment', 'middleware' => ['auth']], function () {
    Route::post('/store', [App\Http\Controllers\CommentController::class, 'store'])->name('store');
    Route::post('/reply', [App\Http\Controllers\CommentController::class, 'reply'])->name('reply');
});

Route::group(['as' => 'transaction.', 'prefix' => 'transaction','namespace' => 'Transaction'], function () {
    Route::post('/store', [TransactionController::class,'store'])->name('store');
});

// Route::group(['as' => 'check.', 'prefix' => 'check','namespace' => 'Check'], function () {
//     Route::post('/phone', [CheckController::class,'phone'])->name('phone');
//     Route::post('/referral', [CheckController::class,'referral'])->name('referral');
// });
//auth
Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::get('forget', [CustomAuthController::class, 'forgetPassword'])->name('forget-password');
Route::post('forget', [CustomAuthController::class, 'verifyPassword'])->name('verify-password');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

