<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    
    protected $fillable = array('title','user_id');
        public function tasks()
        {
             return $this->hasMany('App\Task');
        }   
        public function user()
        {
            return $this->belongsTo('App\User');
           }
}
