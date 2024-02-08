<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use Illuminate\Http\Request;

class GuardianController extends Controller
{

    public function index()
    {
        $guardians = Guardian::all();
//        dd($guardians);
        return view('guardian.show', ['guardians' => $guardians]);


        $students =[
            'student_id' =>[]
        ];
        $guardian->students()->sync($request->students);

//        $guardians = Guardian::with('students')->get();
//        return view('guardian.show', compact('guardians'));
    }

    public function create()
    {

        return view('guardian.create');
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();
            Guardian::create($input);
//            return redirect()->back()->with('success', 'your message,here');
            return redirect('guardians/')->with('success', 'Guardian Added!');
        } catch (\Exception $th) {
            dd($th->getMessage());
        }
        $guardian->students()->attach($request->input('students'));
    }


    public function show($id)
    {
        $guardian = Guardian::find($id);
        return view('guardian.show', ['guardian' => $guardian]);
    }


    public function edit(String $id)
    {
        $guardian = Guardian::find($id);
        return view('guardian.edit', compact('guardian'));
    }


    public function update(Request $request, $id)
    {
        try {
            $guardian = Guardian::find($id)->update($request->all());
            if ($guardian) {
                return redirect('guardians/')->with('flash_message', 'Guardian Update');
            } else {
                return redirect('guardians/')->with('flash_message', 'please try again');
            }
        } catch (\Exception $e) {
            return redirect('guardians/')->with('flash_message', $e . getMessage());
        }
    }

    public function destroy($id)
    {
        Guardian::destroy($id);
        return redirect('guardians/')->with('flash_message', 'Guardian deleted!');
    }
}
