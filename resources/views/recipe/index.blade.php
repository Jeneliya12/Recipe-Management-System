<!DOCTYPE html>
<html>
 <head>
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('assets/css/dataTables.min.css') }}" rel="stylesheet">
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>
 </head>
 <body> 
  <br />
  <div class="container">    
    <div class="table-responsive">
      <table id="datatable" class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Edit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($recipe as $recipe)
            <tr>
              <td>{{$recipe->id}}</td>
              <td><img src="images/{{$recipe->img}}" width="100px"; height="100px;" style="border-radius:50%" alt="Image"></td>
              <td>{{$recipe->title}}</td>
              <td>{{$recipe->description}}</td>
              <td>{{$recipe->date}}</td>
              <td>
                <a href="/recipe/{{$recipe->id}}/edit" class="btn btn-success">Edit</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <script src="{{asset('assets/js/dataTables.min.js')}}"></script>
    <script>
      $(document).ready( function () {
          $('#datatable').DataTable();
      } );
  </script>
</body>
</html>
  