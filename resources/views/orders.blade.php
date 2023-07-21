<!doctype html>
<html lang="en">
        <head>
          <title>Title</title>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        </head>
        <body>
          <x-header/>
          <div class="contactpageDiv">
            Order Details
        </div>
        
        <div class="d-flex justify-content-center ">
          @if (Session::has('order_message'))
          <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
          @endif
        </div>
        <div class="d-flex justify-content-center ">
        </div>  
        <table class="table">
          <thead>
            <tr>
                <th scope="col">Sr.No</th>
                <th scope="col">User Id</th>
                <th scope="col">Item Name</th>
                <th scope="col">Address</th>
                <th scope="col">Item Description</th>
                <th scope="col">Item price</th>
                <th scope="col">Item Status</th>
                @if(Auth::user()->role==='admin')
                <th colspan="2" class="text-center">Actions</th>
                @endif
            </tr>
          </thead>
                <tbody>  
                  @foreach ($orders as $data)  
                  <tr id="tr_{{$data['id']}}">
                      <td scope="row">{{$data['id']}}</td>
                      <td>{{ $data['user_id'] }}</td>
                      <td>{{$data['itemName']}}</td>
                      <td>{{$data['address']}}</td>
                      <td> {{$data['itemDescription']}}</td>
                      <td>{{$data['itemPrice']}}</td>
                      <td>{{$data['status']}}</td>
                      @if (Auth::user()->role==='admin') 
                    <td  colspan="2">
                      <div class="dropdown">
                          <button class="btn btn-success btn-sm dropdown-toggle"  type="button" data-bs-toggle="dropdown">Status
                          <span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" id="d" href="{{route('orders.updateOrderStatus',[ 'id'=>$data->id , 'status'=>'delivered'])}}"  >Delivered</a></li>
                            <li><a class="dropdown-item" id="c" href="{{route('orders.updateOrderStatus',[ 'id'=>$data->id , 'status'=>'cancelled'])}}" >Cancelled</a></li>
                          </ul>
                          <a  href="javascript:void(0)"class="btn btn-danger"  onclick="deleteOrder({{$data->id}})">Delete</a>
                      </div>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="AddProductdivfooter">
              <x-footer/>
              </div>
        </body>
  </html>


<script>
  function deleteOrder(id)
  {
        if(confirm("Are you sure to delete it"))
            {

            }
    
         $.ajaxSetup({
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                    $.ajax({
                        url:'orders/'+id,
                        method:'DELETE',
                            success: function(response){
                              $('#'+response['tr']).slideUp("slow")
                              var alertMessage =response.alertMessage;
                              alert(alertMessage);

                            },
                            error: function(xhr){
                            }                  
                });
              }
</script>
