<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormEiController;


Route::get('/formei', [FormEiController::class, 'index']);
Route::post('/submit-formei', [FormEiController::class, 'showform']);

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