<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/6516079e62.js" crossorigin="anonymous"></script>

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
        <h1>Create Recipe</h1>
        <form class="form-group" method= "POST" action="/recipe">
          {{csrf_field()}}

            <label>Author Name*</label>
            <input type="text"  name="name" class="form-control">
            @if($errors->first('name'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('name')}}</li>
            </div>
          @endif

          <label>Author Image*</label>
          <fieldset>
              <input type="file" name="authorphoto" style="padding-bottom:10px;">
               @if($errors->first('authorphoto'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('authorphoto')}}</li>
          </div>
          @endif
            </fieldset>

            <label>Title*</label>
            <input type="text"  name="title" class="form-control">
            @if($errors->first('title'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('title')}}</li>
            </div>
          @endif

          <label>Short Description*</label>
            <textarea name="shortdescription" class="form-control"></textarea>
             @if($errors->first('shortdescription'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('shortdescription')}}</li>
            </div>
          @endif

            <label>Description*</label>
            <textarea name="description" class="form-control"></textarea>
             @if($errors->first('description'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('description')}}</li>
            </div>
          @endif

          <label>Detail Description*</label>
            <textarea name="detaildescription" class="form-control"></textarea>
             @if($errors->first('detaildescription'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('detaildescription')}}</li>
            </div>
          @endif

          <label>Time*</label>
            <input type="text"  name="time" class="form-control">
            @if($errors->first('time'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('time')}}</li>
            </div>
          @endif

          <label>Cooktime*</label>
           <input type="text"  name="cooktime" class="form-control">
            @if($errors->first('cooktime'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('cooktime')}}</li>
            </div>
          @endif
   

        <label>Yield*</label>
           <input type="text"  name="yield" class="form-control">
            @if($errors->first('yield'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('yield')}}</li>
            </div>
          @endif

        <label>Author Intro*</label>
         <input type="text"  name="authorintro" class="form-control">
            @if($errors->first('authorintro'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('authorintro')}}</li>
            </div>
          @endif

        <label>Summary*</label>
        <textarea name="summary" class="form-control"></textarea>
         @if($errors->first('summary'))
        <div class="alert alert-danger" role="alert">
          <li>{{$errors->first('summary')}}</li>
        </div>
        @endif

        <label>Ingredients*</label>
        <textarea name="ingredients" class="form-control"></textarea>
         @if($errors->first('ingredients'))
        <div class="alert alert-danger" role="alert">
          <li>{{$errors->first('ingredients')}}</li>
        </div>
        @endif

        <label>Method Title*</label>
         <input type="text"  name="methodtitle" class="form-control">
            @if($errors->first('methodtitle'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('methodtitle')}}</li>
            </div>
          @endif

        <label>Method*</label>
          <textarea name="method" class="form-control"></textarea>
           @if($errors->first('method'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('method')}}</li>
          </div>
          @endif

        <label>Commentor*</label>
          <input type="text"  name="commentor" class="form-control">
            @if($errors->first('commentor'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('commentor')}}</li>
            </div>
          @endif

      <label>Comments*</label>
         <input type="text"  name="comments" class="form-control">
            @if($errors->first('comments'))
            <div class="alert alert-danger" role="alert">
              <li>{{$errors->first('comments')}}</li>
            </div>
          @endif

    <label>Comments Date</label>
            <input type="date" name="comments_date"><br>
   

      <label>Recipe Image*</label>
          <fieldset>
              <input type="file" name="img" style="padding-bottom:10px;">
               @if($errors->first('img'))
          <div class="alert alert-danger" role="alert">
            <li>{{$errors->first('img')}}</li>
          </div>
          @endif
            </fieldset>
            
            <label>Recipe Date</label>
            <input type="date" name="recipedate">
            <button type="submit" class="btn btn-danger" style="margin-bottom:20px;">Submit</button>
          </form>
      </div>  
    </div>
  </div>
</body>
</html>