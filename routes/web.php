
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KidderController;
use App\Http\Controllers\KidController;
use App\Http\Controllers\CourseeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

// Route::get('lay',function(){
//     return view('dashBoard.layouts.index');
// });

 Route::get('/', [KidderController::class,'home'])->name('home');
Route::get('about',[KidderController::class,'about'])->name('about');
Route::get('error',[KidderController::class, 'error'])->name('error');
//Route::get('becomeTeacher', [KidderController::class, 'becomeTeacher'])->name('becomeTeacher');
Route::get('appointment', [KidderController::class, 'appointment'])->name('appointment');
Route::get('call', [KidderController::class, 'callto'])->name('call');
//Route::get('/courses', [KidderController::class, 'create'])->name('courses.create');
//Route::get('/home', [KidderController::class, 'index'])->name('home');
//Route::post('/courses', [DashBoardController::class, 'store'])->name('courses.store');
Route::get('contact', [KidderController::class, 'contact'])->name('contact');
Route::get('facility', [KidderController::class, 'facility'])->name('facility');
Route::get('team', [KidderController::class, 'team'])->name('team');
Route::get('testimo', [KidderController::class, 'testimo'])->name('testimo');
Route::get('classes', [KidderController::class, 'classes'])->name('classes');
Route::get('welcome', function(){
    return view('welcome');
});
Route::get('about',[KidderController::class,'about'])->name('about');
Route::get('error',[KidderController::class, 'error'])->name('error');
##################################################
Route::get('/kids', [KidController::class, 'index'])->name('kids');
Route::get('/addKid', [KidController::class, 'create'])->name('addkid');
Route::post('/insertKid', [KidController::class, 'store'])->name('insertkid');
Route::get('/kids/{id}/edit', [KidController::class, 'edit'])->name('editkid');
Route::put('/kids/{id}', [KidController::class, 'update'])->name('updatekid');
Route::get('/kids/{id}', [KidController::class, 'show'])->name('showkid');
Route::delete('/kids/{id}', [KidController::class, 'destroy'])->name('delkid');
Route::get('/trash', [KidController::class, 'trash'])->name('trashkid');
###########################################################


Route::get('/coursees', [CourseeController::class, 'index'])->name('coursees');
Route::get('/addCoursee', [CourseeController::class, 'create'])->name('addCoursee');
Route::post('/insertCoursee', [CourseeController::class, 'store'])->name('insertCoursee');
Route::get('/coursees/{id}', [CourseeController::class, 'show'])->name('coursees.show');
Route::get('/coursees/{id}/edit', [CourseeController::class, 'edit'])->name('coursees.edit');
Route::put('/coursees/{id}', [CourseeController::class, 'update'])->name('coursees.update');
Route::delete('/coursees/{id}', [CourseeController::class, 'destroy'])->name('coursees.destroy');

######################################################################

// Route to display all teachers
Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers');
// Route to display the form for adding a new teacher
Route::get('/addTeacher', [TeacherController::class, 'create'])->name('addTeacher');
// Route to store a new teacher (handle form submission)
Route::post('/insertTeacher', [TeacherController::class, 'store'])->name('insertTeacher');
// Route to display a specific teacher
Route::get('/teachers/{id}', [TeacherController::class, 'show'])->name('showTeacher');
// Route to display the form for editing a teacher
Route::get('/teachers/{id}/edit', [TeacherController::class, 'edit'])->name('edit_teacher');
// Route to update a specific teacher (handle form submission)
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('update_teacher');
// Route to delete a specific teacher
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('delete_teacher');
#############################################################################


Route::get('/home', [HomeController::class, 'index'])
   ->middleware('auth') // Apply 'auth' middleware to this route
  ->name('home');

Auth::routes();


// Routes for login and logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
