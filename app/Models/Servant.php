<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servant extends Model
{
    use HasFactory;

    protected $fillable = [
        'skill_id',
        'name',
    ];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }

    public function criterias()
    {
        return $this->belongsToMany(Criteria::class, 'servant_criterias', 'servant_id', 'criteria_id')->using(ServantCriteria::class)->withPivot('id');
    }
}
