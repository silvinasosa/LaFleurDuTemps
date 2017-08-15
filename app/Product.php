<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ 'name', 'description', 'slug', 'price', 'category_id', 'user_id'];

    public function category(){
      return $this->belongsTo('App\Category');
    }

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function images(){
      return $this->hasMany('App\Image');
    }

  public function scopeVisibles($query)
  {
  $query->where('visible', 1);
  }

  public function scopeLatest($query){
    return $query->orderBy("id", "desc");
  }

}
