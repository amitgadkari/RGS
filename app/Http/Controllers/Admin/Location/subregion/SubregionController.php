<?php

namespace App\Http\Controllers\Admin\Location\subregion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Region;
use App\Sub_Region;
use Validator;
class SubregionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region)
    {
        if($region!='')
        {
            if($region=Region::find($region))
            {

                $subregions=Sub_Region::latest()->get();

        return view('adminpanel.location.subregion.index',compact('subregions','region'));
            }
        }

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'subregionname' => 'required|max:100',
        'region_id'=> 'exists:region,id'
        ]);

        if($request){
            $subregion = new Sub_Region;
            $subregion->name=$request->subregionname;
            $subregion->identifier='MH';
            $subregion->region_id=$request->region_id;
            $subregion->employee_id='0';
            $subregion->save();    
         }
        
        
        return $this->show_view();
    }

    function show_view()
    {
        $subregions=Sub_Region::latest()->get();
            return view('adminpanel.location.subregion.micros.show_Subregions',compact('subregions'))->render();
    }
}
