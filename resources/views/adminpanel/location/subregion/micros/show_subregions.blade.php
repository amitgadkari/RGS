
@if(count($subregions))
 <div class="table-responsive" id="content">
        
            <table class="table table-bordered table-stripped">
                <thead>
                    <th>Region</th>
                    <th>Sub Region</th>
                    <th>Action</th>
                         
                </thead>

                @foreach($subregions as $subregion)

                    <tr>
                        <td>{{$subregion->name}}</td>
                        <td>{{$subregion->name}}</td>
                        <td><a href="" class="btn btn-sm btn-danger">Delete</a></td>
                    </tr>

                @endforeach
            </table>
        </div>
@else

<div class="alert">No Subregions </div>

@endif
