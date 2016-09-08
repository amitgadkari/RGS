 
@if(count($regions))
 <div class="table-responsive" id="content">
        
            <table class="table table-bordered table-stripped">
                <thead>
                    <th>State</th>
                    <th>Region</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>Sub Region</th>

                </thead>

                @foreach($regions as $region)

                	<tr>
                		<td>{{$region->name}}</td>
                		<td>{{$region->name}}</td>
                		<td>{{$region->name}}</td>
                	<td><a href="{{}}" class="delete_()"></a></td>	
                		<td><a href="{{}}" class="delete_()"></a></td>
                	</tr>

                @endforeach
            </table>
        </div>
@else

<div class="alert">No regions </div>

@endif