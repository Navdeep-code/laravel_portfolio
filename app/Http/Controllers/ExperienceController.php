<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Experience;


class ExperienceController extends Controller
{
    //
    public function list()
    {
        return view('experience.list', [
            'experience' => Experience::all()
        ]);
    }

    public function addForm()
    {
        return view('experience.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'Company' => 'required',
            'Title' => 'required',
            'Start' => 'nullable',
            'End' => 'nullable',
            'Location' => 'required',
            'Description' => 'required',
        ]);

        $experience = new Experience();
        $experience->Company = $attributes['Company'];
        $experience->Title = $attributes['Title'];
        $experience->Start = $attributes['Start'];
        $experience->End = $attributes['End'];
        $experience->Location = $attributes['Location'];
        $experience->Description = $attributes['Description'];
        $experience->save();

        return redirect('/console/experience/list')
            ->with('message', 'Experience has been added!');
    }

    public function editForm(Experience $experience)
    {
        return view('experience.edit', [
            'experience' => $experience,
        ]);
    }

    public function edit(Experience $experience)
    {

        $attributes = request()->validate([
            'Company' => 'required',
            'Title' => 'required',
            'Start' => 'nullable',
            'End' => 'nullable',
            'Location' => 'required',
            'Description' => 'required',
        ]);

        $experience->Company = $attributes['Company'];
        $experience->Title = $attributes['Title'];
        $experience->Start = $attributes['Start'];
        $experience->End = $attributes['End'];
        $experience->Location = $attributes['Location'];
        $experience->Description = $attributes['Description'];
        $experience->save();

        return redirect('/console/experience/list')
            ->with('message', 'experience has been edited!');
    }

    public function delete(Experience $experience)
    {
        $experience->delete();
        
        return redirect('/console/experience/list')
            ->with('message', 'Experience has been deleted!');        
    }
}
