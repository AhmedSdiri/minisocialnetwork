<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

//softdelete
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    
      use SoftDeletes;
    
    //protected $table ='the_name_of_the_table';
    
    protected $fillable = ['user_id','content','live','post_on'];
    
    //specify other date instance to be a carbon instance like created_at
    protected $dates = ['post_on','deleted_at'];
    
    //mutator for fixing the cast problem of checkbox live
    
    public function setLiveAttribute($value)
    {
        
        $this->attributes['live'] = (boolean)($value);
    }
    public function setPostOnAttribute($value)
    {
        $this->attributes['post_on'] = Carbon::parse($value);
    }
   
    
      //accessor = getter
    
       public function getShortContentAttribute()
       {
         return substr($this->content,0,random_int(60,150)).'...';
       }
}
