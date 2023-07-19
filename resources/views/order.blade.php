
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!--Jquery link -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body><div class="orderSectionDiv">
    <x-header />
    <hr>
    <h1 class=" mt-2 text-center"><b>Orderd page</b></h1>
    <div class="container1">
        <div class=" card-deck1">
            <div class="card">
                <img src="{{ asset('./images') . '\\' . $data->itemImage }}" class="  w-full card-img2" id="card3"alt="image">
                <div class="card-body">
                    <h5 class="card-title" id='itemName'>{{ $data['itemName'] }}</h5>
                    <h6>Item Id:- <span id="itemId">{{ $data['id'] }}</span></h6>
                    <p class="" id="itemDescription">{{ $data['description'] }} </p>
                    <div class=orderDiv>
                        <span><h2>Price:$</h2></span><h2 id="totalPrice">{{ $data['itemPrice'] }}</h2>
                    </div>
                    <div class="mt-4 d-flex justify-content-center item-center">
                        <button id="incrementBtn" onclick='increment()'>+</button>
                        <div id="counterValue"> 1</div>
                        <button id=dicrementBtn onclick='dicrement()'>-</button>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-primary me-md-2" type="button" onclick="submitHandler()" >Order Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr>
    <x-footer/>
</body>
</html>
<script>
    let counter = 1;
    const incrementBtn = document.getElementById("counterValue");
    const dicrementBtn = document.getElementById("dicrementBtn");
    const counterValue = document.getElementById("counterValue");
    let initialPrize = document.getElementById("totalPrice");
    initialPrize = initialPrize.innerText;
    calculatePrize();
    
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
         document.getElementById('totalPrice').innerHTML = parseFloat(initialPrize) * counter;
    }
    function submitHandler() {
        const itemName =document.getElementById('itemName').innerText;
        const ItemId =document.getElementById('itemId').innerHTML;
        const itemDescription=document.getElementById('itemDescription').innerText;
        const itemPrice =document.getElementById('totalPrice').innerHTML;       
        let data = {ItemId, itemName, itemDescription, itemPrice};
                $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('itemMenu')}}",
                    method:'post',
                    async: false,
                    data:data,
                        success: function(response){
                            var alertMessage = response.alertMessage;
                            alert(alertMessage);
                        },
                        error: function(xhr){
                        }                  
                });
    }
</script>
