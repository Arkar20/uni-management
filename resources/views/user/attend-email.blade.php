@component('mail::message')
# Introduction

{{$user->name}} Has Join the course.

@component('mail::button', ['url' => '/'])
Go to Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
