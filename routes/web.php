<?php

use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginNewController;
use App\Http\Controllers\DahsboardController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ============================================================
// Front Web
// ============================================================
Route::get('/', function () {
    $services = Service::orderBy('id', 'ASC')->get();
    $project = Project::orderBy('id', 'ASC')->get();

    return view('front-view.home.index', compact('services', 'project'));
})->name('home');
Route::get('/about-us', function () {
    return view('front-view.about-us.index');
})->name('about-us');
Route::get('/service', function () {
    $services = Service::orderBy('id', 'ASC')->get();
    return view('front-view.service.index', compact('services'));
})->name('service');

Route::get('/products', function (Request $request) {
    $query = Product::query();

    if ($request->has('category') && $request->category !== 'all') {
        $query->where('product_category_id', $request->category);
    }

    $products = $query->paginate(12);
    $productCategory = ProductCategory::all();
    return view('front-view.product.index', compact('products', 'productCategory'));
})->name('products');

Route::get('/project', function () {
    $project = Project::orderBy('id', 'ASC')->get();

    return view('front-view.project.index', compact('project'));
})->name('project');
Route::get('/contact-us', function () {
    return view('front-view.contact-us.index');
})->name('contact-us');


// ============================================================
// CMS Web
// ============================================================
Route::prefix('cms')->name('cms.')->group(function () {

    Route::post('/send-login', [LoginNewController::class, 'login'])->name('send-login');
    // START FORGOT PASSWORD
    Route::prefix('forgot-password')->name('forgot-password-')->group(function () {
        Route::get('/', [ForgotPasswordController::class, 'index'])->name('view');
        Route::post('/send-email', [ForgotPasswordController::class, 'sendEmail'])->name('send-email');
        Route::get('/reset-password', [ForgotPasswordController::class, 'reset'])->name('reset-password');
        Route::post('/proses-reset-password', [ForgotPasswordController::class, 'prosesReset'])->name('proses-reset-password');
        Route::get('/success-reset', [ForgotPasswordController::class, 'successReset'])->name('success-reset');
    });
    // END FORGOT PASSWORD

    Auth::routes();
    Route::middleware(['auth'])->group(function () {

        Route::get('/dashboard', [DahsboardController::class, 'index'])->name('dashboard');
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');

        // Resources Collection
        Route::resources([
            'users' => UserController::class,
            'product' => ProductController::class,
            'product-category' => ProductCategoryController::class,
            'service' => ServiceController::class,
            'project' => ProjectController::class,
        ]);

        // USER PROFILE ROUTE
        Route::get('/user-list', [UserController::class, 'getDataUser']);
        Route::get('/user-profile', [UserController::class, 'userProfile'])->name('edit-user-profile');
        Route::put('/update-user-profile', [UserController::class, 'updateUserProfile'])->name('update-user-profile');

        // =============================LIST END POINT==================================
        // Dashboard List
        Route::get('/track-stock-list', [DahsboardController::class, 'getData']);
        // Product List
        Route::get('/product-list', [ProductController::class, 'getDataProduct']);
        // Product List
        Route::get('/product-category-list', [ProductCategoryController::class, 'getDataProductCategory']);
        // =======================================================================
        // Service List
        Route::get('/service-list', [ServiceController::class, 'getData']);
        // =======================================================================
        // Project List
        Route::get('/project-list', [ProjectController::class, 'getData']);
        // =======================================================================
    });
});
