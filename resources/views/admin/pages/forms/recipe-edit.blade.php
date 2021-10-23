<div class="container">
 	<div class="row">
	    <div class="col-md-12">
			<div class="card">
		      	<div class="card-header">
		      		<h3>Edit Registered Recipe</h3>
		      	</div>
		        <div class="card-body">
		        	<div class="row">
		        		<div class="col-md-6">
			        		<form action="/recipe-register-update/{{$recipes->id}}" method="POST">
			        			{{csrf_field()}}
			        			{{method_field('PATCH')}}
								<div class="form-group">
								    <label>Author Name</label>
								    <input type="text" name="name" class="form-control" value="{{$recipes->name}}" >
								</div>

								<div class="form-group">
								<label>Author Image</label>
								<div class="input-group">
								  <div class="custom-file">
								      <input type="file" name="authorphoto" class="custom-file-input" id="exampleInputFile" >
								  </div>
								</div>
								</div>

								<div class="form-group">
									<label>Author Intro*</label>
								  <input type="text"  name="authorintro" class="form-control" value="{{$recipes->authorintro}}">
								</div>

								<div class="form-group">
								<label>Recipe Title*</label>
									<input type="text"  name="title" class="form-control" value="{{$recipes->title}}">
								</div>

								<div class="form-group">
								<label for="exampleInputFile">Recipe Image</label>
									<div class="input-group">
										<div class="custom-file">
											<input type="file" name="img" class="custom-file-input" id="exampleInputFile" value="{{$recipes->img}}">
										</div>
									</div>
								</div>

								<div class="form-group">
								<label>Short Description*</label>
								  <textarea name="shortdescription" class="form-control">{{$recipes->shortdescription}}</textarea>
								</div>

								<div class="form-group">
								<label>Description*</label>
								  <textarea name="description" class="form-control">{{$recipes->description}}</textarea>
								</div>

								<div class="form-group">
								<label>Detail Description*</label>
								  <textarea name="detaildescription" class="form-control">{{$recipes->detaildescription}}</textarea>
								</div>

								<div class="form-group">
								<label>Time*</label>
									<input type="text"  name="time" class="form-control" value="{{$recipes->time}}">
								</div>

								<div class="form-group">
								<label>Cooktime*</label>
								 <input type="text"  name="cooktime" class="form-control" value="{{$recipes->cooktime}}">
								</div>

								<div class="form-group">
								<label>Yield*</label>
									<input type="text"  name="yield" class="form-control" value="{{$recipes->yield}}">
								</div>

								<div class="form-group">
								<label>Summary*</label>
									<textarea name="summary" class="form-control">{{$recipes->summary}}</textarea>
								</div>

								<div class="form-group">
								<label>Ingredients*</label>
									<textarea name="ingredients" class="form-control">{{$recipes->ingredients}}</textarea>
								</div>

								<div class="form-group">
								<label>Method Title*</label>
									<input type="text"  name="methodtitle" class="form-control" value="{{$recipes->methodtitle}}"> 
								</div>

								<div class="form-group">
								<label>Method*</label>
								  <textarea name="method" class="form-control">{{$recipes->method}}</textarea>
								</div>

								<div class="form-group">
								<label>Commentor*</label>
								  <input type="text"  name="commentor" class="form-control" value="{{$recipes->commentor}}">
								</div>

								<div class="form-group">
								<label>Comments*</label>
								 <input type="text"  name="comments" class="form-control" value="{{$recipes->comments}}">
								</div>

								<div class="form-group">
								<label>Comments Date</label>
								  <input type="date" name="comments_date" value="{{$recipes->comments_date}}">
								</div>

								<div class="form-group">
								  <label>Recipe Date</label>
								  <input type="date" name="recipedate" value="{{$recipes->recipedate}}">
								</div>
								<button type="submit" class="btn btn-success">Update</button>
				    			<a href="/recipe-register" class="btn btn-danger">Cancel</a>
							</form>	
							<form action="/recipe-delete/{{$recipes->id}}" method="POST">
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

