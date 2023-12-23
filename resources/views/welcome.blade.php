<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5 ">
        <div class="row">
          <div class="col-6">
            <table class="table table-striped p-3 rounded-3 shadow-lg bg-transparent">
                <thead class="table-dark">
                  <tr >
                    <th class="bg-secondary"><a class="btn btn-light text-dark" href="{{route('home.addpage')}}">New</a></th>
                    <th colspan="4" class="text-center bg-secondary p-0"><h1>Feedback Form</h1></th>
                  </tr>
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">View</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>

                  </tr>
                </thead>
                @foreach ($data as $i=>$user)
                    
              
                <tbody>
                  <tr>
                    <th scope="row">{{$user->sr}}</th>
                    <td>{{$user->name}}</td>
                    <td><a class="btn btn-secondary" href="{{route('home.view',$user->sr)}}">View</a></td>
                    <td><a class="btn btn-success" href="{{route('home.updatepage',$user->sr)}}">Update</a></td>
                    <td><a class="btn btn-danger" href="{{route('home.delete',$user->sr)}}">Delete</a></td>

                  </tr>
                 
                </tbody>
                @endforeach
              </table>
          </div>
      </div>
    </div>

</body>
</html>
