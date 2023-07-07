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

    <form action="{{ '/menu' }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h1 class="text-center">Add Food</h1>
            <div class="form-group">
                <label for="">Item Name</label>
                <input type="text" class="form-control" name="itemName" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('ItemName') }}" />
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
                <button class="btn btn-primary">Add Product</button>
            </div>
    </form>
    </hr>
    @foreach ($collection as $data)
        {{-- <div class="menuDiv"> --}}
        <div class=" card-deck1">
            <div class="card">
                <img src="{{ public_path('images') . '\\' . $data->itemImage }}" class="  w-full card-img2"
                    id="card1"alt="image">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->itemName }}</h5>
                    <p class="">{{ $data->description }} </p>
                    <div class=orderDiv>
                        <h2>${{ $data->itemPrice }}</h2>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button"
                            onclick="redirect({{ $data->id }})">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div>  --}}
        {{-- <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{public_path('images') . "\\" .$data->itemImage}}" alt="image" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$data->itemName}}</span>
                                                <span class="text-primary">{{$data->itemPrice}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$data->description}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    @endforeach
</body>

</html>

<script>
    function redirect(id) {
        location.href = `/order/${id}`
    }
</script>
