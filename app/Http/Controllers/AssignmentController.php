<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Section;
use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AssignmentRequest;
use App\Mail\TeacherSendAssignmentsToStudents;

class AssignmentController extends Controller
{
   public function store(Course $course,Request $request)
   {
    //   dd($request->sections);
   $sections=Section::whereIn('id',$request->sections)->with('students')->get();
   
    //**emialing to students logic */
   $sections->each(function($section) use ($request){
       $section->students->each(function($student) use ($request,$section){
        Mail::to($student)->send(new TeacherSendAssignmentsToStudents($student,$request));
          
       });
   });

   //* storing in database
    $sections->each(function($section) use ($request){
        $section->students->each(function($student) use ($request,$section){

                Assignment::create([
                    'assignment_subject'=>$request->assignment_subject,
                    'assignment_file'=>$request->assignment_file->storeAs('assignments',now().'-'.$request->assignment_file->getClientOriginalName()),
                    'user_id'=>$student->id,
                    'desc'=>$request->desc,
                    'due_date'=>$request->due_date
                ]);


            // Mail::to($student)->send(new TeacherSendAssignmentsToStudents($request));
            
        });
    });

   
    // foreach($sections as $section){
    //     dd($section->students);
        // Mail::to($section->student)->send(new TeacherSendAssignmentsToStudents($request));
    // }
    
       
   }
}
