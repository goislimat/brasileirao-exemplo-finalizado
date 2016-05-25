<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'state', 'abbr'];

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function stadium()
    {
        return $this->hasOne(Stadium::class);
    }

    public function championships()
    {
        return $this->belongsToMany(Championship::class, 'championship_teams', 'team_id', 'championship_id');
    }
}
