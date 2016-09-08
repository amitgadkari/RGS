<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class State extends Model
{
    //
     protected $table = 'states';
     public function regions()
     {
     	return $this->hasMany('App\Region');
     }
}