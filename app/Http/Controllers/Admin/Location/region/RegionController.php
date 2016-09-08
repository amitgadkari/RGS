<?php
namespace App\Http\Controllers\Admin\Location\Region;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\State;
use App\Region;
use Validator;
class RegionController extends Controller
{
    //
 public function index()
    {
        $states=State::distinct()->pluck('name','id');
        // dd($states);
        $regions=Region::latest()->get();
         // dd($regions);
        return view('adminpanel.location.region.index',compact('regions'))->with('states',$states);  
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $states=State::distinct()->pluck('name','id');
        //dd('hello1');
        return view('adminpanel.location.region.micros.create_regions',compact('states'))->render();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('sad');
        $this->validate($request, [
        'regionname' => 'required|max:100',
        'States'=> 'exists:states,id'
        ]);
        if($request){
            $region=new Region;
            $region->name=$request->regionname;
            $region->state_id=$request->States;
            $region->employee_id='0';
            $region->save();    
         }
        
        
        return $this->show_view();
   
        //dd('hello2');
        
        //return view('adminpanel.index');    }
    }
    function show_view()
    {
        $regions=Region::latest()->get();
            return view('adminpanel.location.region.micros.show_regions',compact('regions'))->render();
    }
}