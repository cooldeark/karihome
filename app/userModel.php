<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    public $timestamps = false;

    public $table="karihome_user";
    protected $fillable=[
        'name','sex','birth','identityID','phone','address','whichStore','facebook_id'
    ];
}
