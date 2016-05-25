<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'position', 'age', 'nationality', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
