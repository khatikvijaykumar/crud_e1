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
      <div class="col-5">
        @foreach ($data as $i=>$user)
            
        
        <form  action="{{route('home.update',$user->sr)}}" method="POST"  class="p-3 rounded-3 shadow-lg bg-transparent">
          @csrf
           <h1 class="text-center ">Update User</h1>
           <div class="mb-3">
             <label  class="form-label">Name:</label>
             <input value="{{$user->name}}"  name="name"  type="name" class="form-control"  placeholder="enter the name">
           </div>
           <div class="mb-3">
            <label  class="form-label">Email:</label>
            <input value="{{$user->email}}" name="email"  type="email" class="form-control"  placeholder="enter the email">
          </div>
          <div class="mb-3">
            <label  class="form-label">Contact:</label>
            <input value="{{$user->contact}}" name="contact" type="number" class="form-control"  placeholder="enter the contact">
          </div>
          <div class="mb-3">
            <label  class="form-label">Feedback:</label>
            <input value="{{$user->feedback}}" name="feedback"  type="text" class="form-control"  placeholder="enter the feedback">
          </div>
          
          <div class="mt-5 m-0 mb-3 d-flex justify-content-around">
            <a href="{{route('home')}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      @endforeach
      </div>
     
  </div>
</div>
    
</body>
</html>