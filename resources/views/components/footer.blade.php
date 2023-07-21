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
    <footer>
        <div class="footerDiv mt-4">
            <div class="div1">
                <h4><b>Company</b></h4>
                <li>
                    <a href="#">
                        <h5>About us</h5>
                    </a>
                </li>
               
                <li>
                    <a href="#">
                        <h5>Reservation</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Privacy & Policy</h5>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h5>Terms & condition</h5>
                    </a>
                </li>
            </div>
            <div class="div2">
                <h4><b>Contact us</b></h4>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('logo/location.png') }}"class="imgFooter" alt="">
                    <h6>&nbsp;789 PQR Lane,New Delhi India</h6>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('logo/phone.png') }}"class="imgFooter" alt="">
                    <h6>&nbsp;+91234567890</h6>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('logo/message.png') }}"class="imgFooter" alt="">
                    <h6>&nbsp;resto@gmail.com</h6>
                </div>
                <div class="d-flex justify-content-center mt-4">
                  <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}" class="imgFooter mr-4"alt=""></a></div>
                  <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}" class="imgFooter mr-4"alt=""></a></div>
                  <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}" class="imgFooter mr-4"alt=""></a></div>
                </div>
            </div>
            <div class="div3">
                <h4><b>Opening</b></h4>
                <div  class="d-flex justify-content-center">
                <h5>Monday-Saturday</h5>
                </div>
                <div  class="d-flex justify-content-center">
                    <h6>09AM-09PM</h6>
                    </div>
                    <div  class="d-flex justify-content-center">
                        <h5>Sunday</h5>
                        </div>
                        <div  class="d-flex justify-content-center">
                            <h6>10AM-08PM</h6>
                            </div>

            </div>
        </div>
        <div  class="d-flex justify-content-center">
            <p>Copyright © All Rights Reserved.2023</p>
        </div>

    </footer>
</body>

</html>
