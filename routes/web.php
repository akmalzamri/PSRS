<?php

    Route::get('/', 'WelcomeController@index')->name('welcome');

    Route::get('/welcome-enquiries', 'EnquiriesController@enquiries')->name('enquiries');
    Route::post('welcome-enquiries', 'EnquiriesController@store');

    Auth::routes(['verify' => true]);
// USER ROUTE

    Route::get('/home', 'HomeController@index')->name('user/home')->middleware('auth');
    Route::get('view-treatment/{id}', 'User\UserController@viewtreatment');
    Route::get('add-to-cart/{id}', 'User\UserController@addtocart');
    Route::get('cart', 'User\UserController@cart');
    Route::delete('remove-from-cart', 'User\UserController@remove');
    Route::get('/details/{treatments_id}', 'User\UserController@details')->name('user/booking-step3'); 
    Route::post('/booking4', 'User\UserController@bookingstep4')->name('user/booking-step4');
    Route::post('confirmbooking', 'User\UserController@storebooking');
    Route::get('/receipt', 'User\UserController@bookingreceipt')->name('user/booking-receipt');
    Route::get('/userprofile', 'User\UserController@userprofile')->name('user/userprofile')->middleware('verified');
    Route::get('/userprofile-update', 'User\UserController@updateprofile')->name('user/userprofile-update');
    Route::post('/userprofile-update', 'User\UserController@userprofileupdate')->name('user/userprofile');
    Route::get('/enquiries', 'User\UserController@enquiries')->name('user/enquiries');
    Route::post('enquiries', 'User\UserController@store');
    Route::get('/managebooking', 'User\UserController@managebooking')->name('user/managebooking');
    Route::delete('/remove-from-booking/{id}', 'User\UserController@removebooking');



// ADMIN ROUTE
Route::group(['middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', 'Admin\DashboardController@dashboardview');
    Route::get('/role-register', 'Admin\DashboardController@registered');
    Route::get('/admin-view-customer/{id}', 'Admin\DashboardController@adminviewcustomer');
    Route::get('/role-edit/{id}', 'Admin\DashboardController@registeredit');
    Route::put('/role-register-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/role-delete/{id}', 'Admin\DashboardController@registerdelete');

    Route::get('/register-therapist', 'Admin\DashboardController@registeredTherapist');
    Route::get('/admin-view-therapist/{id}', 'Admin\DashboardController@adminviewtherapist');
    Route::delete('/role-delete-therapist/{id}', 'Admin\DashboardController@therapistdelete');

    Route::get('/register-new-therapist', 'Admin\DashboardController@newTherapist');
    Route::get('/admin-view-newtherapist/{id}', 'Admin\DashboardController@adminviewnewtherapist');
    Route::put('/register-new-therapist-update/{id}', 'Admin\DashboardController@registerupdate');
    Route::delete('/role-delete-newtherapist/{id}', 'Admin\DashboardController@therapistdelete');

    Route::get('/admin-enquiries', 'Admin\DashboardController@adminenquiries');
    Route::get('/admin-view-enquiries/{id}', 'Admin\DashboardController@adminviewenquiries');
    Route::get('/admin-view-enquiries/{id}', 'Admin\DashboardController@replyenquiries');
    Route::post('/admin-view-enquiries', 'Admin\DashboardController@emailenquiries');
    Route::delete('/role-delete-enquiries/{id}', 'Admin\DashboardController@enquiriesdelete');

    Route::get('/admin-treatments', 'Admin\DashboardController@treatments');
    Route::get('/admin-add-treatments', 'Admin\DashboardController@addtreatments');
    Route::post('admin-add-treatments', 'Admin\DashboardController@storetreatments');
    Route::get('/admin-view-treatments/{treatments_id}', 'Admin\DashboardController@adminviewtreatments');
    Route::get('/admin-edit-treatments/{treatments_id}', 'Admin\DashboardController@treatmentsedit'); 
    Route::put('/admin-update-treatments/{treatments_id}', 'Admin\DashboardController@treatmentsupdate');
    Route::delete('/role-delete-treatments/{treatments_id}', 'Admin\DashboardController@treatmentsdelete');

    Route::get('/customerbooking', 'Admin\DashboardController@customerbooking');
    Route::delete('/role-delete-customerbooking/{id}', 'Admin\DashboardController@bookingdelete');
});


// THERAPIST ROUTE

    

    Route::get('/therapist-register', 'AuthTherapist\RegisterController@registerTherapist')->name('therapist.therapist-register');
    Route::post('/therapist-register-success', 'AuthTherapist\RegisterController@store');
    Route::get('/therapist-home', 'Therapist\TherapistController@dashboardtherapist')->name('therapist/therapist-home'); 
    Route::get('/therapistprofile', 'Therapist\TherapistController@therapistprofile')->name('therapist/therapist-profile');
    Route::get('/therapistprofile-update', 'Therapist\TherapistController@therapistupdateprofile')->name('therapist/therapist-profile-update');
    Route::post('/therapistprofile-update', 'Therapist\TherapistController@therapistprofileupdate')->name('therapist/therapist-profile');
    Route::get('/therapistmanagebooking', 'Therapist\TherapistController@managebooking')->name('therapist/therapist-managebookings');
    Route::get('/therapist-view-booking/{id}', 'Therapist\TherapistController@viewbookings');
    Route::post('/therapistmanagebooking', 'Therapist\TherapistController@emailenquiries');

    Route::get('/home', 'HomeController@index')->name('home');
