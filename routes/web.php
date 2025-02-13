<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin', function () {
    return view('admin_home');
})->middleware('checkPassword');  







use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\ServeController;
use App\Http\Controllers\ArticalController;
use App\Http\Controllers\SendController;
use App\Http\Controllers\LoginController;




Route::get('/new_appointment', [AppointmentController::class, 'create'])->name('new.store');
Route::post('/new_appointment', [AppointmentController::class, 'store'])->name('new.store');
Route::get('/get-times-for-date', [AppointmentController::class, 'avillable_time'])->name('getTimesForDate');
Route::post('appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/appointments/search', [AppointmentController::class, 'searchByNationalId'])->name('getAppointmentsByNationalId');
Route::get('/doctors', [DoctorController::class, 'show'])->name('doctor.create');
Route::get('/serves', [ServeController::class, 'serves']);
Route::get('/articals', [ArticalController::class, 'show']);
Route::get('/send', [SendController::class, 'send']);
Route::post('send_Q', [SendController::class, 'store'])->name('send.store');
Route::get('/my_appointments', [UserController::class, 'dates']);
Route::get('/rates', [RateController::class, 'rates']);
Route::post('add_rate', [RateController::class, 'store'])->name('rates.store');
Route::post('/payment', [PayController::class, 'payment'])->name('payment');
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login_check', [LoginController::class, 'check_password'])->name('login.check');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');





//  controll panel 
Route::middleware(['checkPassword'])->group(function () {
    Route::get('/controll', [DoctorController::class, 'index'])->name('appointments.index');
    Route::post('add', [DoctorController::class, 'store'])->name('appointments.store');
    Route::delete('/appointments/{id}', [DoctorController::class, 'destroy'])->name('appointments.destroy');
    Route::get('/patient_appointments', [DoctorController::class, 'patient_appointments'])->name('appointments.index');
    Route::delete('/appointment_delete/{id}', [DoctorController::class, 'destroy_a'])->name('apps.destroy');
    Route::get('/doctor_controll', [DoctorController::class, 'controll']);
    Route::post('doctor_add', [DoctorController::class, 'store_d'])->name('doctor.store');
    Route::post('doctor_delete', [DoctorController::class, 'destroy_d'])->name('doctor.destroy');
    Route::get('/serves_controll', [ServeController::class, 'serves_controll']);
    Route::get('destroy', [ServeController::class, 'serves_controll'])->name('serves.destroy');
    Route::post('add_serve', [ServeController::class, 'store'])->name('serves.store');
    Route::delete('/serves/{id}', [serveController::class, 'destroy'])->name('serves.destroy');
    Route::get('/add_artical_view', [ArticalController::class, 'add_artical']);
    Route::post('add_artical', [ArticalController::class, 'store'])->name('artical.store');
    Route::delete('/artical_d/{id}', [ArticalController::class, 'destroy'])->name('artical.destroy');
    Route::post('add_artical', [ArticalController::class, 'store'])->name('artical.store');
    Route::get('/show_Q', [SendController::class, 'show']);
    Route::post('answer/store', [SendController::class, 'store_A'])->name('answer.store');
    Route::post('post_pass', [UserController::class, 'post_pass'])->name('pass.store');
    Route::get('update_pass', [UserController::class, 'update_pass'])->name('update.store');

    });