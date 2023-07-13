<!doctype html>
<html lang="en">

<head>
    <title>Menu</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <x-header/>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulations!</strong> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Sorry!</strong> {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
<div class="menuFormDiv">
    <div class="formdiv1">
     <form action="{{ '/menu' }}" method="POST" enctype="multipart/form-data" class="mt-4">
         @csrf
         <div class="container">
            <h1 class="text-center">Add Food</h1>
            <div class="form-group">
                <label for="">Item Name</label>
                <input type="text" class="form-control" name="itemName" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('ItemName') }}" autofocus />
                <span class="text-danger">
                    @error('ItemName')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="description">Item Description</label>
                <input type="text" class="form-control" name="description" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('description') }}" />
                <span class="text-danger">
                    @error('description')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Item Image</label>
                <input type="file" class="form-control" name="itemImage" id="itemImage" aria-describedby="helpId"
                    placeholder="" />
                <span class="text-danger">
                    @error('itemImage')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="itemPrice">Price($)</label>
                <input type="text" class="form-control" name="itemPrice" id="" aria-describedby="helpId"
                    placeholder="" />
                <span class="text-danger">
                    @error('itemPrice')
                        {{ $message }}
                    @enderror
                </span>
                <div class="mt-2">
                <button class="btn btn-primary">Add Product</button>
                </div>
            </div>
        </div>
    </form>
    </div>

    <div class="container mt-4">
        <h2 class="text-center">Item Menu</h2>
    </div>
    </hr>
    @foreach ($collection as $data)
        <div class="menuDiv">
            <div class="container">
                <div class="card">
                    <img src="{{ public_path('./images') . '\\' . $data->itemImage }}" class=" card-img2" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->itemName }}</h5>
                        <p class="">{{ $data->description }} </p>
                        <div class=orderDiv>
                            <h2>${{ $data->itemPrice }}</h2>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2"
                                type="button"onclick="redirect({{ $data->id }})">
                                Order Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
    </div>
    @endforeach
    <hr>
    <x-footer />

</body>

</html>
<script>
    function redirect(id) {
        location.href = `/order/${id}`
    }
</script>
