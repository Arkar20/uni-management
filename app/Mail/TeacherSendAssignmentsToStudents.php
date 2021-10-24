<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TeacherSendAssignmentsToStudents extends Mailable
{
    public $desc,$assignment_file,$due_date,$assignment_subject;

    public $user;
    public function __construct(User $user,Request $request)
    {
        $this->user=$user;
        $this->desc=$request->desc;
        $this->assignment_file=$request->assignment_file;
        $this->due_date=$request->due_date;
        $this->assignment_subject=$request->assignment_subject;
    }


    public function build()
    {
        return $this->markdown('user.assignmentmail');
    }
}
