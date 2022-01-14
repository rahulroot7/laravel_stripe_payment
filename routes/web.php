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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('admin-login','LoginController@index');  
Route::post('/login-submit', 'LoginController@dologin')->name('login.submit');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin common routing start here
Route::get('admin-login','Admin\LoginController@index');  
Route::post('/admin-submit', 'Admin\LoginController@dologin')->name('admin.login.submit');
//Admin common routing end here 

Route::group(['middleware' => 'auth'], function(){
    //Admin Access Only
Route::group(['middleware' => 'admin'], function(){
    Route::get('/admin/dashboard','Admin\DashboardController@index');
    Route::post('/admin-logout', 'Admin\DashboardController@logout')->name('admin.logout');
    Route::get('/admin/api/add-api', 'Admin\AdminController@add_api');
    Route::get('/admin/api/all-api', 'Admin\AdminController@all_api');
    Route::get('/admin/list/all-list', 'Admin\ListController@all_list');
    Route::get('/admin/team/all-team', 'Admin\TeamController@all_team');
    Route::get('/admin/integrations/add-integrations', 'Admin\AdminController@add_integrations');
    Route::get('/admin/integrations/all-integrations', 'Admin\AdminController@all_integrations');
    Route::get('/admin/plan/add-plan', 'Admin\PlanController@add_plan');
    Route::post('admin/plan-store','Admin\PlanController@planstore')->name('plan.store'); 
    Route::get('/admin/plan/all-plan', 'Admin\PlanController@view_plan');
    Route::get('admin/edit-plan/{id}','Admin\PlanController@edit_plan')->name('edit.plan'); 
    Route::put('admin/update-plan/{id}','Admin\PlanController@update_plan')->name('plan.update');
     Route::get('admin/plan-delete/{id}','Admin\PlanController@plan_destroy'); 
    Route::get('/admin/prospecting/all-prospecting', 'Admin\AdminController@all_prospecting');
});

 //Customer Access Only
Route::group(['middleware' => 'customer'], function(){
    Route::get('/dashboard','CustomerController@dashboard');
    Route::get('/prospecting','CustomerController@prospecting');
    Route::get('/list','CustomerController@list');
    Route::get('/team','CustomerController@team');
    Route::get('/integrations','CustomerController@integrations');
    Route::get('/api','CustomerController@api');
    Route::get('/plans','CustomerController@plans');
    Route::get('/get-free-credits','CustomerController@free_credits');
    Route::get('/add-list','UserListController@create');
    Route::post('/add-list','UserListController@store');
    Route::get('/list-edit/{id}','UserListController@list_edit');
    Route::put('/list-update/{id}','UserListController@list_update');
    Route::get('/list-delete/{id}','UserListController@list_delete');
    Route::get('/labs','CustomerController@lab');
    Route::get('/account','CustomerController@account');
    Route::put('/account-update/{id}','CustomerController@account_update');
    Route::get('/account-reset-password/{id}','CustomerController@account_reset_password');
    Route::get('/support','CustomerController@support');
    Route::get('/join-community','CustomerController@join_community');
    Route::get('/prospecting-filter/{id}','ProspectingFilterController@prospecting_filter');
    Route::post('/add-prospecting','ProspectingFilterController@add_prospecting');
    Route::get('/prospecting-list/{id}','ProspectingFilterController@prospecting_list');
    //  plan checkout
    Route::get('/checkout/{id}','PlanCheckoutController@checkout');
    Route::post('/payment', 'PlanCheckoutController@payStripe');

    Route::post('/handle-payment', 'PayPalPaymentController@handlePayment');
    Route::get('cancel-payment', 'PayPalPaymentController@paymentCancel')->name('cancel.payment');
    Route::get('payment-success', 'PayPalPaymentController@paymentSuccess')->name('success.payment');
    // end plan checkout

});

});	