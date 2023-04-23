<?php

use App\Models\Project;
use App\Models\MyProject;
use App\Models\Skill;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\MyProjectsController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', [
        'myprojects' => MyProject::all(),
        'skills' => Skill::all()
    ]);
});

Route::get('/myproject/{myproject:id}', function (MyProject $myproject) {
    return view('myproject', [
        'myproject' => $myproject,
    ]);
})->where('myproject', '[A-z\-]+');

Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard'])->middleware('auth');

Route::get('/console/projects/list', [ProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/projects/add', [ProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/projects/add', [ProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/projects/edit/{project:id}', [ProjectsController::class, 'editForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/edit/{project:id}', [ProjectsController::class, 'edit'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/delete/{project:id}', [ProjectsController::class, 'delete'])->where('project', '[0-9]+')->middleware('auth');
Route::get('/console/projects/image/{project:id}', [ProjectsController::class, 'imageForm'])->where('project', '[0-9]+')->middleware('auth');
Route::post('/console/projects/image/{project:id}', [ProjectsController::class, 'image'])->where('project', '[0-9]+')->middleware('auth');

Route::get('/console/users/list', [UsersController::class, 'list'])->middleware('auth');
Route::get('/console/users/add', [UsersController::class, 'addForm'])->middleware('auth');
Route::post('/console/users/add', [UsersController::class, 'add'])->middleware('auth');
Route::get('/console/users/edit/{user:id}', [UsersController::class, 'editForm'])->where('user', '[0-9]+')->middleware('auth');
Route::post('/console/users/edit/{user:id}', [UsersController::class, 'edit'])->where('user', '[0-9]+')->middleware('auth');
Route::get('/console/users/delete/{user:id}', [UsersController::class, 'delete'])->where('user', '[0-9]+')->middleware('auth');

Route::get('/console/types/list', [TypesController::class, 'list'])->middleware('auth');
Route::get('/console/types/add', [TypesController::class, 'addForm'])->middleware('auth');
Route::post('/console/types/add', [TypesController::class, 'add'])->middleware('auth');
Route::get('/console/types/edit/{type:id}', [TypesController::class, 'editForm'])->where('type', '[0-9]+')->middleware('auth');
Route::post('/console/types/edit/{type:id}', [TypesController::class, 'edit'])->where('type', '[0-9]+')->middleware('auth');
Route::get('/console/types/delete/{type:id}', [TypesController::class, 'delete'])->where('type', '[0-9]+')->middleware('auth');


Route::get('/console/skills/list', [SkillsController::class, 'list'])->middleware('auth');
Route::get('/console/skills/add', [SkillsController::class, 'addForm'])->middleware('auth');
Route::post('/console/skills/add', [SkillsController::class, 'add'])->middleware('auth');
Route::get('/console/skills/edit/{skill:id}', [SkillsController::class, 'editForm'])->where('skill', '[0-9]+')->middleware('auth');
Route::post('/console/skills/edit/{skill:id}', [SkillsController::class, 'edit'])->where('skill', '[0-9]+')->middleware('auth');
Route::get('/console/skills/delete/{skill:id}', [SkillsController::class, 'delete'])->where('skill', '[0-9]+')->middleware('auth');

Route::get('/console/myprojects/list', [MyProjectsController::class, 'list'])->middleware('auth');
Route::get('/console/myprojects/add', [MyProjectsController::class, 'addForm'])->middleware('auth');
Route::post('/console/myprojects/add', [MyProjectsController::class, 'add'])->middleware('auth');
Route::get('/console/myprojects/edit/{myproject:id}', [MyProjectsController::class, 'editForm'])->where('myproject', '[0-9]+')->middleware('auth');
Route::post('/console/myprojects/edit/{myproject:id}', [MyProjectsController::class, 'edit'])->where('myproject', '[0-9]+')->middleware('auth');
Route::get('/console/myprojects/delete/{myproject:id}', [MyProjectsController::class, 'delete'])->where('myproject', '[0-9]+')->middleware('auth');
Route::get('/console/myprojects/image/{myproject:id}', [MyProjectsController::class, 'imageForm'])->where('myproject', '[0-9]+')->middleware('auth');
Route::post('/console/myprojects/image/{myproject:id}', [MyProjectsController::class, 'image'])->where('myproject', '[0-9]+')->middleware('auth');

Route::get('/console/experience/list', [ExperienceController::class, 'list'])->middleware('auth');
Route::get('/console/experience/add', [ExperienceController::class, 'addForm'])->middleware('auth');
Route::post('/console/experience/add', [ExperienceController::class, 'add'])->middleware('auth');
Route::get('/console/experience/edit/{experience:id}', [ExperienceController::class, 'editForm'])->where('experience', '[0-9]+')->middleware('auth');
Route::post('/console/experience/edit/{experience:id}', [ExperienceController::class, 'edit'])->where('experience', '[0-9]+')->middleware('auth');
Route::get('/console/experience/delete/{experience:id}', [ExperienceController::class, 'delete'])->where('experience', '[0-9]+')->middleware('auth');

Route::get('/console/education/list', [EducationController::class, 'list'])->middleware('auth');
Route::get('/console/education/add', [EducationController::class, 'addForm'])->middleware('auth');
Route::post('/console/education/add', [EducationController::class, 'add'])->middleware('auth');
Route::get('/console/education/edit/{education:id}', [EducationController::class, 'editForm'])->where('education', '[0-9]+')->middleware('auth');
Route::post('/console/education/edit/{education:id}', [EducationController::class, 'edit'])->where('education', '[0-9]+')->middleware('auth');
Route::get('/console/education/delete/{education:id}', [EducationController::class, 'delete'])->where('education', '[0-9]+')->middleware('auth');
