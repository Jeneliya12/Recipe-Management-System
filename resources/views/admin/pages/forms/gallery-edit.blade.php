<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Gallery</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/gallery-register-update/{{$galleries->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
								<div class="form-group">
				                	<label for="exampleInputFile">Gallery</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                  </div>    
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/gallery-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/gallery-delete/{{$galleries->id}}" method="POST">
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