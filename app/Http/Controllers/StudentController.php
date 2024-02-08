<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use function NunoMaduro\Collision\Exceptions\getMessage;


class StudentController extends Controllers
{

    public function index()
    {
//        $students = Student::all();
//        return view('student.show', ['students' => $students]);


        $students = Student::with('guardians')->get();
        return view('student.show', compact('students'));
    }

    public function create()
    {
//        return view('student.create');
        return view('student.create');
    }

    public function store(Request $request)
    {
//        try {
//
//            $std = Student::create($request->all());
//            dd($std);
////            return redirect()->back()->with('success', 'your message,here');
//            return redirect('students/')->with('success', 'Student Added!');
//        } catch (\Exception $th) {
//            dd($th->getMessage());
//        }
//        $student->guardians()->attach($request->input('guardians'));

        try {
            $studentData = $request->only([
                'name', 'full_name', 'dob', 'address', 'contact', 'email', 'guardian'
            ]);

            $student = Student::create($studentData);

            $guardians = [];

            for ($i = 1; $i <= 3; $i++) {
                $guardianName = $request->input("guardian{$i}_name");
                $guardianRelation = $request->input("guardian{$i}_relation");
                $guardianContact = $request->input("guardian{$i}_contact");

                if ($guardianName && $guardianRelation && $guardianContact)
                    $guardians[] = new Guardian([
                        'name' => $guardianName,
                        'relationship' => $guardianRelation,
                        'contact' => $guardianContact,
                    ]);
            }
            $student->guardians()->saveMany($guardians);

            return redirect('students')->with('success', 'Student and Guardians Added!');
        } catch (\Exception $exception) {
            return back()->withInput()->with('error', $exception->getMessage());
        }
    }

    public function show($id)
    {

        $student = Student::find($id);
        return view('student.view', ['student' => $student])->with('students', $student);
    }

    public function edit(string $id)
    {
//        $student = Student::find($id);
//        return view('student.edit', ['student' => $student])->with('students', $student);

        $student = Student::find($id);
        $guardian1 = $student->guardians->get(0);
        $guardian2 = $student->guardians->get(1);
        $guardian3 = $student->guardians->get(2);

        return view('student.edit', compact('student', 'guardian1', 'guardian2', 'guardian3'));
    }

    public function update(Request $request, $id)
    {
//        try {
//            $student = Student::find($id)->update($request->all());
//            if ($student) {
//                return redirect('students/')->with('flash_message', 'Student Update');
//            } else {
//                return redirect('students/')->with('flash_message', 'please try again');
//            }
//        } catch (\Exception $e) {
//            return redirect('students/')->with('flash_message', $e . getMessage());

        try {
            $student = Student::findOrFail($id);
            $student->update($request->all());
            return redirect('students')->with('flash_message', 'Stude                      nt Updated Successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect('students/' . $id . '/edit')->with('error', 'Failed to update student details. Please try again.');
        }
    }




    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students/')->with('flash_message', 'Student deleted!');
    }
}
