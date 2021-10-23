<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Events</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/events-register-update/{{$events->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			
			        			<div class="form-group">
					        		<label>Title*</label>
									<input type="text"  name="title" class="form-control" value="{{$events->title}}" >
									</div>
								</div> 
								<div class="form-group">
					        		<label>Price*</label>
									<input type="number"  name="price" class="form-control" value="{{$events->price}}" >
									</div>
								</div> 
								<div class="form-group">
								    <label>Short Description*</label>
								   	<textarea id="description" name="shortdescription" rows="10" cols="50" onKeyPress class="form-control">
									{{{$events->shortdescription}}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Detail Description*</label>
									<textarea id="description" name="detaildescription" rows="10" cols="50" onKeyPress class="form-control">
									{{{$events->description}}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Description*</label>
									<textarea id="description" name="description" rows="10" cols="50" onKeyPress class="form-control">
									{{{$events->description}}}
									</textarea>
								</div>
								<div class="form-group">
				                	<label for="exampleInputFile">Events Image</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                 </div>    
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/events-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/events-delete/{{$events->id}}" method="POST">
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