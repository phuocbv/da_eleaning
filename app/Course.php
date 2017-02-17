<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Category;
use App\Index;
use App\ShareCourse;

class Course extends Model
{
    public function indexs()
    {
        return $this->hasMany(Index::class);
    }

    public function shareCourses()
    {
        return $this->hasMany(ShareCourse::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
