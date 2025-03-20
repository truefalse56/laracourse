<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $table = 'b_jobs';

    protected $fillable = [
        'title',
        'description',
        'updated_at'
    ];

}
