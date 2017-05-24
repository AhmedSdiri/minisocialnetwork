<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //protected $table ='the_name_of_the_table';
    
    protected $fillable = ['user_id','content','live','post_on'];
    
    //mutator for fixing the cast problem of chechbox live
    
    public function setLiveAttribute($value)
    {
        
        $this->attributes['live'] = (boolean)($value);
    }
    
   
    
      //accessor = getter
    
       public function getShortContentAttribute()
       {
         return substr($this->content,0,random_int(60,150)).'...';
       }
}
