<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'age',
        'address',
        'telephone',
        'created_at',
        'updated_at'
    ];
}
