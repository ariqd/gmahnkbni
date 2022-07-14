<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class, 'condition', 'criteria_id', 'requirement_id')->using(Condition::class)->withPivot('id');
    }

    public function servants()
    {
        return $this->belongsToMany(Servant::class, 'servant_criterias', 'criteria_id', 'servant_id')->using(ServantCriteria::class)->withPivot('id');
    }
}
