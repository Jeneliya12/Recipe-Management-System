<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Menu</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/menu-register-update/{{$menu->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			
			        			<div class="form-group">
					        		<label>Title*</label>
									<input type="text"  name="title" class="form-control" value="{{$menu->title}}" >
									</div>
								</div> 
								<div class="form-group">
								    <label>Short Description*</label>
								   	<textarea id="description" name="shortdescription" rows="10" cols="50" onKeyPress class="form-control">
									{{{$menu->shortdescription}}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Description*</label>
									<textarea id="description" name="description" rows="10" cols="50" onKeyPress class="form-control">
									{{{$menu->description}}}
									</textarea>
								</div>
								<div class="form-group">
									<label>Detail Description*</label>
									<textarea id="description" name="detaildescription" rows="10" cols="50" onKeyPress class="form-control">
									{{{$menu->detaildescription}}}
									</textarea>
								</div>
								<div class="form-group">
					        		<label>Price*</label>
									<input type="number"  name="price" class="form-control" value="{{$menu->price}}" >
									</div>
								</div> 
								<div class="form-group">
				                	<label for="exampleInputFile">Menu Image</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                 </div>    
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/menu-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/menu-delete/{{$menu->id}}" method="POST">
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