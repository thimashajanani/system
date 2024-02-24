<?php

namespace App\Http\Controllers;

use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class StudentController extends Controllers
{
    public function index()
    {
//        dd("SAssAS");
        $students = Student::with('guardians')->get();
        return view('student.show', compact('students'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
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
            return response()->json(['success' => true, 'message' => 'Student and Guardians Added!', 'student_id' => $student->id]);
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'error' => $exception->getMessage()]);
        }
    }

    public function show($id)
    {
        $student = Student::find($id);
        return view('student.view', ['student' => $student])->with('students', $student);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        $guardian1 = $student->guardians->get(0);
        $guardian2 = $student->guardians->get(1);
        $guardian3 = $student->guardians->get(2);

        return view('student.edit', compact('student', 'guardian1', 'guardian2', 'guardian3'));
        $student = Student::findOrFail($id);
          //return response()->json($student);

        try {
            return response()->json(['success' => true, 'message' => 'Student and Guardians Updated!', 'student_id' => $student->id]);
        } catch (\Exception $exception) {
            return response()->json(['success' => false, 'error' => $exception->getMessage()]);
        }  $student = Student::with('guardians')->findOrFail($id);
    }

//    public function update(Request $request, $id)
//    {
//        // dd($request->all());
//        try {
//            $student = Student::findOrFail($id);
//            $student->update($request->all());
//            if ($request->ajax()) {
//                return response()->json(['success' => true, 'message' => 'Student Updated Successfully']);
//            }
//            return redirect('students')->with('flash_message', 'Student Updated Successfully');
//        } catch (\Exception $e) {
//            Log::error($e->getMessage());
//            if ($request->ajax()) {
//                return response()->json(['success' => false, 'error' => 'Failed to update student details. Please try again.']);
//            }
    public function update(Request $request, $id)
    {
        try {
            $student = Student::findOrFail($id);
            $student->update($request->all());
            return redirect()->route('students.show', $student->id)->with('success', 'Student updated successfully');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'Failed to update student details. Please try again.');
        }
    }
           // return redirect('students/' . $id . '/edit')->with('error', 'Failed to update student details. Please try again.');
       // }
//            return response()->json(['success' => true, 'message' => 'Student Updated Successfully']);
//        } catch (\Exception $e) {
//            Log::error($e->getMessage());
//            // Return error response
//            return response()->json(['success' => false, 'error' => 'Failed to update student details. Please try again.']);


    public function destroy($id)
    {
        Student::destroy($id);
        return redirect('students/')->with('flash_message', 'Student deleted!');
    }
}
