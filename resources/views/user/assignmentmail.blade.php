@component('mail::message')
# Introduction


Hello <b>{{$user->name}}</b>,

    You have got a new Assignment. <b>{{$assignment_subject}}</b>

    ## Click Here to Download Assignment
        <a href="{{asset($assignment_file)}}">Download Assignment</a>    

{{$desc}}

<b><small>Due Date :{{$due_date}}</small></b>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
