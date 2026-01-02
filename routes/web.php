<?php

use Illuminate\Support\Facades\Route;
use App\Models\Archive;
use App\Models\Contact;
use Illuminate\Http\Request;

Route::get('/', function () {

    $latestEdition = Archive::where('is_featured',false)->latest()->first();
    $feauturedEdition = Archive::where('is_featured',true)->first();
    return view('welcome',compact('latestEdition','feauturedEdition'));
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::resource('admin-archives', App\Http\Controllers\ArchiveController::class);
    Route::resource('categories',App\Http\Controllers\CategoryController::class);
    Route::resource('settings',App\Http\Controllers\SettingsController::class);
    Route::resource('social-links',App\Http\Controllers\SocialMediaLinksController::class);


});

// Route::middleware(['auth', 'permission:users.edit'])->group(function () {
//         Route::resource('users',App\Http\Controllers\UsersController::class);
// });

Route::middleware(['auth'])->group(function () {
        Route::resource('users',App\Http\Controllers\UsersController::class);
});


Route::resource('archives', App\Http\Controllers\Pages\ArchiveController::class);
Route::get('about', function(){
    return view('about');
})->name('about');

Route::get('contact-us',function(){
    return view('contact-us');
})->name('contact-us');

Route::post('contact-us',function(Request $request){
     $validated = $request->validate(
    [
        'name' => 'required',
        'company_email' => 'required|email',
        'email' => 'required|email',
        'numeric_field' => 'required|digits_between:8,15',
        'message' => 'required',
    ],
    [
            'company_email.required' => 'Company email is required',
            'company_email.email' => 'Enter a valid company email',

            'email.required' => 'Email is required',
            'email.email' => 'Enter a valid email address',

            'numeric_field.required' => 'Phone number is required',
            'numeric_field.min' => 'Phone number must be at least 8 digits',

            'message.required' => 'Please write your enquiry',
        ]
    );
    if($contact = Contact::create([
            'name' => $request->name,
            'company_email' => $request->company_email,
            'email' => $request->email,
            'numeric_field' => $request->numeric_field,
            'message' => $request->message,
        ])){
            return redirect()->back()->with('success','Thank you for contacting Us.');
        }else{
            return redirect()->back()->with('error','Sorry!! please try again later');
        }
})->name('contact');


Route::get('subscribe', function(){
    return view('subscribe');
})->name('subscribe');

Route::get('donate', function(){
    return view('donate');
})->name('donate');

Route::get('donate-amount',function(){
    return view('donate-amount');
})->name('donate-page');





// Auth::routes();
Auth::routes(['register' => false]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
