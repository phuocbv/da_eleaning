<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Course;
use App\SubmitExecerse;

class ShareCourse extends Model
{
    public function userShare()
    {
        return $this->belongsTo(User::class, 'user_share_id');
    }

    public function userReceive()
    {
        return $this->belongsTo(User::class, 'user_receive_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function submitExecerses()
    {
        return $this->hasMany(SubmitExecerse::class);
    }
}
