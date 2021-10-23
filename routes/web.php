<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\RecipeDetailController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RecipeListController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\ChefsController;
use App\Http\Controllers\Admin\EventsController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Admin\ChartsController;
use App\Http\Controllers\Admin\RecipeChartController;
use App\Http\Controllers\Admin\PriceChartController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\Admin\SpecialController;
use App\Http\Controllers\Admin\MenusController;
use App\Http\Controllers\Admin\SaladController;
use App\Http\Controllers\Admin\SpecialityController;
use App\Http\Controllers\Admin\RecipePDFController;
use App\Http\Controllers\Admin\UserPDFController;
use App\Http\Controllers\Admin\BookingPDFController;
use App\Http\Controllers\Admin\EventPDFController;
use App\Http\Controllers\Admin\MenuPDFController;
use App\Http\Controllers\Admin\SaladPDFController;
use App\Http\Controllers\Admin\SpecialtyPDFController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ContactemailController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Models\Recipe;

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

Route::get('/paypal', function () {
    return view('paypal');
});

Route::get('/searches', [SearchController::class, 'searches']);

Route::post('/search', function(){
    $q= Request::get('q');
    if($q != ""){
        $recipes= Recipe::where('title', 'LIKE', '%' . $q . '%')
        ->get();
        if (count($recipes)>0)
            return view ('searchcontent')->withDetails($recipes)->withQuery($q);

    }
     $r= Request::get('r');
    if($r != ""){
        $recipes= Recipe::where('name', 'LIKE', '%' . $r . '%')
        ->get();
        if (count($recipes)>0)
            return view ('searchcontent')->withDetails($recipes)->withQuery($r);

    }
     $s= Request::get('s');
    if($s != ""){
        $recipes= Recipe::where('ingredients', 'LIKE', '%' . $s . '%')
        ->get();
        if (count($recipes)>0)
            return view ('searchcontent')->withDetails($recipes)->withQuery($s);

    }
});


Route::get('/reserve/{id}', [App\Http\Controllers\Admin\RecipeListController::class, 'reserve']);

Route::get('/cancel/{id}', [App\Http\Controllers\Admin\RecipeListController::class, 'cancel']);

Route::get('/author/{id}', [RecipeListController::class, 'authorinfo']);

// route for processing payment
Route::post('/paypal', [App\Http\Controllers\PaymentController::class, 'payWithpaypal'])->name('paypal');

// route for check status of the payment
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

Route::get('/', [IndexController::class, 'index']);

Route::post('/save-comment', [CommentsController::class, 'store']);

Route::get('/pages/widgets', [ShopsController::class, 'widgets']);

// Route::get('/forms', [ShopsController::class, 'forms']);

Route::get('/recipe/{id}', [RecipeListController::class, 'show']);

Route::resource('recipe', '\App\Http\Controllers\RecipeController');

// Route::resource('about', '\App\Http\Controllers\AboutController');

Route::resource('menu', '\App\Http\Controllers\MenuController');

Route::resource('salad', '\App\Http\Controllers\SaladController');

Route::resource('specialty', '\App\Http\Controllers\SpecialtyController');

Route::resource('slider', '\App\Http\Controllers\SliderController');

Route::post('send-email', [MailController::class, 'send']);

