<!doctype html>
<html lang="en">

<head>
    <title>Reservation page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./css/style.css') }}">
</head>

<body>
    <div class="">
        <x-header />
    </div>
    <div class="reservationpageDiv">
        Reservation
    </div>
    <div class="d-flex justify-content-center mt-4">
        <h1><b> BooK a Table</b></h1>
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
            <form action="{{ '/reservation' }}" method="POST">
                @csrf
                <div class="container justify-content-center">
                    <h3 class="text-center mt-4">Booking a table</h3>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" id=""
                            aria-describedby="helpId" placeholder="" value="{{ old('name') }}"  autofocus/>
                        <span class="text-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="mobileNo">Mobile No</label>
                        <input type="text" class="form-control" name="mobileNo" id="mobileNo"
                            aria-describedby="helpId" placeholder=""  />
                        <span class="text-danger">
                            @error('mobileNo')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="description">choose a Table Number</label>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02" name="tableNumber">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>

                            </select>
                        </div>
                        <span class="text-danger">
                            @error('tableNumber')
                                {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="helpId" placeholder="" />
                        <span class="text-danger">
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="d-flex">
                        <button class="btn btn-primary">Book table</button>
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
