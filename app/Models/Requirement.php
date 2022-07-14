<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Requirement extends Pivot
{
    // use HasFactory;
    // public $timestamps = false;
    // public $table = 'requirement';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    public function criterias()
    {
        return $this->belongsToMany(Criteria::class, 'condition', 'requirement_id', 'criteria_id')->using(Condition::class)->withPivot('id');
    }

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function worship()
    {
        return $this->belongsTo(Worship::class);
    }
}
