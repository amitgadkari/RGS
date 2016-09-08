<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Sub_Region extends Model
{
    protected $table = 'rto_subregions';
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
    public function cities()
    {
        return $this->hasMany('App\City');
    }
    public function getTotalOperators()
    {
        //first get cities in that region
            $total_operators_in_region = App\City::withCount('operators')->get();
            dd($total_operators_in_region);
        //
    }
}