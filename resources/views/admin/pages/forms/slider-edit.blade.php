<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Slider</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/slider-register-update/{{$slider->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			
			        			<div class="form-group">
					        		<label>Active Title*</label>
									<input type="text"  name="activetitle" class="form-control" value="{{$slider->activetitle}}" >
									</div>
								</div> 
								<div class="form-group">
								    <label>Active Description*</label>
								   	<textarea id="description" name="activedescription" rows="10" cols="50" onKeyPress class="form-control">
									{{$slider->activedescription}}
									</textarea>
								</div>

								<div class="form-group">
				                	<label for="exampleInputFile">Active Image</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                </div>    

				               <div class="form-group">
					        		<label>Second Title*</label>
									<input type="text"  name="secondtitle" class="form-control" value="{{$slider->secondtitle}}" >
									</div>
								</div> 
								<div class="form-group">
								    <label>Second Description*</label>
								   	<textarea id="description" name="seconddescription" rows="10" cols="50" onKeyPress class="form-control">
									{{$slider->seconddescription}}
									</textarea>
								</div>

								<div class="form-group">
				                	<label for="exampleInputFile">Second Image</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="secondimg" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                </div>  

				                <div class="form-group">
					        		<label>Third Title*</label>
									<input type="text"  name="thirdtitle" class="form-control" value="{{$slider->thirdtitle}}" >
									</div>
								</div> 
								<div class="form-group">
								    <label>Third Description*</label>
								   	<textarea id="description" name="thirddescription" rows="10" cols="50" onKeyPress class="form-control">
									{{$slider->thirddescription}}
									</textarea>
								</div>

								<div class="form-group">
				                	<label for="exampleInputFile">Third Image</label>
				                    <div class="input-group">
				                      <div class="custom-file">
				                        <input type="file" name="thirdimg" class="custom-file-input" id="exampleInputFile">
				                      </div>
				                    </div>
				                </div>   
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/slider-register" class="btn btn-danger">Cancel</a>
				    		</form>	
				    		<form action="/slider-delete/{{$slider->id}}" method="POST">
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