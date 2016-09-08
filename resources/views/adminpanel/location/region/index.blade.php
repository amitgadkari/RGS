
@extends('adminpanel.layout.app')



@section('your_css')
  
@endsection



@section('content')
   

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
                            <button class="btn btn-success" type="button" onclick="load_create_form()">
                            +
                        </button>
                </div>


            </form>    
       <div id="page-content" class="row">
           @include('adminpanel.location.region.micros.show_regions')
       </div>



  
@endsection


@section('your_script')

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('submit', '#new_region_form', function() {
                 // post the data from the form
                $.post("{{ url('Admin/Location/Region/save')}}", $(this).serialize())
                .done(function(data) {
                console.log('data',data);
                $('#page-content').html(data);
                 
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