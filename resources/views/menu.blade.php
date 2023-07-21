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
   
    <div class="contactpageDiv">
        Menu Page
    </div
    </hr>
    @foreach ($collection as $data)
        <div class="menuDiv mt-4">
            <div class="container">
                <div class="card">
                    <img src="{{ asset('./images') . '\\' . $data->itemImage }}" class=" card-img2" alt="image">
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
