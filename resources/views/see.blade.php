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
            <table class=" table table-striped p-3 rounded-3 shadow-lg bg-transparent">
                <thead class="table-dark">
                  <tr > 
                    <th colspan="2" class="text-center bg-secondary "><h1>User</h1></th>
                  </tr>             
                </thead>
               @foreach ($data as $i=>$user)
                <tbody>
                  <tr>
                    <th scope="row">No:</th>
                    <td>{{$user->sr}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Name:-</th>
                    <td>{{$user->name}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Email:-</th>
                    <td>{{$user->email}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Contact:-</th>
                    <td>{{$user->contact}}</td>
                  </tr>
                  <tr>
                    <th scope="row">Feedback:-</th>
                    <td>{{$user->feedback}}</td>
                  </tr>
                  <tr >
                    <td  class="p-1 "><a  class=" btn btn-primary" href="{{route('home')}}">Back</a></td>
                    <td  class="p-1 ps-5 "><a  class="ms-5 btn btn-danger" href="{{route('home.updatepage',$user->sr)}}">Update</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </div>
    
</body>
</html>