<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $fillable = ['name', 'number_of_teams', 'prize', 'type'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'championship_teams', 'championship_id', 'team_id');
    }
}
