<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Galleries</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/gallery-register-update/{{$galleries->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}  
			                   <div class="form-group">
			                    <label for="exampleInputFile">Gallery Image</label>
			                    <div class="input-group">
			                      <div class="custom-file">
			                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile">
			                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
			                      </div>
			                    </div>
			                  </div>
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/gallery-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/gallery-delete/{{$about->id}}" method="POST">
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