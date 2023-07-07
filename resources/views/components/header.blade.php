<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="#">
        <img src="{{asset('logo/chef.jpg')}}" alt="chef logo" class="img-responsive"/>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">...</span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-1 p-4 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('dashboard')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu')}}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('shoping')}}">shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <div>
          <a class="navbar-brand" href="#">
            <img src="{{asset('logo/logo3.png')}}" alt="Cart logo" class="img-responsive"/>
          </a>
        </div>
        @auth
        <form class="form-inline my-2 my-lg-0" method="POST">
          @csrf
          <h5 class="userEmail">resto@gmail.com</h5>
          <a class=" logout  my-2 my-sm-0" href="{{route('logout')}}">logout</a>
        </form>
        @endauth
      </div>
    </nav>
  </body>
</html>
