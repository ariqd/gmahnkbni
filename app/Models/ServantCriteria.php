<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServantCriteria extends Pivot
{
    // use HasFactory;
    public $table = 'servant_criterias';
    public $timestamps = false;

    protected $fillable = [
        'servant_id',
        'criteria_id'
    ];
}
