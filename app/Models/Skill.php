<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function worship()
    {
        return $this->belongsToMany(Worship::class, 'requirement')->using(Requirement::class)->withPivot('id');
    }

    public function servants()
    {
        return $this->hasMany(Servant::class);
    }
}
