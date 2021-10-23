<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
 
  .form-group{
    margin-left:50px;
    margin-right:50px;
  }
  .container{
    background:white; 
  
  }
  h1{
    color:red;
    font-style:italic;
  } 
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-6 col-sm-6">
        <h1>Create Slider Images</h1>
        <form class="form-group" method= "POST" action="/slider">
          {{csrf_field()}}

          <label>Active Title*</label>
            <input type="text"  name="activetitle" class="form-control">
            @if($errors->first('activetitle'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('activetitle')}}</li>
            </div>
          @endif

          <label>Active Description*</label>
            <textarea name="activedescription" class="form-control"></textarea>
             @if($errors->first('activedescription'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('activedescription')}}</li>
            </div>
          @endif

         <label>Active Image*</label>
          <fieldset>
              <input type="file" name="img" style="padding-bottom:10px;">
               @if($errors->first('img'))
              <div class="alert alert-danger" role="alert">
                <li>{{$errors->first('img')}}</li>
              </div>
              @endif
          </fieldset>

          <label>Second Title*</label>
            <input type="text"  name="secondtitle" class="form-control">
            @if($errors->first('secondtitle'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('secondtitle')}}</li>
            </div>
            @endif

          <label>Second Description*</label>
            <textarea name="secondimagedescription" class="form-control"></textarea>
             @if($errors->first('seconddescription'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('seconddescription')}}</li>
            </div>
            @endif

          <label>Second Image*</label>
            <fieldset>
              <input type="file" name="secondimg" style="padding-bottom:10px;">
               @if($errors->first('secondimg'))
                <div class="alert alert-danger" role="alert">
                  <li>{{$errors->first('secondimg')}}</li>
                </div>
              @endif
            </fieldset>

            <label>Third Title*</label>
              <input type="text"  name="thirdtitle" class="form-control">
              @if($errors->first('thirdtitle'))
              <div class="alert alert-danger" role="alert">
                <li>{{$errors->first('thirdtitle')}}</li>
              </div>
            @endif

            <label>Third Description*</label>
              <textarea name="thirdimagedescription" class="form-control"></textarea>
               @if($errors->first('thirddescription'))
              <div class="alert alert-danger" role="alert">
                <li>{{$errors->first('thirddescription')}}</li>
              </div>
              @endif

            <label>Third Image*</label>
              <fieldset>
                <input type="file" name="thirdimg" style="padding-bottom:10px;">
                 @if($errors->first('thirdimg'))
                  <div class="alert alert-danger" role="alert">
                    <li>{{$errors->first('thirdimg')}}</li>
                  </div>
                  @endif
              </fieldset>
          <button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button>
        </form>
      </div>  
    </div>
  </div>
</body>
</html>