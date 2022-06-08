<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;

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

// Route::get('/', function () {
//     return view('login');
// })->name('login');

Route::group(['prefix' => 'administrator'], function () {
    Route::post('login', 'LoginController@login')->name('adminLogin');
    Route::get('signout', 'LoginController@signout')->name('signout');
});

// Route::get('signIn', 'LoginController@signIn')->name('signIn');
Route::get('signUp', 'LoginController@signUp')->name('signUp');
Route::get('forgotPassword', 'LoginController@forgotPassword')->name('forgotPassword');
Route::post('memberSignup', 'LoginController@memberSignup')->name('memberSignup');
Route::post('recoverPassword', 'LoginController@recoverPassword')->name('recoverPassword');
// Route::get('changePassword', 'LoginController@changePassword')->name('changePassword');
// Route::post('updatePassword', 'LoginController@updatePassword')->name('updatePassword');
   
// Route::post('setPassword', 'LoginController@setPassword')->name('setPassword');


//Route::group(['middleware' => 'usersession'], function () {
    
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('Finance/{id}', 'HomeController@Finance')->name('Finance');
    Route::get('Human_Resources/{id}', 'HomeController@HR')->name('Human_Resources');
    Route::get('Administration/{id}', 'HomeController@Administration')->name('Administration');
    Route::get('Land/{id}', 'HomeController@Land')->name('Land');
    Route::get('Coord_&_Protocol/{id}', 'HomeController@coord')->name('Coord_&_Protocol');
    Route::get('Information_Technology_&_Communication/{id}', 'HomeController@IT')->name('Information_Technology_&_Communication');
    Route::get('Estate/{id}', 'HomeController@Estate')->name('Estate');
    Route::get('Planning_&_Development/{id}', 'HomeController@planning')->name('Planning_&_Development');
    Route::get('Security/{id}', 'HomeController@Security')->name('Security');
    Route::get('Marketing/{id}', 'HomeController@Marketing')->name('Marketing');
    Route::get('HQ/{id}', 'HomeController@HQ')->name('HQ');
    Route::get('Parks_&_Horticulture/{id}', 'HomeController@Park')->name('Parks_&_Horticulture');
    Route::get('Legal/{id}', 'HomeController@Legal')->name('Legal');
    Route::get('Special_Project/{id}', 'HomeController@specialProject')->name('Special_Project');
    Route::get('Asset_Data/{id}', 'HomeController@specialProject')->name('Asset_Data');
    Route::get('Rumanza_Golf_Course/{id}', 'HomeController@rumanza')->name('Rumanza_Golf_Course');
    Route::get('Transfer_&_Record/{id}', 'HomeController@transferRecord')->name('Transfer_&_Record');
    Route::get('Vigilance/{id}', 'HomeController@Vigilance')->name('Vigilance');
    Route::get('Building_Control_&_Maintenance/{id}', 'HomeController@buildingControl')->name('Building_Control_&_Maintenance');
    Route::get('Traffic_Section/{id}', 'HomeController@trafficSection')->name('Traffic_Section');




    Route::get('/viewLedger/{appid}', 'HomeController@viewLedger')->name('viewLedger');
    Route::any('/challanGeneration', 'HomeController@challanGeneration')->name('challanGeneration');
    Route::get('newPassword', 'LoginController@newPassword')->name('newPassword');
    Route::post('updateNewPassword', 'LoginController@updateNewPassword')->name('updateNewPassword');
    
    Route::any('/paymentConfirmation', 'HomeController@paymentConfirmation')->name('paymentConfirmation');
    Route::get('/profile/{id}', 'HomeController@profile')->name('profile');
    Route::get('/editProfile/{id}', 'HomeController@editProfile')->name('editProfile');
    Route::post('/updateProfile', 'HomeController@updateProfile')->name('updateProfile');
    Route::get('/challancc', 'HomeController@challancc')->name('challancc');
    Route::get('/repList', 'HomeController@repList')->name('repList');
    Route::get('/transfer', 'HomeController@transfer')->name('transfer');
    Route::get('/ndc_list', 'HomeController@ndc_list')->name('ndc_list');
    Route::get('/newComplaint', 'HomeController@newComplaint')->name('newComplaint');
    Route::post('/saveComplaint', 'HomeController@saveComplaint')->name('saveComplaint');
    Route::get('/uploadChallan', 'HomeController@uploadChallan')->name('uploadChallan');
    Route::post('/saveChallan', 'HomeController@saveChallan')->name('saveChallan');
    Route::get('/payments', 'HomeController@payments')->name('payments');
    
    Route::get('/ndcView', 'HomeController@ndcView')->name('ndcView');

    Route::get('/makePayments', 'HomeController@makePayments')->name('makePayments');
    Route::any('/getChallanField', 'HomeController@getChallanField')->name('getChallanField');

    Route::any('/challanGenerationView', 'HomeController@challanGenerationView')->name('challanGenerationView');
    Route::any('/paymentConfirmationView', 'HomeController@paymentConfirmationView')->name('paymentConfirmationView');

    Route::get('/transferDocuments', 'HomeController@transferDocuments')->name('transferDocuments');
    Route::get('/plotVerification', 'HomeController@plotVerifacation')->name('plotVerification');
    Route::post('/showPlotStatus', 'HomeController@showPlotStatus')->name('showPlotStatus');
   
    Route::post('/DealerSucees', 'HomeController@DealerSucees')->name('DealerSucees');
    Route::post('/dealerStatus', 'HomeController@dealerStatus')->name('dealerStatus');
    Route::get('/transferSet', 'HomeController@transferSet')->name('transferSet');


 //});