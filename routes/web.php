<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DisplayContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/', function () {
    return Inertia::render('RapidTask/App');
});

Route::get('/services', function () {
    return Inertia::render('RapidTask/Services');
});

Route::get('/about', function () {
    return Inertia::render('RapidTask/About');
});

Route::get('/database', function () {
    return Inertia::render('RapidTask/Database');
});

// Route::get('/modal', function () {
//     return view('confirmation');
// });

Route::get('/contact',[ContactController::class, 'index']);

Route::post('/contact', [ContactController::class, 'send']);

Route::get('/database', [DisplayContactController::class, 'index']);

Route::delete('/contacts/{id}', [DisplayContactController::class, 'destroy'])->name('contacts.delete');

Route::get('/contacts/{id}/edit', [DisplayContactController::class, 'edit']);
Route::put('/contacts/{id}', [DisplayContactController::class,'update'])->name('editContact');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
