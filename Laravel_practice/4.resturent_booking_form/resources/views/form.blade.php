<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barcelona</title>
    <link rel="stylesheet" href="{{Asset('style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <form method="post" action="{{url('register/form')}}">
        @csrf
        <div class="container  ">
            <div class="row mt-md-5 mb-md-5 form  ">
                <div class="col-md-7 px-0">
                    <img src="{{Asset('dark.jpg')}}" class="img-fluid" alt="" />
                </div>
                <div class="col-md-5 bg-dark ">
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
                                <input type="text" name="fname" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Your Name" />
                                <label for="name" id="lable" class="text-light">
                                    First Name
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-md-3 mt-3">
                        <div class="col-md-10">
                            <div class="form-floating">
                                <input type="text" name="lname" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Last Name" />
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
                                <input type="text" name="number" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Phone Number" />
                                <label for="name" id="lable" class="text-light">Your Phone number</label>
                            </div>
                        </div>
                    </div>

                    <div class="row ms-md-3 mt-3">
                        <div class="col-md-10">
                            <div class="form-floating">
                                <input type="text" name="date" class="form-control border-0 border-bottom bg-transparent text-light" id="name" placeholder="Phone Number" />
                                <label for="name" id="lable" class="text-light">Date of Event</label>
                            </div>
                        </div>
                    </div>
                    <div class="row ms-md-3   ">
                        <di class="col-md-10  mt-md-5 mt-3">
                            <p class="h6 text-light">Select Your Dining Space</p>
                            <ul class="list-group list-group-horizontal  d-flex  justify-content-evenly">

                                <div class="d-flex" id="person">
                                    <li onclick="show()" class="list-group-item">2</li><span class="text-light mt-1 " id="span"></span>
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
                            <input type="submit" class="btn fs-5 fw-bold text-light button px-4 " value="Book Now">

                        </div>
                    </div>
                    <div class="row ms-md-3 mb-3 mt-md-3">
                        <div class="col-md-9">
                            <a href="#" class="link text-decoration-none">Verify your booking info from your phone</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </form>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Phone</th>
                <th scope="col">Event Date</th>
                <th scope="col">Operations</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tab as $tabi)
            <tr>
                <th>{{$tabi->fname}}</th>
                <td>{{$tabi->lname}}</td>
                <td>{{$tabi->number}}</td>
                <td>{{$tabi->date}}</td>

                <td>

                    <a href="{{url('delete', $tabi->id)}}" class=" btn btn-danger text-light text-decoration-none">Delete</a>
                    <a href="{{url('update',$tabi->id)}}" class=" btn btn-primary text-light text-decoration-none">Edit</a>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>

    <!-- <script>
function show(){
    var span = document.getElementById('span');
    // document.getElementById('span').innerHTML=("person");
    if(span.innerHTML=("")){
        span.innerHTML=("person");
    }
}
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>