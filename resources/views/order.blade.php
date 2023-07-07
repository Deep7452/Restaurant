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
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <x-header />
    <h1 class=" mt-2 text-center">Orderd page</h1>
    <div class="container1">
        <div class=" card-deck1">
            <div class="card">
                <img src="{{ $data['itemImage'] }}" class="  w-full card-img2" id="card3"alt="image">
                <div class="card-body">
                    <h5 class="card-title" id='itemName'>{{ $data['itemName'] }}</h5>
                    <h6 id="itemId">Item Id:- {{ $data['id'] }}</h6>
                    <p class="" id="itemDescription">{{ $data['description'] }} </p>
                    <div class=orderDiv>
                        <span>$</span><h2 id="totalPrice">{{ $data['itemPrice'] }}</h2>
                    </div>
                    <div class="mt-4 d-flex justify-content-center item-center">
                        <button id="incrementBtn" onclick='increment()'>+</button>
                        <div id="counterValue"> 1</div>
                        <button id=dicrementBtn onclick='dicrement()'>-</button>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button">Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    let counter = 1;
    const incrementBtn = document.getElementById("counterValue");
    const dicrementBtn = document.getElementById("dicrementBtn");
    const counterValue = document.getElementById("counterValue");
    let initialPrize = document.getElementById("totalPrice");
    const name =document.getElementById('itemName').innerText;
    const id =document.getElementById('itemId').innerHTML;
    const description=document.getElementById('itemDescription').innerText;
    const price =document.getElementById('totalPrice').innerHTML;
    

    initialPrize = initialPrize.innerText;
    calculatePrize();
    show();
    
    function increment() {
        counter++;
        counterValue.innerHTML = counter;
        calculatePrize();
    }

    function dicrement() {
      if(counter > 1){
        counter--;
        counterValue.innerHTML = counter;
        calculatePrize();
      }
    }
    function calculatePrize(){
      // console.log(initialPrize, typeof(initialPrize))
      // console.log(counter, typeof(counter))
      document.getElementById('totalPrice').innerHTML = parseInt(initialPrize) * counter;
    }
    function show(){
      console.log(id);
      console.log(name);
      console.log(price);
      console.log(description);
    
    }

</script>
