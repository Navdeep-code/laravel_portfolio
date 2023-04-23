<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Type;
use App\Models\User;
use App\Models\Project;
use App\Models\MyProject;
use App\Models\Skill;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', function(){

    $types = Type::orderBy('title')->get();
    return $types;

});

Route::get('/myprojects', function(){

    $myprojects = MyProject::orderBy('date')->get();

    foreach($myprojects as $key => $myproject)
    {
        $myprojects[$key]['user'] = User::where('id', $myproject['user_id'])->first();
        $myprojects[$key]['type'] = Type::where('id', $myproject['type_id'])->first();

        if($myproject['image'])
        {
            $myprojects[$key]['image'] = env('APP_URL').'storage/'.$myproject['image'];
        }
    }

    return $myprojects;

});

Route::get('/myprojects/profile/{myproject?}', function(MyProject $myproject){

    $myproject['user'] = User::where('id', $myproject['user_id'])->first();
    $myproject['type'] = Type::where('id', $myproject['type_id'])->first();

    if($myproject['image'])
    {
        $myproject['image'] = env('APP_URL').'storage/'.$myproject['image'];
    }

    return $myproject;

});

