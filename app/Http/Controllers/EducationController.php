<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Education;

class EducationController extends Controller
{
    //
    public function list()
    {
        return view('education.list', [
            'education' => Education::all()
        ]);
    }

    public function addForm()
    {
        return view('education.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'Degree' => 'required',
            'Discipline' => 'required',
            'Institute' => 'required',
            'Location' => 'required',
            'Started_at' => 'nullable',
            'Ended_at' => 'nullable',
        ]);

        $education = new Education();
        $education->Degree = $attributes['Degree'];
        $education->Discipline = $attributes['Discipline'];
        $education->Institute = $attributes['Institute'];
        $education->Location = $attributes['Location'];
        $education->Started_at = $attributes['Started_at'];
        $education->Ended_at = $attributes['Ended_at'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'Degree' => 'required',
            'Discipline' => 'required',
            'Institute' => 'required',
            'Location' => 'required',
            'Started_at' => 'nullable',
            'Ended_at' => 'nullable',
        ]);

        $education = new Education();
        $education->Degree = $attributes['Degree'];
        $education->Discipline = $attributes['Discipline'];
        $education->Institute = $attributes['Institute'];
        $education->Location = $attributes['Location'];
        $education->Started_at = $attributes['Started_at'];
        $education->Ended_at = $attributes['Ended_at'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {
        $education->delete();
        
        return redirect('/console/education/list')
            ->with('message', 'Education has been deleted!');        
    }

}
