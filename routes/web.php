<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\ClientLogoController;
use App\Http\Controllers\Admin\FrequentlyAskPartOneController;
use App\Http\Controllers\Admin\FrequentlyAskPartTwoController;
use App\Http\Controllers\Admin\HomePageContactController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\MessagePartOneController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PortfolioDetailController;
use App\Http\Controllers\Admin\ProjectCountController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceDetailController;
use App\Http\Controllers\Admin\ServiceOrderController;
use App\Http\Controllers\Admin\ServicePriceController;
use App\Http\Controllers\Admin\ServiceTitleController;
use App\Http\Controllers\Admin\SocialLinkController;


use App\Http\Controllers\Admin\SystemInformationController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TeamDetailController;

use App\Http\Controllers\Admin\TestimonialPartOneController;
use App\Http\Controllers\Admin\TestimonialPartTwoController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ChooseUsController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\PrivacyPolicyController;


use App\Http\Controllers\Front\CheckoutController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\MainController;


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


Route::controller(CheckoutController::class)->group(function () {


    Route::get('/success','success')->name('success');
    Route::get('/fail','fail')->name('fail');


    Route::post('/confirm_order','confirm_order')->name('confirm_order');
    Route::get('/customer_checkout/{id}','customer_checkout')->name('customer_checkout');
});
Route::controller(MainController::class)->group(function () {

    Route::get('/propertyList','propertyList')->name('propertyList');

    Route::get('/builderList','builderList')->name('builderList');

    Route::get('/shop','shop')->name('shop');

    Route::get('/','index')->name('index');
    Route::post('/sendMessage','sendMessage')->name('sendMessage');
    Route::get('/about_us','about_us')->name('about_us');


    Route::get('/servicePdf/{id}','servicePdf')->name('servicePdf');

    Route::get('/serviceList','serviceList')->name('serviceList');
    Route::get('/serviceInformation/{id}','serviceInformation')->name('serviceInformation');


    Route::get('/projectList','projectList')->name('projectList');
    Route::get('/projectInformation/{id}','projectInformation')->name('projectInformation');


    Route::get('/teamList','teamList')->name('teamList');
    Route::get('/newsList','newsList')->name('newsList');

    Route::get('/team_detail/{id}','team_detail')->name('team_detail');

    Route::get('/blog_detail/{id}','news_detail')->name('news_detail1');


    Route::get('/contact_us','contact_us')->name('contact_us');


    Route::get('/faq','faq')->name('faq');
    Route::get('/privacy_policy','privacy_policy')->name('privacy_policy');

    Route::get('/term_and_condition','term_and_condition')->name('term_and_condition');

});

Route::controller(AuthController::class)->group(function () {

    Route::get('/loginAdmin','loginAdmin')->name('loginAdmin');
    Route::get('/registrationAdmin','registrationAdmin')->name('registrationAdmin');
});

Route::group(['prefix' => 'admin'], function () {


    Route::resource('privacyPolicy', PrivacyPolicyController::class);

Route::resource('termAndCondition', TermController::class);

    Route::resource('chooseUs', ChooseUsController::class);


    Route::resource('bannerList', BannerController::class);
    Route::resource('aboutus', AboutusController::class);
    Route::resource('clientLogo', ClientLogoController::class);
    Route::resource('frequentlyAskPartOne', FrequentlyAskPartOneController::class);
    Route::resource('frequentlyAskPartTwo', FrequentlyAskPartTwoController::class);
    Route::resource('homePageContact', HomePageContactController::class);
    Route::resource('message', MessageController::class);
    Route::resource('messagePartOne', MessagePartOneController::class);
    Route::resource('newsList', NewsController::class);
    Route::resource('portfolioDetail', PortfolioDetailController::class);
    Route::resource('portfolio', PortfolioController::class);

    Route::resource('projectCount', ProjectCountController::class);
    Route::resource('service', ServiceController::class);
    Route::resource('serviceDetail', ServiceDetailController::class);
    Route::resource('serviceOrder', ServiceOrderController::class);
    Route::resource('servicePrice', ServicePriceController::class);


Route::controller(ServicePriceController::class)->group(function () {

     Route::get('/news_detail/{id}','news_detail')->name('news_detail');


    Route::get('/tutorial_or_digital_product_add','tutorial_or_digital_product_add')->name('tutorial_or_digital_product_add');
    Route::get('/tutorial_or_digital_product_edit/{id}','tutorial_or_digital_product_edit')->name('tutorial_or_digital_product_edit');


});


    Route::resource('serviceTitle', ServiceTitleController::class);
    Route::resource('socialLink', SocialLinkController::class);
    Route::resource('team', TeamController::class);
    Route::resource('systemInformation', SystemInformationController::class);
    Route::resource('teamDetail', TeamDetailController::class);
    Route::resource('testimonialPartOne', TestimonialPartOneController::class);
    Route::resource('testimonialPartTwo', TestimonialPartTwoController::class);


    });


Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back();
});
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
