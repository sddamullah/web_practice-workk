<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>fruit web</title>
    <link rel="stylesheet" href="{{Asset('assets/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    @foreach($data as $tabi)

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid ">
            <div class="row  mt-2">
                <div class="col-md-2 ">
                    <form class="">
                        <input class="form-control-md ms-md-5 bg-transparent text-dark me-2 search" type="search" placeholder="Search" aria-label="" />
                    </form>
                </div>
                <div class="col-md-3 navmenue d-flex  ">

                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item navop mx-3">
                                <a class="nav-link active text-secondary" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item navop mx-3">
                                <a class="nav-link " href="#menu">Menu</a>
                            </li>
                            <li class="nav-item navop mx-3">
                                <a class="nav-link " href="{{url('admin/')}}">About</a>
                            </li>
                            <li class="nav-item dropdown navop mx-3">
                                <a class="nav-link dropdown-toggle   " href="#book" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sevices
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item  dpi " href="#book">Dining</a></li>
                                    <li><a class="dropdown-item dpi" href="#book">Take away</a></li>
                                    <li><a class="dropdown-item dpi" href="#book">Something else </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>








    <div class="container">


        <div class="row " id="home">
            <div id class="col-md-6 offset-md-3 shadow-lg bg-dark p-2 text-dark mt-md-5" style="opacity: 0.7">
                <p class="text-light  fw-bold text-head  h1 htext shadow-text">
                    {{$tabi->mainehead}}
                </p>
                <p class="text-light fw-bold fs-6">
                    {{$tabi->headcontant}}
                </p>
            </div>
        </div>
        <div class="row mt-md-5">
            <div class="col-md-3 col-xs-6 offset-md-3 col-sm-6">
                <button type="button" class="btn text-light button1 px-md-5 fw-bold">
                    READ MORE
                </button>
            </div>
            <div class="col-md-3 col-xs-6 col-sm 6">
                <button type="button" class="btn button2 px-md-4 fw-bold">
                    VIEW ALL RECIPIES
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img src="{{Asset('assets/img.jpg')}}" class="img-fluid img-head" alt="" />
            </div>
        </div>
    </div>
    <br /><br />
    <!-- ---------------------------menue---------------------- -->
    <div class="container">
        <div class="row mt-md-5 " id="menu">
            <div class="col-md-6 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{Asset('assets/salad1-removebg-preview.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-6">
                        <p class="h2 mt-md-3">Caesar salad</p>
                        <p class="h1 mt-md-4 fw-bold">$20</p>
                        <p class="h6 mt-md-3">
                            Sample text. Click to select the text box. Click again or double
                            click to start editing the text.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{Asset('assets/salad4-removebg-preview.png')}}" class="img-fluid" id="salad2" alt="" />
                    </div>
                    <div class="col-md-6">
                        <p class="h2 mt-md-3">Caesar salad</p>
                        <p class="h1 mt-md-4 fw-bold">$30</p>
                        <p class="h6 mt-md-3">
                            Sample text. Click to select the text box. Click again or double
                            click to start editing the text.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-md-5">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{Asset('assets/salad1-removebg-preview.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="col-md-6">
                        <p class="h2 mt-md-3">Caesar salad</p>
                        <p class="h1 mt-md-4 fw-bold">$35</p>
                        <p class="h6 mt-md-3">
                            Sample text. Click to select the text box. Click again or double
                            click to start editing the text.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{Asset('assets/salad1-removebg-preview.png')}}" class="img-fluid" id="salad2" alt="" />
                    </div>
                    <div class="col-md-6">
                        <p class="h2 mt-md-3">Caesar salad</p>
                        <p class="h1 mt-md-4 fw-bold">$15</p>
                        <p class="h6 mt-md-3">
                            Sample text. Click to select the text box. Click again or double
                            click to start editing the text.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------middle---------------------- -->
    <div class="container-fluid">
        <div class="row mt-md-5">
            <div class="col-md-6 left px-0">
                <p class="h1 fw-bold healthy ms-md-5 lh-1 text-light">{{$tabi->firstchart_head}}</p>
                <p class="px-5 text-light mt-md-5">
                    {{$tabi->firstchart_contant}}
                </p>
            </div>
            <div class="col-md-6 px-0">
                <img src="{{Asset('assets/mix-removebg-preview.png ')}}" class="img-fluid straw" alt="" />
            </div>
        </div>
    </div>
    <!-- -----------------------------------------carasoule head------------------------------- -->

    <div class="container">
        <div class="row mt-md-5">
            <div class="col-md-8 offset-md-4 carasole">
                <p class="h1 fw-bold itext">Learn Cooking Online</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p class="text-center">
                    Sample text. Click to select the text box. Click again or double
                    click to start editing the text.
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{Asset('assets/rs2.jpg ')}}" class="img-fluid d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{Asset('assets/rs3.jpg ')}}" class="img-fluidd-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{Asset('assets/rs4.jpg ')}}" class="img-fluidd-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="{{Asset('assets/rs5.jpg ')}}" class="img-fluidd-block w-100" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- -------------------------------ice----------------------------------- -->
    <div class="container-fluid">
        <div class="row mt-md-5">
            <div class="col-md-6 px-0 ice-left">
                <p class="h5 ice mx-5 text-light fw-bold mt-md-5 lh-1">{{$tabi->secondchart_head}}</p>
                <p class="h6 mx-md-5 mt-md-5 text-light lh-base">
                    {{$tabi->secondchart_contant}}
                    <a href="https://nicepage.com/website-templates/preview/delicious-and-healthy-food-583333?device=desktop" class="text-light">integer</a>
                    enim neque volutpat. Augue mauris augue neque gravida in
                    <a class="text-light" href="https://nicepage.com/website-templates/preview/delicious-and-healthy-food-583333?device=desktop">Freepick</a>. Image from
                </p>
                <button class="btn button3 text-light fw-bold ms-md-5 mt-md-5 px-5">
                    READ MORE
                </button>
            </div>
            <div class="col-md-6 px-0">
                <img src="{{Asset('assets/icecream.webp ')}}" class="img-fluid icepic" alt="" />
            </div>
        </div>
    </div>

    <!-- ---------------------------------------fresh food----------------------     -->

    <div class="container">
        <div class="row">
            <!-- <div class="col-md-2">
          <img
            src="https://images01.nicepage.com/a1389d7bc73adea1e1c1fb7e/541a192175af5eb3a06fd5e7/33510142.png"
            alt=""
            class="img-fluid w-100 h-30 mb-md-5 mt-md-5"
          />
          <div>
            <img src="30off.png" class="img-fluid off" alt="" />
          </div>
        </div> -->

            <div class="col-md-12" id="book">
                <div class="row mt-md-5 mb-md-5 form">
                    <div class="col-md-7 px-0">
                        <img src="{{Asset('assets/pix.jpg ')}}" class="img-fluid formimg" alt="" />
                    </div>
                    <div class="col-md-5 bg-dark">
                        <div class="row mt-md-5 ms-md-3">
                            <div class="col-md-12">
                                <p class="h3 fw-bold text-light mb-md-5">
                                    Booking place for your dinner!
                                </p>
                            </div>
                        </div>

                        <div class="row ms-md-3">
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Your Name" />
                                    <label for="name" id="lable" class="text-light">
                                        First Name
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-md-3 mt-3">
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Last Name" />
                                    <label for="name" id="lable" class="text-light">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row ms-md-3 mt-md-3">
            <div class="col-md-10">
              <div class="form-floating">
                <input
                  type="text"
                  class="form-control border-0 border-bottom bg-transparent text-light"
                  id="name"
                  placeholder="Your Email"
                />
                <label for="name" id="lable" class="text-light"
                  >Your Email</label
                >
              </div>
            </div>
          </div> -->
                        <div class="row ms-md-3 mt-3">
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Phone Number" />
                                    <label for="name" id="lable" class="text-light">Your Phone number</label>
                                </div>
                            </div>
                        </div>

                        <div class="row ms-md-3 mt-3">
                            <div class="col-md-10">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Phone Number" />
                                    <label for="name" id="lable" class="text-light">Date of Event</label>
                                </div>
                            </div>
                        </div>
                        <div class="row ms-md-3">
                            <di class="col-md-10 mt-md-5 mt-3">
                                <p class="h6 text-light">Select Your Dining Space</p>
                                <ul class="list-group list-group-horizontal d-flex justify-content-evenly">
                                    <div class="d-flex" id="person">
                                        <li onclick="show()" class="list-group-item">2</li>
                                        <span class="text-light mt-1" id="span"></span>
                                    </div>
                                    <li class="list-group-item">4</li>
                                    <li class="list-group-item">6</li>
                                    <li class="list-group-item">8</li>
                                    <li class="list-group-item">10</li>
                                </ul>
                            </di>
                        </div>
                        <div class="row">
                            <div class="col-md-8 offset-md-2 mt-md-5 mt-3">
                                <input type="submit" class="btn fw-bold text-light button" value="Book Now" />
                            </div>
                        </div>
                        <div class="row ms-md-3 mt-md-3">
                            <div class="col-md-9">
                                <a href="#" class="link text-decoration-none">Verify your booking info from your phone</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- =====================================footer------------------------ -->
    <div class="container-fluid">
        <div class="row subcol">
            <div class="col-md-10 offset-md-1 subcol">
                <p class="h1 fw-bold sub text-light text-center">
                    Subscribe And Follow Us
                </p>
            </div>
        </div>
        <div class="row subcol">
            <div class="col-md-8 offset-md-2 mt-md-5 text-light">
                <p class="h6 mx-md-5 text-center mb-3">
                    Be part of the story and follow us on Twitter via
                    <a href="#">name</a> and subscribe to the newsletter for news and
                    updates about our workshops
                </p>
                <input type="email " class="form-control bg-transparent email border-2" placeholder="email" />
                <input type="submit" class="mit btn button5 text-light fw-bold fs-54  mt-3 mb-3" value="submit" />
            </div>
        </div>
    </div>

    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="container-fluid  bg-dark mx-0">
        <!-- Footer -->
        <footer class="text-center text-white bg-dark" ">
    <!-- Grid container -->
    <div class=" container">
            <!-- Section: Links -->
            <section class="mt-5">
                <!-- Grid row-->
                <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">About us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#menu" class="text-white">Menu</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#home" class="text-white">Home</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Help</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                            <a href="#!" class="text-white">Contact</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-5" />

            <!-- Section: Text -->
            <section class="mb-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>
                            Be part of the story and follow us on Twitter via name and subscribe to the newsletter for news and updates about our workshops.
                        </p>
                    </div>
                </div>
            </section>
            <!-- Section: Text -->

            <!-- Section: Social -->
            <section class="text-center mb-5">
                <a href="" class="text-white me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                </a>
            </section>
            <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">Natural-foods.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
    </div>
    <!-- End of .container -->

    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>