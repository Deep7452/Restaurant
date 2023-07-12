<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations!</strong> {{session('success')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Sorry!</strong> {{session('error')}}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
    
    <form action="{{('/login')}}" method="POST">
        @csrf
    <div class="container">
        <h1 class="text-center">Login form</h1>
        <div class="form-group">
            <label for="">Email id</label>
            <input type="text"
              class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""  value="{{old('email')}}" autofocus/>
           <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
           </span>
          </div> 
           <div class="form-group">
            <label for="password">Password</label>
            <input type="password"
              class="form-control" name="password" id="" aria-describedby="helpId" placeholder=""/>
           <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror 
           </span>
           </div>
          <button class="btn btn-primary">login</button>

    </div>
    </form> 

   
  </body>
</html>