<div class="col-md-4 col-md-offset-3 well">
<form class="form" role="form" id="new_region_form">
{{csrf_field()}}
	<h3>Create New Sub Region </h3>              
    <div class="form-group">&nbsp;
        <label id="region">Region:</label>
            <input type="text" name="regionname" placeholder="Subregion name here" 
            class="form-control">
    </div>
    <button type="submit" class="btn btn-info">Save</button>
</form>	
</div>
