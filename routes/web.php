<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Default Laravel welcome route (can be removed if not needed)
Route::get('/', function () {
    return view('welcome');
});

// Dashboard route with authentication middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes with authentication middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include authentication routes
require __DIR__.'/auth.php';

// --- Your Custom Routes ---

// Home page route
Route::get('/', function () {
    return view('project.home', ['title' => 'Welcome Home']);
});

// Projects page route with sample product data
Route::get('/project', function () {
    $projects = [
        // Each project includes name, price, id, image, author, and discount
        ["name" => "DotNETFrameworkBook", "price" => 85, "id" => "1", "image" => "https://books.goalkicker.com/DotNETFrameworkBook/DotNETFrameworkGrow.png", "discount" => "15% Off"],
        ["name" => "AlgorithmsBook", "price" => 70, "id" => "2", "image" => "https://books.goalkicker.com/AlgorithmsBook/AlgorithmsGrow.png","discount" => "10% Off"],
        ["name" => "AndroidBook", "price" => 65, "id" => "3", "image" => "https://books.goalkicker.com/AndroidBook/AndroidGrow.png", "discount" => "5% Off"],
        ["name" => "Angular2Book", "price" => 98, "id" => "4", "image" => "	https://books.goalkicker.com/Angular2Book/Angular2Grow.png", "discount" => "10% Off"],
        ["name" => "GitBook", "price" => 50, "id" => "5", "image" => "https://books.goalkicker.com/GitBook/GitGrow.png", "discount" => "20% Off"],
        ["name" => "MySQLBook", "price" => 85, "id" => "6", "image" => "https://books.goalkicker.com/MySQLBook/MySQLGrow.png",  "discount" => "15% Off"],
        ["name" => "NodeJSBook", "price" => 70, "id" => "7", "image" => "	https://books.goalkicker.com/NodeJSBook/NodeJSGrow.png", "discount" => "10% Off"],
        ["name" => "PHPBook", "price" => 65, "id" => "8", "image" => "https://books.goalkicker.com/PHPBook/PHPGrow.png","discount" => "5% Off"],
        ["name" => "JavaScriptBook", "price" => 98, "id" => "9", "image" => "	https://books.goalkicker.com/JavaScriptBook/JavaScriptGrow.png", "discount" => "10% Off"],
        ["name" => "PythonBook", "price" => 50, "id" => "10", "image" => "https://books.goalkicker.com/PythonBook/PythonGrow.png", "discount" => "20% Off"],
    ];

    return view('project.project', ['title' => "Best Seller Books", "projects" => $projects]);
});

// Contact page route
Route::get('/contact', function () {
    return view('project.contact', ['title' => 'Contact Us']);
});

// Show data tact page route
Route::get('/project/{id}', function () {
    return view('project.show', ['title' => 'Show data']);
});
