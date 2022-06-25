<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worship extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'name',
        'day',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
