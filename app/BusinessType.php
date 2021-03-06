<?php

namespace QuickInmobiliario;

use Illuminate\Database\Eloquent\Model;

class BusinessType extends Model
{
  public function properties(){
    return $this->hasMany(Property::class);
  }

  public function projects(){
    return $this->hasMany(Project::class);
  }
}
