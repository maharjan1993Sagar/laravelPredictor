<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    protected $fillable = [
       'home_team','away_team','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function prediction()
    {
        return $this->belongsTo(match::class);
    }
}
