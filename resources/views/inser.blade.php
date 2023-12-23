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
    
    <div class="container  mt-5  ">
        <div class="row">
          
          <div class="col-6"> 
            <form action="{{route('home.add')}}" method="POST" class="p-3 rounded-3 shadow-lg bg-transparent">
              @csrf
               <h1 class="text-center">New User</h1>
               <div class="mb-3">
                 <label class="form-label">Name:</label>
                 <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="enter the name">
                 <span class="text-danger">
                  @error('name')
                      {{$message}}    
                  @enderror
                 </span>
               </div>
               <div class="mb-3">
                <label  class="form-label">Email:</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="enter the email">
                <span class="text-danger">
                  @error('email')
                      {{$message}}    
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label  class="form-label">Contact:</label>
                <input name="contact" type="number" class="form-control @error('contact') is-invalid @enderror"  placeholder="enter the contact">
                <span class="text-danger">
                  @error('contact')
                      {{$message}}    
                  @enderror
                </span>
              </div>
              <div class="mb-3">
                <label  class="form-label">Feedback:</label>
                <input name="feedback" type="text" class="form-control @error('feedback') is-invalid @enderror" placeholder="enter the feedback">
                <span class="text-danger">
                  @error('feedback')
                      {{$message}}    
                  @enderror
                </span>
              </div>
              <div class="mt-5 m-0 mb-3 d-flex justify-content-around">
                <a href="{{route('home')}}" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              
            </form>
          </div>
         
      </div>
    </div>
    
</body>
</html>