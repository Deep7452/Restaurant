<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="aboutHeader">
        <x-header />
    </div>
    <div class="aboutpageDiv">
        About us
    </div>
      <div class="aboutcantainer">
        <div class="aboutcantainer1">
                <div class="slide fade">
                  <div class="number">1 \4</div>
                  <div class="imgText" style="text-align: center"> image</div>
                  <img src="{{ asset('images/about.jpg') }}"class="imageAbout">
                </div>
                <div class="slide fade">
                  <div class="number">2 \3</div>
                  <div class="imgText" style="text-align: center"> image</div>
                  <img src="{{ asset('images/booktable.jpg') }}"class="imageAbout">
                </div>
                <div class="slide fade">
                  <div class="number">3\4</div>
                  <div class="imgText" style="text-align: center"> image</div>
                  <img src="{{ asset('images/manu.jpg') }}"class="imageAbout">
                </div>
                <div class="slide fade">
                  <div class="number">4\4</div>
                  <div class="imgText" style="text-align: center"> image</div>
                  <img src="{{ asset('images/bg4.jpg') }}"class="imageAbout">
                </div>
              
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
      </div>

        <div class="aboutcantainer2">
            <span>
                <h1 class="d-flex justify-content-center mt-4">About</h1>
            </span>
            <p class="ml-4"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo molestiae, omnis
                consequuntur mollitia quo est nisi odio architecto sequi dolorem laborum, animi suscipit
                illo placeat, id labore quae. Exercitationem, nulla. Enim, et provident blanditiis molestiae
                consectetur nostrum magniLorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa aut nostrum
                voluptatibus adipisci dicta facere reprehenderit nulla nisi laudantium cupiditate ut harum vitae
                incidunt id, animi ad, iure velit dolorem assumenda voluptatum dignissimos perspiciatis unde fugiat!
                Iste quisquam, quos ullam aspernatur culpa modi numquam labore dicta temporibus, vero accusamus
                necessitatibus nesciunt praesentium, porro minima cum? Maxime eius dolores expedita voluptatem itaque
                corporis quia? Eaque mollitia possimus est, accusantium adipisci molestiae, aliquid aperiam impedit
                laudantium neque earum. Sed exercitationem commodi pariatur a illo, rem magni rerum ea recusandae ex
                optio culpa voluptatem quis porro debitis adipisci, non, quasi quam assumenda. Eos. itaque illo saepe
                similique, suscipit, repudiandae ratione quos odit cu
                mque eaque reiciendis velit. Iste, cumque ex accusantium eius voluptates<span id="dot">.</span>
                <span id="more"> ab non vitae, sint,
                    in praesentium deleniti enim ut. Ipsam animi delectus ipsa consequuntur natus! Similique totam
                    sapiente an
                    imi dolore soluta sunt beatae quod obcaecati iste hic suscipit rerum aliquam quia sit voluptates,
                    vero facilis
                    consectetur earum! Non assumenda dolores in accusamus dolorum iste deserunt obcaecati ipsam eveniet!
                    Atque impedit
                    tempore voluptatibus iste quae quisquam repellendus architecto voluptates est quaerat, pariatur
                    voluptatem doloremque
                    expedita eius ipsa fugiat perferendis excepturi nesciunt ea velit? Assumenda ab illum doloribus at
                    neque illo iure, beatae
                    repudiandae maiores consectetur explicabo quidem obcaecati. Provident dolorum animi enim. Voluptate
                    totam odit sunt sint sed, te
                    mpore libero deserunt magnam perspiciatis dolore, reiciendis adipisci possimus aut saepe cumque
                    tempora non dicta omnis. Sint in a ea m
                    axime blanditiis eveniet adipisci, provident quae quisquam facere, illo facilis enim praesentium
                    voluptatum quis saepe debitis iure eos animi! A
                    periam assumenda consequuntur dolore perferendis consequatur.</span></p>
            <button class="btn btn-primary ml-4" id="myBtn" onclick='myFunction()'>Read more</button>

        </div>
    </div>
    </div>
    <span>
        <h5 class="text-center mt-4"><i>Team members</i></h5>
    </span>
    <span>
        <h1 class="text-center mt-4"><b>Our Master chefs</b></h1>
    </span>
    <div class="teamDiv mt-4">
        <div class="teamSubDiv" id="d">
            <h4>Name</h4>
            <img src="{{ asset('images/team-1.jpg') }}" alt="image" class="image-chef">
            <h5 class="mt-2"> designation</h5>
            <div class="d-flex justify-content-center ml-4 mt-4">
                <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
            </div>
        </div>
        <div class="teamSubDiv" id="d">
            <h4>Name</h4>
            <img src="{{ asset('images/team-1.jpg') }}" alt="image" class="image-chef">
            <h5 class="mt-2"> designation</h5>
            <div class="d-flex justify-content-center ml-4 mt-4">
                <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
            </div>
        </div>
        <div class="teamSubDiv" id="d">
            <h4>Name</h4>
            <img src="{{ asset('images/team-1.jpg') }}" alt="image" class="image-chef">
            <h5 class="mt-2"> designation</h5>
            <div class="d-flex justify-content-center ml-4 mt-4">
                <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
            </div>
        </div>
        <div class="teamSubDiv" id="d">
            <h4>Name</h4>
            <img src="{{ asset('images/team-1.jpg') }}" alt="image" class="image-chef">
            <h5 class="mt-2"> designation</h5>
            <div class="d-flex justify-content-center ml-4 mt-4">
                <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
            </div>
        </div>
        <div class="teamSubDiv" id="d">
            <h4>Name</h4>
            <img src="{{ asset('images/team-1.jpg') }}" alt="image" class="image-chef">
            <h5 class="mt-2"> designation</h5>
            <div class="d-flex justify-content-center ml-4 mt-4">
                <div class="icon1"> <a href="#"> <img src="{{ asset('logo/twitter.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon2"><a href="#"><img src="{{ asset('logo/facebook.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
                <div class="icon3"><a href="#"> <img src="{{ asset('logo/instagram.png') }}"
                            class="imgFooter mr-4"alt=""></a></div>
            </div>
        </div>
    </div>
    <div class="footerAbout mt-4">
        <x-footer />
    </div>


</body>

</html>

<script>
  let slideIndex =0;
  showSlides();
  function showSlides(){
    let slides =document.getElementsByClassName('slide');
    let dots = document.getElementsByClassName('dot');
    for(i=0; i<slides.length; i++){
      slides[i].style.display = 'none';
    }
    slideIndex++;
    if(slideIndex > slides.length){slideIndex =1}
    for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" activee", "  ");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " activee";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
  
    function myFunction() {
        var dots = document.getElementById('dot');
        var moreText = document.getElementById('more');
        var btnText = document.getElementById('myBtn');
        if (dots.style.display === 'none') {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
    
    
</script>
