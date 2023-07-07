<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
        <x-header />
    </div>
    <div>
        <h1 id="shopHeading"><b>Shop Now</b></h1>
    </div>
    <div class="card-deck">
        <div class="card">
            <img src="{{ asset('images/Burger.jpg') }}" class="card-img-top" id="card1"alt="burger">
            <div class="card-body">
                <h5 class="card-title">Tasty Burger</h5>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci asperiores culpa,
                    explicabo, ea eaque aliquid mollitia dolorum at illum accusantium alias soluta, eligendi magnam?
                    Facilis qui nisi dolorem porro officiis!.</p>
                <div class=orderDiv>
                    <a href="{{ route('order') }}" class="orderbutton">Order Now</a>
                    <h2>Price .$10</h2>
                </div>

            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/dish-with-rice.jpg') }}" class="card-img-top" alt="Rice">
            <div class="card-body">
                <h5 class="card-title">Rice Dish</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro ab ipsum sed ad,
                    adipisci officiis repudiandae beatae optio cum explicabo nobis consectetur. Nisi, incidunt
                    architecto optio labore earum corrupti accusantium.</p>
                <div class=orderDiv>
                    <a href="{{ route('order') }}" class="orderbutton">Order Now</a>
                    <h2>Price .$10</h2>
                </div>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('images/tagliatelle-pasta-with-tomatoes-chicken (1).jpg') }}" class="card-img-top"
                alt="Pasta">
            <div class="card-body">
                <h5 class="card-title">Tomato Pasta</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt illum expedita
                    ullam, maiores ad quas officiis qui adipisci quaerat. Officia sequi facere eveniet accusantium
                    consequatur quaerat expedita consectetur inventore laudantium.</p>
                <div class=orderDiv>
                    <a href="{{ route('order') }}" class="orderbutton">Order Now</a>

                    <h2>Price .$10</h2>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
