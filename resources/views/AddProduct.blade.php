<!doctype html>
<html lang="en">

<head>
    <title> Add Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <x-header/>
    <div class="contactpageDiv">
        Add Product
    </div>

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
 <form action="{{ '/AddProduct' }}" method="POST" enctype="multipart/form-data" class="mt-4">
     @csrf
     <div class="container">
        <h1 class="text-center"><b>Add Food</b></h1>
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
            <div class="mt-4">
            <button class="btn btn-primary">Add Product</button>
            </div>
        </div>
    </div>
</form>
</div>

<div class="AddProductdivfooter">
    <x-footer/>
</div>



</body>
</html>
