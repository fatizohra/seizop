<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = 'favorites';
    protected $fillable =['user_id','item_id'];


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function item(){
        return $this->belongsTo('App\Category','item_id');
    }


}
