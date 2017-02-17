<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Course;
use App\Relation;
use App\SubmitExecerse;

class Index extends Model
{
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function chirdens()
    {
        return $this->hasManyThrough(Index::class, Relation::class,
            'parent_id', 'children_id')->orderBy('created_at', 'desc');
    }

    public function parent()
    {
        return $this->belongsTo(Relation::class, 'chirden_id');
    }

    public function relation()
    {
        return $this->hasOne(Relation::class, 'parent_id');
    }

    public function submitExecerses()
    {
        return $this->hasMany(SubmitExecerse::class);
    }
}
