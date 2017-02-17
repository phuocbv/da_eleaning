<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Index;

class Relation extends Model
{
    public function childrens()
    {
        return $this->hasMany(Index::class, 'chirden_id');
    }

    public function parent()
    {
        return $this->hasOne(Index::class, 'parent_id');
    }
}
