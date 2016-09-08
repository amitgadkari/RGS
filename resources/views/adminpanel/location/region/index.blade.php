@extends('adminpanel.location.region.app')



@section('css')
  <style>
      
  .form-group{

    margin-top:20px;
    width:300px;
  }

#region{
    font-size:18px;
}

form{
    padding-bottom:50px;
}

th{
    text-align: center;
}

  </style> 
@endsection



@section('content')
    <div class="container">
        <div clas="row">
            <form class="form-inline" id="search_form">
                <div class="form-group">
                    {!! Form::select('States',
                    $states,null,['class'=>'form-control']) !!}
                    
                </div>
                
                <div class="form-group">&nbsp;
                    <label id="region">Region:</label>
                    <input type="text" name="regionname" placeholder="Region name here" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Search</button>
                      
                </div>


            </form>    
            <button class="btn btn-success" type="button" onclick="load_create_form()">
                            +
            </button>
        </div>


       <div id="page-content" class="row">
           @include('adminpanel.location.region.micros.show_regions')
       </div>


    </div>
  
@endsection


@section('script')

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('submit', '#new_region_form', function() {
                 // post the data from the form
                $.post("{{ url('Admin/Location/Region/save')}}", $(this).serialize())
                .done(function(data) {
                console.log('data',data);

                $('#new_region_form').html(data);
                  load_verify();
                //load_result(data);
            });
           
            return false;
        });

        });
      function load_create_form() {
            // body...
            //alert('asd');
            $("#page-content").load('{{url('/Admin/Location/Region/create')}}');
        }  
    </script>

@endsection