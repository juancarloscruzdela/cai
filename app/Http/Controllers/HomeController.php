<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function students()
    {
        $students = User::where('id', '!=', auth()->id())->get();
        return view('students')->with('students',$students);
    }
    public function viewStudent($id){
        $students = User::where('id', '!=', auth()->id())->get();
        $student = User::where('id', '=', $id )->get();
        Log::info($student);
        return view('view-student')->with('student',$student)->with('students',$students);
    }
    public function addStudent(Request $data)
    {
        User::create([
            'id' => $data['studentId'],
            'accountType' => $data['accountType'],
            'username' => $data['username'],
            'firstName' => $data['firstName'],
            'middleName' => $data['middleName'],
            'lastName' => $data['lastName'],
            'grade' => $data['grade'],
            'section' => $data['section'],
            'age' => $data['age'],
            'password' => Hash::make($data['password'])
        ]);

        return $this->students();
    }
    public function updateStudent(Request $request){
        $student = User::find($request->studentId);
        $student->firstName = $request->firstName;
        $student->middleName = $request->middleName;
        $student->lastName = $request->lastName;
        $student->username = $request->username;
        $student->password = Hash::make($request->password);
        $student->save();
    }
    public function deleteStudent($id){
        Log::info($id);
        User::destroy($id);
    }
    public function multiAction(Request $request)
    {
        switch ($request->input('action')) {
            case 'add' :
                // Add new model
                $this->addStudent($request);
                break;
            case 'save':
                // Save model
                $this->updateStudent($request);
                return redirect('/students');
                break;

            case 'delete':
                $this->deleteStudent($request->studentId);
                return redirect('/students');
                break;
        }
    }
}
