   @extends('adminpanel.layout.app')



@section('your_css')
   
@endsection

@section('content')

            <form class="form-inline" id="new_Sub_region_form">
                {{csrf_field()}}
                <div class="form-group">&nbsp;
                <input type="hidden" value="{{$region->id}}" name="region_id">
                    <label id="region">Sub Region:</label>
                    <input type="text" name="subregionname" placeholder="Sub Region name here" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Save</button>
                </div>


            </form>    
       <div id="page-content" class="row">
           @include('adminpanel.location.subregion.micros.show_Subregions')
       </div>

@endsection


@section('your_script')

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on('submit', '#new_Sub_region_form', function() {
                 // post the data from the form
                $.post("{{ url('Admin/Location/'.$region->id.'/Subregion/save')}}", $(this).serialize())
                .done(function(data) {
                console.log('data',data);
                $('#page-content').html(data);
                 
                //load_result(data);
            });
           
            return false;
        });
        }); 
    </script>

@endsection

