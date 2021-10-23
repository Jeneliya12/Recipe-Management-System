@include('admin.header')
<div class="content-wrapper">
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
        <div class="col-md-6">
        <!-- general form elements -->
          <div class="card card-primary">
            <form role="form" action ="/save-gallery" method="POST">
              {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputFile">Add Gallery</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    @if($errors->first('gallery'))
                    <div class="alert alert-danger" role="alert">
                      <li>{{$errors->first('gallery')}}</li>
                    </div>
                    @endif
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>