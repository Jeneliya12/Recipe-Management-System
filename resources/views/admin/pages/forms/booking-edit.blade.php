<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Booking's</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/booking-register-update/{{$booking->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
			        			
			        			<div class="form-group">
					        		<label>Name*</label>
									<input type="text"  name="name" class="form-control" value="{{$booking->name}}" >
								</div>
							
								<div class="form-group">
									<label>Email*</label>
									<input type="email"  name="email" class="form-control" value="{{$booking->email}}" >
								</div>
								
								<div class="form-group">
									<label>Phone*</label>
									<input type="phone"  name="phone" class="form-control" value="{{$booking->phone}}" >
								</div>
							
								<div class="form-group">
									<label>Address*</label>
									<input type="text"  name="address" class="form-control" value="{{$booking->address}}" >
								</div>

								<div class="form-group">
				                    <label>Number of ingredients</label>
				                    <input type="number" class="form-control" name="number" id="number" placeholder="number of ingredients" value="{{$booking->number}}">
				                </div>

								<div class="form-group">
									<label>Message*</label>
									<textarea id="message" name="message" rows="10" cols="50" onKeyPress class="form-control">
									{{$booking->message}}
									</textarea>
								</div> 
				    			<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/booking-register" class="btn btn-danger">Cancel</a>
				    		</form>	

				    		<form action="/booking-delete/{{$booking->id}}" method="POST">
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