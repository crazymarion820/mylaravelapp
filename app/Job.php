<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $fillable = [
        'name',
        'user_id',
        'duration',
        'cost'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
