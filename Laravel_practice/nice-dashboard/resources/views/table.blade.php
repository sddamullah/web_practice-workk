<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Hello, world!</title>

  </head>
  <body>

  <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>web</th>
                            <th>app</th>
                            <th>software</th>
                            
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($atif as $atifs)
                        <tr>
                            <td>{{$atifs->id}}</td>
                            <td>{{$atifs->web}}</td>
                            <td>{{$atifs->app}}</td>
                            <td>{{$atifs->software}}</td>
                           
                            <td>
                                <a href="{{url('delete/'.$atifs->id)}}" class="btn btn-success" onclick="return confirm('Are you sure? you want to Delete')">Delete</a>
                            </td>
                            <td>
                                <a href="{{url('update/'.$atifs->id)}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>