Route::post('/contact/send', [ContactemailController::class, 'send']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/home', function (){
    return view('dashboard');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware(['auth:sanctum', 'verified', 'admin'])->group(function(){
    /*PDF*/
    Route::get('/user_pdf/pdf', [App\Http\Controllers\Admin\UserPDFController::class, 'pdf']);
    Route::get('/recipe_pdf/pdf', [App\Http\Controllers\Admin\RecipePDFController::class, 'pdf']);
    Route::get('/booking_pdf/pdf', [App\Http\Controllers\Admin\BookingPDFController::class, 'pdf']);
    Route::get('/event_pdf/pdf', [App\Http\Controllers\Admin\EventPDFController::class, 'pdf']);
    Route::get('/menu_pdf/pdf', [App\Http\Controllers\Admin\MenuPDFController::class, 'pdf']);
    Route::get('/salad_pdf/pdf', [App\Http\Controllers\Admin\SaladPDFController::class, 'pdf']);
    Route::get('/specialty_pdf/pdf', [App\Http\Controllers\Admin\SpecialtyPDFController::class, 'pdf']);
    /*End PDF*/

    /*Dashboard*/
    Route::get('/admin-dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/userchart', [App\Http\Controllers\Admin\DashboardController::class, 'userchart']);
    Route::get('/recipechart', [App\Http\Controllers\Admin\RecipeChartController::class, 'recipechart']);
    Route::get('/pricechart', [App\Http\Controllers\Admin\PriceChartController::class, 'price']);
    Route::get('/chart', [App\Http\Controllers\Admin\ChartsController::class, 'index']);

    /*End Dashboard*/
    /*Speciality*/
    Route::get('/speciality-register', [App\Http\Controllers\Admin\SpecialityController::class, 'registered']);
    Route::post('/save-speciality', [App\Http\Controllers\Admin\SpecialityController::class, 'store']);
    Route::get('/speciality-table', [App\Http\Controllers\Admin\SpecialityController::class, 'specialitytable']);
    Route::get('/speciality-edit/{id}', [App\Http\Controllers\Admin\SpecialityController::class, 'registeredit']);
    Route::PATCH('/speciality-register-update/{id}', [App\Http\Controllers\Admin\SpecialityController::class, 'registerupdate']);
    Route::delete('/speciality-delete/{id}', [App\Http\Controllers\Admin\SpecialityController::class, 'registerdelete']);
    /*End Speciality*/

      /*Salads*/
    Route::get('/salad-register', [App\Http\Controllers\Admin\SaladController::class, 'registered']);
    Route::post('/save-salad', [App\Http\Controllers\Admin\SaladController::class, 'store']);
    Route::get('/salad-table', [App\Http\Controllers\Admin\SaladController::class, 'saladtable']);
    Route::get('/salad-edit/{id}', [App\Http\Controllers\Admin\SaladController::class, 'registeredit']);
    Route::PATCH('/salad-register-update/{id}', [App\Http\Controllers\Admin\SaladController::class, 'registerupdate']);
    Route::delete('/salad-delete/{id}', [App\Http\Controllers\Admin\SaladController::class, 'registerdelete']);
    /*End Salads*/

     /*Menus*/
    Route::get('/menu-register', [App\Http\Controllers\Admin\MenusController::class, 'registered']);
    Route::post('/save-menu', [App\Http\Controllers\Admin\MenusController::class, 'store']);
    Route::get('/menu-table', [App\Http\Controllers\Admin\MenusController::class, 'menutable']);
    Route::get('/menu-edit/{id}', [App\Http\Controllers\Admin\MenusController::class, 'registeredit']);
    Route::PATCH('/menu-register-update/{id}', [App\Http\Controllers\Admin\MenusController::class, 'registerupdate']);
    Route::delete('/menu-delete/{id}', [App\Http\Controllers\Admin\MenusController::class, 'registerdelete']);
    /*End Menus*/

     /*Sliders*/
    Route::get('/slider-register', [App\Http\Controllers\Admin\SliderController::class, 'registered']);
    Route::post('/save-slider', [App\Http\Controllers\Admin\SliderController::class, 'store']);
    Route::get('/slider-table', [App\Http\Controllers\Admin\SliderController::class, 'slidertable']);
    Route::get('/slider-edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'registeredit']);
    Route::PATCH('/slider-register-update/{id}', [App\Http\Controllers\Admin\SliderController::class, 'registerupdate']);
    Route::delete('/slider-delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'registerdelete']);
    /*End Sliders*/

    /*Specials*/
    Route::get('/specials-register', [App\Http\Controllers\Admin\SpecialController::class, 'registered']);
    Route::post('/save-specials', [App\Http\Controllers\Admin\SpecialController::class, 'store']);
    Route::get('/specials-table', [App\Http\Controllers\Admin\SpecialController::class, 'specialstable']);
    Route::get('/specials-edit/{id}', [App\Http\Controllers\Admin\SpecialController::class, 'registeredit']);
    Route::PATCH('/specials-register-update/{id}', [App\Http\Controllers\Admin\SpecialController::class, 'registerupdate']);
    Route::delete('/specials-delete/{id}', [App\Http\Controllers\Admin\SpecialController::class, 'registerdelete']);
    /*End Specials*/
      
    /*Testimonials*/
    Route::get('/testimonials-register', [App\Http\Controllers\Admin\TestimonialsController::class, 'testimonials']);
    Route::post('/save-testimonials', [App\Http\Controllers\Admin\TestimonialsController::class, 'store']);
    Route::get('/testimonials-table', [App\Http\Controllers\Admin\TestimonialsController::class, 'testimonialstable']);
    Route::get('/testimonials-edit/{id}', [App\Http\Controllers\Admin\TestimonialsController::class, 'registeredit']);
    Route::PATCH('/testimonials-register-update/{id}', [App\Http\Controllers\Admin\TestimonialsController::class, 'registerupdate']);
    Route::delete('/testimonials-delete/{id}', [App\Http\Controllers\Admin\TestimonialsController::class, 'registerdelete']);
    /*End Testimonials*/

    /*Events*/
    Route::get('/events-register', [App\Http\Controllers\Admin\EventsController::class, 'events']);
    Route::post('/save-events', [App\Http\Controllers\Admin\EventsController::class, 'store']);
    Route::get('/events-table', [App\Http\Controllers\Admin\EventsController::class, 'eventstable']);
    Route::get('/events-edit/{id}', [App\Http\Controllers\Admin\EventsController::class, 'registeredit']);
    Route::PATCH('/events-register-update/{id}', [App\Http\Controllers\Admin\EventsController::class, 'registerupdate']);
    Route::delete('/events-delete/{id}', [App\Http\Controllers\Admin\EventsController::class, 'registerdelete']);
    /*End Events*/

    /*Chefs*/
    Route::get('/chefs-register', [App\Http\Controllers\Admin\ChefsController::class, 'chefs']);
    Route::post('/save-chefs', [App\Http\Controllers\Admin\ChefsController::class, 'store']);
    Route::get('/chefs-table', [App\Http\Controllers\Admin\ChefsController::class, 'chefstable']);
    Route::get('/chefs-edit/{id}', [App\Http\Controllers\Admin\ChefsController::class, 'registeredit']);
    Route::PATCH('/chefs-register-update/{id}', [App\Http\Controllers\Admin\ChefsController::class, 'registerupdate']);
    Route::delete('/chefs-delete/{id}', [App\Http\Controllers\Admin\ChefsController::class, 'registerdelete']);
    /*End Chefs*/

    /*bookings*/
    Route::get('/booking-register', [App\Http\Controllers\Admin\BookingController::class, 'booking']);
    Route::post('/save-booking', [App\Http\Controllers\Admin\BookingController::class, 'store']);
    Route::get('/booking-table', [App\Http\Controllers\Admin\BookingController::class, 'bookingtable']);
    Route::get('/booking-edit/{id}', [App\Http\Controllers\Admin\BookingController::class, 'registeredit']);
    Route::PATCH('/booking-register-update/{id}', [App\Http\Controllers\Admin\BookingController::class, 'registerupdate']);
    Route::delete('/booking-delete/{id}', [App\Http\Controllers\Admin\BookingController::class, 'registerdelete']);
    /*End Bookings*/

    /*galleries*/
    Route::get('/gallery-register', [App\Http\Controllers\Admin\GalleryController::class, 'galleries']);
    Route::post('/save-gallery', [App\Http\Controllers\Admin\GalleryController::class, 'store']);
    Route::get('/gallery-table', [App\Http\Controllers\Admin\GalleryController::class, 'galleriestable']);
    Route::get('/gallery-edit/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'galleryedit']);
    Route::PATCH('/gallery-register-update/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'registerupdate']);
    Route::delete('/gallery-delete/{id}', [App\Http\Controllers\Admin\GalleryController::class, 'registerdelete']);
    /* End galleries*/

	/*Recipe Register*/
    Route::get('/recipe-register', [App\Http\Controllers\Admin\RecipeListController::class, 'registered']);
    Route::post('/save-recipe', [App\Http\Controllers\Admin\RecipeListController::class, 'store']);
	Route::get('/recipe-table', [App\Http\Controllers\Admin\RecipeListController::class, 'recipetable']);
	Route::get('/recipe-edit/{id}', [App\Http\Controllers\Admin\RecipeListController::class, 'registeredit']);
	Route::PATCH('/recipe-register-update/{id}', [App\Http\Controllers\Admin\RecipeListController::class, 'registerupdate']);
    Route::delete('/recipe-delete/{id}', [App\Http\Controllers\Admin\RecipeListController::class, 'registerdelete']);
    /*End Recipe Register*/

    /*Role Register*/
    Route::get('/user-register', [App\Http\Controllers\Admin\UserController::class, 'userregistered']);
    Route::get('/role-register', [App\Http\Controllers\Admin\UserController::class, 'registered']);
    Route::post('/save-user', [App\Http\Controllers\Admin\UserController::class, 'store']);
    Route::get('/role-edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'registeredit']);
    Route::PATCH('/role-register-update/{id}', [App\Http\Controllers\Admin\UserController::class, 'registerupdate']);
    Route::delete('/role-delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'registerdelete']);
    Route::get('dashboard/user/changestatus/{id}',  [App\Http\Controllers\Admin\UserController::class, 'changestatus'])->name('changestatus');
    /*End Role Register*/

    /*About Page*/
    Route::get('/about-register', [App\Http\Controllers\Admin\AboutController::class, 'registered']);
    Route::post('/save-about', [App\Http\Controllers\Admin\AboutController::class, 'store']);
   	Route::get('/about-table', [App\Http\Controllers\Admin\AboutController::class, 'abouttable']);
    Route::get('/about-edit/{id}', [App\Http\Controllers\Admin\AboutController::class, 'registeredit']);
    Route::PATCH('/about-register-update/{id}', [App\Http\Controllers\Admin\AboutController::class, 'registerupdate']);
    Route::delete('/about-delete/{id}', [App\Http\Controllers\Admin\AboutController::class, 'registerdelete']);
    /*End About Page*/
});
