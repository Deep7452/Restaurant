<!doctype html>
<html lang="en">

<head>
    <title>Contact us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="forheader">
        <x-header />
    </div>
    <div class="contactpageDiv">
        Contact us
    </div>
    <div class="d-flex justify-content-center mt-4">
        <h1><b>Contact for any Query</b></h1>
    </div>
    <div class="res-form-imgDiv">
        <div class="res-imgDiv"> </div>
        <div class="res-formDiv">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show"  id="myAlert "role="alert">
                <strong>Congratulations!</strong> {{session('success')}}.
                <button type="button" class="close" onclick="closeAlert()" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> 
            @endif
            <form action="{{ '/contact' }}" method="POST">
                @csrf
                <div class="container justify-content-center mt-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id=""
                            aria-describedby="helpId" placeholder="Enter Your Name" value="{{ old('name') }}"  autofocus/>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email id</label>
                        <input type="text" class="form-control" name="email" id="email"
                            aria-describedby="helpId" placeholder="example@gamil.com"  />
                        <span class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                 
                    <div class="form-group">
                        <label for="description">Message</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpId" placeholder=" Write a message" />
                        <span class="text-danger">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-primary">Send Message</button>
                    </div>

                </div>
            </form>

        </div>
    </div>
    <x-footer />
</body>

</html>
<script>
     function closeAlert() {
     var alert =document.getElementById('myAlert');
     if(alert!=null){
     alert.style.display='none';
     };

   }
  </script>
