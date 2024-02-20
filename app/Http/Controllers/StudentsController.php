<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\kelas;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class StudentsController extends Controller
{
    public function all(Request $request)
    {
        $students = Student::paginate(5); 
        return view('dashboard.views.student.all', [
            "title" => "Student",
            "students" => $students,
        ]);
    }


    public function all2(Request $request)
    {
        $students = Student::paginate(5); 

        return view('student.all', [
            "title" => "Student",
            "students" => $students,
        ]);
    }

    public function create()
    {
        return view('dashboard.views.student.create', [
            "title" => "create-new-data",
            "kelas" => kelas::all()
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas_id' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            
        ]);

        $result = Student::create($validateData);

        if ($result) {
            return redirect('/dashboard/all')->with('successadd', 'Data siswa berhasil ditambahkan !');
         }

        }

        public function destroy(Student $student){
            $result = Student::destroy($student->id);

            if($result){
                return redirect('/dashboard/all')->with('successdelete', 'Data siswa berhasil dihapus !');
            }
        }

        public function edit(Student $student){
            return view('dashboard.views.student.edit', [
                "title" => "Edit Data",
                "student" => $student,
                "kelas" => kelas::all()
            ]);
            

        }

        public function update(Request $request, Student $student){

            $validateData = $request->validate([
                'nis' => 'required',
                'nama' => 'required',
                'kelas_id' => 'required',
                'alamat' => 'required',
                'tgl_lahir' => 'required',
                
            ]);

            $result = Student::where('id', $student->id)->update($validateData);

        if ($result) {
            return redirect('/dashboard/all')->with('successadd', 'Data siswa berhasil Diubah !');
         }

        }
        }
        
    

    

    

