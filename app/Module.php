<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'id', 
        'activity_id', 
        'title', 
        'percentage',
        'description', 
        'start', 
        'end', 
        'status', 
        'priority', 
        'created', 
        'modified'
    ];

    public function users()
    {
        return $this->belongsToMany('\App\User', 'activity_tags', 'activity_id', 'friend_id');
    }

    public function activity()
    {
        return $this->belongsTo('App\Activty');
    }

    public function submodules()
    {
        return $this->hasMany('App\SubModule');
    }
}