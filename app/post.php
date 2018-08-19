<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'title','description','posted_date','posted_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
