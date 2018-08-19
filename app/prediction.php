<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class prediction extends Model
{
    protected $fillable = [
       'home_team_score','away_team_score','user_id','match_id'
    ];
    public function match()
    {
        return $this->belongsTo(match::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
