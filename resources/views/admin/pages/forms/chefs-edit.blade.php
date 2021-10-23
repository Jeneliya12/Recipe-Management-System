<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Chef's Profile</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/chefs-register-update/{{$chefs->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
								<div class="form-group">
								    <label>Chef Name</label>
								    <input type="text" name="name" class="form-control" value="{{$chefs->name}}" >
								</div>

								<div class="form-group">
								<label>Chef Image</label>
								<div class="input-group">
								  <div class="custom-file">
								    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
								      <input type="file" name="image" class="custom-file-input" id="exampleInputFile" value="{{$chefs->image}}">
								  </div>
								</div>
								</div>

								<div class="form-group">
									<label>Chef Intro*</label>
								  <input type="text"  name="intro" class="form-control" value="{{$chefs->intro}}">
								</div>

								<div class="form-group">
								<label>Position*</label>
									<input type="text"  name="position" class="form-control" value="{{$chefs->position}}">
								</div>

								<div class="form-group">
								<label>Experience*</label>
								  <textarea name="experience" class="form-control">{{$chefs->experience}}</textarea>
								</div>

								<div class="form-group">
								<label>Description*</label>
								  <textarea name="description" class="form-control">{{$chefs->description}}</textarea>
								</div>

								<div class="form-group">
								<label>Twitter*</label>
									<input type="text"  name="twitter" class="form-control" value="{{$chefs->twitter}}">
								</div>

								<div class="form-group">
								<label>Facebook*</label>
								 <input type="text"  name="facebook" class="form-control" value="{{$chefs->facebook}}">
								</div>

								<div class="form-group">
								<label>Instagram*</label>
									<input type="text"  name="instagram" class="form-control" value="{{$chefs->instagram}}">
								</div>

								<div class="form-group">
								<label>Linkedin*</label>
									<input type="text"  name="linkedin" class="form-control" value="{{$chefs->linkedin}}">
								</div>

								<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/chefs-table" class="btn btn-danger">Cancel</a>
							</form>	
							<form action="/chefs-delete/{{$chefs->id}}" method="POST">
		                        {{csrf_field()}}
		                        {{method_field('DELETE')}}
			                    <button type="submit" class="btn btn-danger">DELETE</button>
			                </form>
		        		</div>		
		        	</div>
		        </div>
	      	</div>
    	</div>
  	</div>
</div>

