<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Index;
use App\ShareCourse;

class SubmitExecerse extends Model
{
    public function index()
    {
        return $this->belongsTo(Index::class);
    }

    public function shareCourse()
    {
        return $this->belongsTo(ShareCourse::class);
    }
}
