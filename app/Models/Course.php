<?php

namespace App\Models;

use App\Models\Exam;
use App\Models\Section;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $withCount=['sections'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }


    public function getStartDate()
    {
        return date('d-M-Y', strtotime($this->start_date));
    }
    public function getEndDate()
    {
        return date('d-M-Y', strtotime($this->end_date));

    }
    public function getStartDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
    public function getEndDateAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d');
    }
    public function duration()
    {
        $startdate=Carbon::parse($this->start_date)->floorMonth();
        $enddate=Carbon::parse($this->end_date)->floorMonth();

        return $startdate->diffInMonths($enddate);  // returns 1

    }
    public function getCourseImg()
    {
        return $this->course_img?:'/student/assets/img/our-work-05.jpg';
    }
    public function getTaxPrice()
    {
        return ($this->price*5.4)/100;
    }
    public function getTotalAmount()
    {
        return $this->price+$this->getTaxPrice();
    }
}

