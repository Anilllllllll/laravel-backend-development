<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormEiController;
use App\Http\Controllers\UploadEIController;
use App\Http\Controllers\EmailEIController;

// Route::get('/formei', [FormEiController::class, 'index']);
// Route::post('/submit-formei', [FormEiController::class, 'showform']);

// 

// 1. Creation of basic form- view
// 2. creation of controler with form view
// 3. create route for same -get and POST
// 4. check 419 page expired
// 5. include security token csrf
// 6. add missing data context in return statement when no value eneterd in form
// 7. Include validation with in built function
// 8. Include error directive inform for showing error
// 9. Form repopulation (old input) in the code

// 



// Route::get('/upload', [UploadEIController::class, 'show']);
// Route::post('/upload', [UploadEIController::class, 'upload']);

// Route::get('/',function()
// {
//     return view('homeEI');
// }
// );

// Route::get('/', function () {
//     return view('homeEI'); // FIXED
// });

// Route::get('/lang/{locale}', function ($locale) {

//     $allowed = ['en', 'hi', 'ta', 'pa']; // FIXED

//     if (in_array($locale, $allowed)) {
//         session(['locale' => $locale]);
//     }

//     return redirect()->back();
// });
Route::get('/send-email', [EmailEIController::class, 'send']);