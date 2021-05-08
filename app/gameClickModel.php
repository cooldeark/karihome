<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gameClickModel extends Model
{
    public $timestamps = false;
    public $table="game_click";
    protected $fillable=[
        'create_time'
    ];
}
