<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\LoanCalculatorController;
use App\Http\Controllers\LeaseController;


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

Route::get('/', function () {
    return view('home');
});
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/properties', [HomeController::class, 'properties'])->name('properties');
Route::get('/Oneantonio', [HomeController::class, 'book'])->name('book');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/reservation', [AppointmentController::class, 'appointments'])->name('admin.appointments');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointment.store');
Route::put('/appointments/{id}/accept', [AppointmentController::class, 'acceptAppointment'])->name('appointment.accept');

Route::delete('/appointments/{id}/cancel', [AppointmentController::class, 'cancelAppointment'])->name('appointment.cancel');

// Route::delete('/appointments/{appointment}', [AppointmentController::class, 'delete'])->name('appointment.delete');


//admin dashboard
Route::get('/showprop', [PropertiesController::class, 'index'])->name('showprop');
Route::get('/dashboard', [HomeController::class, 'index'])->name('index');

// Route::get('/leisure', [LeisureController::class, 'index'])->name('leisure.index');
Route::post('/properties', [PropertiesController::class, 'store'])->name('properties.store');
// Route::delete('/properties/{id}',[PropertiesController::class, 'destroy'])->name('property.destroy');
Route::delete('/properties/{id}', [PropertiesController::class, 'destroy'])->name('property.destroy');

Route::put('/properties/{id}', [PropertiesController::class, 'update'])->name('properties.update');
// Route::put('/leisure/{id}', [LeisureController::class, 'update'])->name('leisure.update');
// Route::delete('leisure/{leisure}', [LeisureController::class,'delete'])->name('leisure.delete');
Route::get('/concept', [ConceptController::class, 'index'])->name('concept');
Route::post('/concept', [ConceptController::class, 'store'])->name('concept.store');
Route::delete('/concepts/{id}',[ConceptController::class, 'destroy'])->name('concepts.destroy');


Route::get('/amenity', [AmenityController::class, 'index'])->name('amenity');
Route::post('/amenity', [AmenityController::class, 'store'])->name('amenity.store');


Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/contact-message', [ContactController::class, 'index'])->name('admin.index');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');


// Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
// Route::get('/email-form', function () {
//     return view('email_form');
Route::get('/inquiry', [InquiryController::class, 'send_inquiry'])->name('inquiry.store');
Route::get('/inquiries', [InquiryController::class, 'index'])->name('inquiry.index');

// routes/web.php

Route::get('/emails', [EmailController::class, 'email'])->name('admin.semail.index');
Route::get('/email/send', [EmailController::class, 'create'])->name('email.send');
Route::post('/email/send', [EmailController::class, 'send'])->name('email.send.submit');


Route::get('/forsale', [HomeController::class, 'forsale'])->name('forsale');

//


Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');
Route::post('/sales', [SaleController::class, 'store'])->name('sales.store');
Route::put('/sales/{id}', [SaleController::class, 'update'])->name('sales.update');
Route::delete('/sales/{id}', [SaleController::class, 'destroy'])->name('sales.destroy');


//
Route::get('/viewsale{id}', [HomeController::class, 'viewsale'])->name('viewsale');

//loan calculator
Route::get('/calculator', [LoanCalculatorController::class, 'index'])->name('loan.calculator.index');
Route::post('/calculate', [LoanCalculatorController::class, 'calculate'])->name('loan.calculator.calculate');

//for lease
Route::get('/lease', [LeaseController::class, 'index'])->name('lease.index');
Route::post('/leases', [LeaseController::class, 'store'])->name('lease.store');
Route::put('/lease/{id}', [LeaseController::class, 'update'])->name('lease.update');

Route::delete('/lease/{lease}', [LeaseController::class, 'destroy'])->name('lease.destroy');


//
Route::get('/viewlease{id}', [HomeController::class, 'viewlease'])->name('viewlease');

Route::get('/forlease', [HomeController::class, 'forlease'])->name('forlease');
