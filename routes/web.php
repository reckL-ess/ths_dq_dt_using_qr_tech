<?php

use App\Http\Controllers\ComposeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentRequestController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\MyAccountController;
use App\Http\Controllers\OutgoingController;
use App\Http\Controllers\PendingController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\TrackingHistoryController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Show the document request form
Route::get('/document-request', [DocumentRequestController::class, 'showForm'])->name('document-request.form');

// Handle the document request form submission
Route::post('/document-request', [DocumentRequestController::class, 'submitForm'])->name('document-request.submit');

//Route for login and register form
Auth::routes();

// Define a home route
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

// Define other routes...

//Route::get('/dashboard', [DocumentController::class, 'dashboard'])->name('dashboard');
Route::get('/generate-qr/{document}', [DocumentController::class, 'generateQrCode'])->name('generate-qr');
Route::post('/store-document', [DocumentController::class, 'storeDocument'])->name('store-document');

//Route::resource('trackings', 'TrackingController');
//Route::resource('requests', 'RequestController');

//Route::get('/dashboard/request', [DashboardController::class, 'showRequest'])->name('dashboard.request');
//Route::get('/dashboard/track', [DashboardController::class, 'showTrack'])->name('dashboard.track');
//Route::get('/dashboard/history', [DashboardController::class, 'showHistory'])->name('dashboard.history');

Route::middleware(['auth'])->group(function () {
    // Sidebar routes
    Route::get('/Compose', [ComposeController::class, 'index'])->name('Compose');
    Route::get('/Pending', [PendingController::class, 'index'])->name('Pending');
    Route::get('/Outgoing', [OutgoingController::class, 'index'])->name('Outgoing');
    Route::get('/Tracking', [TrackingController::class, 'index'])->name('Tracking');
    Route::get('/Outgoing', [OutgoingController::class, 'index'])->name('Outgoing');
    Route::get('/TrackingHistory', [TrackingHistoryController::class, 'index'])->name('TrackingHistory');
    Route::get('/Maintenance', [MaintenanceController::class, 'index'])->name('Maintenance');
    Route::get('/UserManagement', [UserManagementController::class, 'index'])->name('UserManagement');
    Route::get('/Tracking', [TrackingController::class, 'index'])->name('Tracking');
    Route::get('/Incoming', [IncomingController::class, 'index'])->name('Incoming');
    Route::get('/Reports', [ReportsController::class, 'index'])->name('Reports');
    Route::get('/MyAccount', [MyAccountController::class, 'index'])->name('MyAccount');

    // Add other routes accessible by non-admin users here

    // Define a root URL route for non-admin users
    Route::get('/', [HomeController::class, 'index'])->name('bahay');
});

// Other routes...
Route::get('/tracking', 'TrackingController@index');
Route::get('/transaction-history', 'TransactionHistoryController@index');
Route::get('/maintenance', 'MaintenanceController@index');
Route::get('/reports', 'ReportsController@index');
Route::get('/user-management', 'UserManagementController@index');
Route::get('/my-account', 'MyAccountController@index');
Route::get('document/qr/{id}', [DocumentController::class, 'generateQR'])->name('document.qr');

// routes/web.php

Route::middleware(['auth'])->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // User Dashboard
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});



Route::get('/documents', [DocumentController::class, 'index'])->name('documents.index');
//Route::get('/requests', [RequestController::class, 'index'])->name('requests.index');
Route::get('/qr', [QRCodeController::class, 'index'])->name('qr.index');
Route::post('request-document', [DocumentController::class, 'requestDocument'])->name('request.document');
Route::get('generate-qr/{document}', [QRCodeController::class, 'generateQR'])->name('generate.qr');

// Define other routes...
// Define the route to generate a QR code for a document
Route::get('documents/{document}/generate-qrcode', [DocumentController::class, 'generateQrCode'])->name('documents.generateQrCode');

// Define a root URL route
Route::get('/', [PortalController::class, 'index'])->name('bahay');


            //Not Used route!!!!!!!!

// Define the route for /auth/login
// Define routes for admin login
//Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login.form');
//Route::post('admin/login', [LoginController::class, 'login'])->name('admin.login');

// Other routes...

//Route::get('/home', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Define routes for views directly (consider using controllers)
//Route::get('/homeController@index', [HomeController::class, 'index'])->name('home.view');

//Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');
