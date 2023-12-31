<!doctype html>
<html lang="en">

<head>
    <title>Registration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form action="{{ '/registration' }}" method="POST">
        @csrf

        <div class="container">
            <h1 class="text-center">Registration form</h1>
            <div class="form-group">
                <label for="">First Name</label>
                <input type="text" class="form-control" name="fname" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('fname') }}" />
                <span class="text-danger">
                    @error('fname')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="lanme">Last Name</label>
                <input type="text" class="form-control" name="lname" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('lname') }}" />
                <span class="text-danger">
                    @error('lname')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Email id</label>
                <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                    placeholder="" value="{{ old('email') }}" />
                <span class="text-danger">
                    @error('email')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="" aria-describedby="helpId"
                    placeholder="" />
                <span class="text-danger">
                    @error('password')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="password_confirmation" id=""
                    aria-describedby="helpId" placeholder="" />
                <span class="text-danger">
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <button class="btn btn-primary">Register</button>

        </div>
    </form>

</body>

</html>
