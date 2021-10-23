<div class="container">
  <div class="row">
      <div class="col-md-12">
      <div class="card">
            <div class="card-header">
              <h3>Edit Testimonials</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="/testimonials-register-update/{{$testimonials->id}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    
                    <div class="form-group">
                      <label>Name*</label>
                      <input type="text"  name="name" class="form-control" value="{{$testimonials->name}}" >
                    </div>

                    <div class="form-group">
                      <label>Position*</label>
                      <input type="text"  name="position" class="form-control" value="{{$testimonials->position}}" >
                    </div>

                    <div class="form-group">
                      <label>Description*</label>
                      <textarea id="description" name="description" rows="10" cols="50" onKeyPress class="form-control">
                      {{{$testimonials->description}}}
                      </textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputFile">Testimonials Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                        </div>
                     </div>  

                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="/testimonials-register" class="btn btn-danger">Cancel</a>
                </form> 

                <form action="/testimonials-delete/{{$testimonials->id}}" method="POST">
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