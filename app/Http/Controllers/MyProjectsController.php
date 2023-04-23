<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\MyProject;
use App\Models\Type;

class MyProjectsController extends Controller
{
    //
    public function list()
    {
        return view('myprojects.list', [
            'myprojects' => MyProject::all()
        ]);
    }

    public function addForm()
    {
        return view('myprojects.add', [
            'types' => Type::all(),
        ]);
    }
    
    public function add()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'url' => 'nullable',
            'date' => 'nullable',
            'type_id' => 'required',
        ]);

        $myproject = new MyProject();
        $myproject->title = $attributes['title'];
        $myproject->content = $attributes['content'];
        $myproject->url = $attributes['url'];
        $myproject->date = $attributes['date'];
        $myproject->type_id = $attributes['type_id'];
        $myproject->user_id = Auth::user()->id;
        $myproject->save();

        return redirect('/console/myprojects/list')
            ->with('message', 'Project has been added!');
    }

    public function editForm(MyProject $myproject)
    {
        return view('myprojects.edit', [
            'myproject' => $myproject,
            'types' => Type::all(),
        ]);
    }

    public function edit(MyProject $myproject)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'url' => 'nullable',
            'date' => 'nullable',
            'type_id' => 'required',
        ]);

        $myproject->title = $attributes['title'];
        $myproject->content = $attributes['content'];
        $myproject->url = $attributes['url'];
        $myproject->date = $attributes['date'];
        $myproject->save();

        return redirect('/console/myprojects/list')
            ->with('message', 'Project has been edited!');
    }

    public function delete(MyProject $myproject)
    {

        if($myproject->image)
        {
            Storage::delete($myproject->image);
        }
        
        $myproject->delete();
        
        return redirect('/console/myprojects/list')
            ->with('message', 'Project has been deleted!');        
    }

      public function imageForm(MyProject $myproject)
    {
        return view('myprojects.image', [
            'myproject' => $myproject,
        ]);
    }

    public function image(MyProject $myproject)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        if($myproject->image)
        {
            Storage::delete($myproject->image);
        }
        
        $path = request()->file('image')->store('myprojects');

        $myproject->image = $path;
        $myproject->save();
        
        return redirect('/console/myprojects/list')
            ->with('message', 'Project image has been edited!');
    }

}
