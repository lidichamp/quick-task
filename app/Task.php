<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    public $timestamps=false;
    protected $fillable = array('title','name1','name2','description','add_date','expiry_date','project_id','complete');
    
        public function project()
        {
         return $this->belongsTo('App\Project');
        }
}
