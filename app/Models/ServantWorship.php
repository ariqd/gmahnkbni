<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServantWorship extends Pivot
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = true;
    public $table = 'servant_worships';

    protected $fillable = [
        'servant_id',
        'worship_id',
        'assign_date',
    ];
}
