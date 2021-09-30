<?php

namespace App\Models;

use App\Models\Section;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
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
}

