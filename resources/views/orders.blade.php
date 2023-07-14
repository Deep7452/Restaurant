<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  </head>
  <body>
    <x-header/>
    <div class="d-flex justify-content-center m-4">
        <h1><b>Orders Details</b></h1>
    </div>  
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Sr.No</th>
              <th scope="col">User Id</th>
              <th scope="col">Item Name</th>
              <th scope="col">Item Description</th>
              <th scope="col">Item price</th>
              <th scope="col">Item Status</th>
              <th scope="col">Actions</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($collection as $data) 
            <tr class="">
              <td scope="row">{{$data['id']}}</td>
              <td>{{ $data['user_id'] }}</td>
              <td>{{$data['itemName']}}</td>
              <td> {{$data['itemDescription']}}</td>
              <td>{{$data['itemPrice']}}</td>
              <td>{{$data['status']}}</td>
              <td colspan="2">
                <button class="btn btn-primary" onclick="updateOrdertatus()">Update</button>
                <button class="btn btn-danger" onclick="deleteOrder()">Delete</button>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        <div class="container mt-4">
        <x-footer/>
        </div>
  </body>
</html>