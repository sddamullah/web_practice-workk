<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Hello, world!</title>

    <style>

        .navbar-dark .navbar-nav .nav-link {
            color: rgb(255 255 255) !important;
            font-weight: 400;
        }
        a{
            text-decoration: none;
        }
        @media only screen and (max-width: 768px) {
           #imgon{
            right: -30%;
            top: -80%;
            position: absolute;
            font-size: 10px;
            font-weight: normal;
            /* display: none; */
        }
        #imgof{
            /* top: -30%; */
            position: relative;
        }
        #side{
            height: 100%;
            width: 100%;
        }
        /* #pad{
            padding-left: -30px;
        } */
        }
    </style>
  </head>
  <body>
   <!--========================================== navbar ===============================================-->
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f03433;">
        <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-weight: bold; font-size: x-large;">TECHNICAL ATIF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Client</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
                </a>
                <ul class="dropdown-menu bg-light" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Web Development</a></li>
                <li><a class="dropdown-item" href="#">App Development</a></li>
                <li><a class="dropdown-item" href="#">Software Development</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">SEO</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
            </li>
            </ul>
            <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
        </div>
    </nav>

    <!--======================================== carousel =============================================-->
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="{{asset('asset/3.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="{{asset('asset/6.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <img src="{{asset('asset/5.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="{{asset('asset/7.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fourth slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="{{asset('asset/9.jpg')}}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Fifth slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container-fluid">
    @foreach($atif as $atifs)
        <form action="{{url('/update/form/register/'.$atifs->id)}}" method="post">
            @csrf

        <!--==================================== solution ============================================-->
        <div class="row justify-content-evenly mt-5">
            <div class="col-md-5 pt-4">
                <h1 style="font-weight: bold;">Digital Solutions <br> provider for your <br> brands</h1>
                <p>Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                <button type="button" class="btn btn-warning rounded-0 p-2 mt-2" style="width: 50%; font-weight: bold; font-size: 20px;">Read More</button>
                <p class="mt-3">Image from <a href="#">Atif khan</a></p>
            </div>
            <div class="col-md-5 text-center pt-4" >
                <img src="{{asset('asset/2.png')}}" class="img-fluid" alt="" width="80%" id="side">
            </div>
        </div>


        <!--===================================== cards ==============================================-->
        <div class="row mt-5 mb-4">
            <div class="col-md-3 pt-3">
                <img src="{{asset('asset/pexels-negative-space-97077.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 pt-3">
                <img src="{{asset('asset/pexels-sora-shimazaki-5935794.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 pt-3">
                <img src="{{asset('asset/pexels-rodrigo-santos-3888149.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 pt-3">
                <img src="{{asset('asset/pexels-rahul-pandit-1933900.jpg')}}" class="img-fluid" alt="">
            </div>
        </div>

        <!--==================================== feature ============================================-->
        <div class="continer-fluid">
          <div class="row">
            <div class="col">
              <div class="row">
                  <div class="col-12">
                      <h3 class="display-6 text-center fw-normal mt-5 mb-2">
                        We provides you with a customized website design that's <br> perfect for your business or personal site.
                      </h3>
                  </div>
              </div>
              <!-- @foreach($atif as $atifs) -->

              <div class="row justify-content-evenly text-center pt-3 pb-3">
                  <div class="col-md-3 mt-5">
                      <h1><i class="bi bi-file-code-fill text-primary"></i></h1>
                      <h5>Website Development</h5>
                       <td>{{$atifs->web}}</td>
                      <!-- <p>Web development, also known as website development, refers to the tasks <br> associated with creating, building, and maintaining websites and web applications that run online on a browser.It may, however, also include web design, <br> web programming, and database management.</p> -->
                  </div>
                  <div class="col-md-3 mt-5">
                      <h1><i class="bi bi-easel-fill text-danger"></i></h1>
                      <h5>App Development</h5>
                      <td>{{$atifs->app}}</td>
                      <!-- <p>Application development also known as app development is the process of planning, designing, creating, testing, and deploying a software application to perform various business operations.It can be done by massive organizations with large teams working on projects, or by a single freelance developer.</p> -->
                  </div>
                  <div class="col-md-3 mt-5">
                      <h1><i class="bi bi-calendar-range-fill text-success"></i></h1>
                      <h5>Software Development</h5>
                      <td>{{$atifs->software}}</td>
                      <!-- <p>Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software. Software itself is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.</p> -->
                  </div>
              </div>
              <!-- @endforeach -->
            </div>
          </div>
        </div>

        <!--==================================== growth ============================================-->
        <div class="row justify-content-evenly pt-5 pb-5" style="background-image: url({{asset('asset/pexels-jorge-filter.jpg')}}); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
            <div class="col-md-5 pt-5">
                <img src="{{asset('asset/74167b79-6142-4cf3-baba-d84c7d59a806.png')}}" class="img-fluid" alt="" id="side">
            </div>
            <div class="col-md-5 pt-3">

                <h5 class="mt-3 text-white">Website Development</h5>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h5 class="mt-3 text-white">App Development</h5>
                  <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h5 class="mt-3 text-white">Software Development</h5>
                  <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h5 class="mt-3 text-white">SEO</h5>
                  <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  <h5 class="mt-3 text-white">Marketing</h5>
                  <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
            </div>
        </div>

        <!------------------------------------------------ faq ---------------------------------------------------->
        <div class="row justify-content-evenly pt-5 pb-5">
            <div class="col-md-10">
                <h3 class="text-center pb-4">FAQ</h3>

                <div class="accordion accordion-flush border" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <h6>Website Developer</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Web development, also known as website development, refers to the tasks associated with creating, building, and maintaining websites and web applications that run online on a browser. It may, however, also include web design, web programming, and <code>database  management.</code></div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <h6>App Developer</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> <code>Application development</code> also known as app development is the process of planning, designing, creating, testing, and deploying a software application to perform various business operations.It can be done by massive organizations with large teams working on projects, or by a single freelance developer.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <h6>Software Developer</h6>
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software.
                          <code>Software itself</code> is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            <h6>SEO</h6>
                          </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Software development refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software.
                            <code>Software itself</code> is the set of instructions or programs that tell a computer what to do. It is independent of hardware and makes computers programmable.</div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>

        <!---------------------------------------------- contact -------------------------------------------------->
        <div class="row justify-content-evenly pt-2 pb-5" style="background-color: #f1f1f1;">
            <div class="col-md-5 mt-5">
                <h3 class="mb-4">Contact Form</h3>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-danger">Submit</button>
                  </form>
            </div>
            <div class="col-md-5 mt-5">
                <h3 class="mb-4">Address</h3>
                <p>1180 Kimberly Way, WILLISTON PARK <br>
                    New York - 11596 <br>
                    <i class="bi bi-telephone"></i> : 917-771-5081
                </p>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d217898.30126027606!2d72.92448878218774!3d31.42346604074723!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392242a895a55ca9%3A0xdec58f88932671c6!2sFaisalabad%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1693372251042!5m2!1sen!2s" style="width: 100%;" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <!--============================================ footer ================================================-->
        <!-- Footer -->
        <footer class="text-center text-lg-start text-muted">     
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-twitter"></i>
            </a>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-google"></i>
            </a>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="#" class="me-4 link-secondary">
                <i class="bi bi-github"></i>
            </a>
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="bi bi-unlock-fill"></i>&nbsp;&nbsp;Company name
                </h6>
                <h3>Technical Atif</h3>
                <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Products
                </h6>
                <p>
                <a href="#!" class="text-reset">Html</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Css</a>
                </p>
                <p>
                    <a href="#!" class="text-reset">Javascript</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Php</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Laravel</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Useful links
                </h6>
                <p>
                <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Help</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="bi bi-house-fill"></i> New York, NY 10012, US</p>
                <p>
                    <i class="bi bi-envelope-fill"></i>
                info@example.com
                </p>
                <p><i class="bi bi-telephone-plus-fill"></i> + 01 234 567 88</p>
                <p><i class="bi bi-printer-fill"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Technical-Atif.com</a>
        </div>
        <!-- Copyright -->
        </footer>
    <!-- Footer -->
        </form>
        @endforeach
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>