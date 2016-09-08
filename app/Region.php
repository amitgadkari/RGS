<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Region extends Model
{
    //
    protected $table = 'rto_regions';
    
    public function sub_regions()
    {
        return $this->hasMany('App\Sub_Region');
    }
    public function state()
    {
        return $this->belongsTo('App\State');
    }
    public function operator_stats()
    {
        //first get list of sub regions under that section
        $sub_regions=$this->sub_regions()->get();   
            //get total count of operator in that region
            $total_counts=$sub_regions->getTotalOperators();
            //sum it 
        //
    }
}