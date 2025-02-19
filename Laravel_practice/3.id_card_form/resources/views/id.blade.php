<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ID card form</title>
    <link rel="stylesheet" href="{{Asset('assets/style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>
    <div class="container pb-4">
        <form action="{{url('id/form')}}" method="post">
            @csrf
            <!-- ----front---- -->
            <div class="row mt-md-4 ">
                <div class="col-md-12">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="checkbox" onclick="check()" />
                        <label class="form-check-label text-light" for="checkbox"><span id="clable"></span></label>
                    </div>
                </div>
            </div>
            <div class="row ms-md-5 " id="front">
                <div class="col-md-5 form offset-md-3 mt-md-5 mb-md-5 rounded-3">
                    <p class="h2 ms-5 text-light">ID Card Information Front</p>

                    <div class="row my-3">
                        <div class="col-md-6 mt-3">
                            <input type="text" name="fname" class="form-control form-control-sm " placeholder="First name" aria-label="First name" />
                        </div>
                        <div class="col-md-6 mt-3 ">
                            <input type="text" name="lname" class="form-control form-control-sm  " placeholder="last name" aria-label="last name" />
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-12">
                            <input type="text" class="form-control form-control-sm" name="fthname" placeholder="Father name" aria-label="Father name" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                                <option name="gender" selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">FeMale</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="col-md-8">
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example">
                                <option name="country" selected>select your country</option>
                                <option value="1">pakistan</option>
                                <option value="2">india</option>
                                <option value="3">sirilanka</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="idnum" class="form-label text-light">Identity Number</label>
                            <input id="idnum" name="idnum" type="text" class="form-control form-control-sm" placeholder=" XXXXX-XXXXXXX-X" aria-label=" Identity Number" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="dob" class="form-label text-light">Date of Birth</label>
                            <input id="dob" type="date" name="dob" class="form-control form-control-sm" placeholder="Date of Birth" aria-label="Date of Birth" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label for="issue" class="form-label text-light">Issue Date</label>
                            <input id="issue" type="date" name="idate" class="form-control form-control-sm" placeholder="issue date" aria-label="issue date" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="expirey" class="form-label text-light">Expirey Date</label>
                            <input id="expirey" type="date" name="exdate" class="form-control form-control-sm" placeholder="expirey date" aria-label="expirey date" />
                        </div>
                    </div>
                </div>
            </div>

            <!-- ------back------ -->
            <div class="row mt-md-4 back ms-md-5" id="back">
                <div class="col-md-5  offset-md-3 rounded-3 form">
                    <div class="row">
                        <p class="h2 text-light ms-md-4">ID card Information Back</p>
                        <div class="col-md-12 my-3">
                            <label for="paddress" class="form-label text-light">Permanent Address</label>
                            <input type="text" class="form-control" name="paddress" id="paddress" placeholder="Permanent Address" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label for="taddress" class="form-label text-light">Temporary Address</label>
                            <input type="text" class="form-control" name="taddress" id="taddress" placeholder="Temporary Address" />
                        </div>
                    </div>

                    <div class="col-md-4 offset-md-6 pb-3  d-flex ">
                        <input type="submit" onclick="display()" value="Submit" class="btn btn-success  buttonrounded-1
            text-light fw-bold px-3 mx-md-2 ">
                        <a href="table" class="btn btn-primary fw-bold textlight">view_table</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        function check() {

            var back = document.getElementById("back");
            var clable = document.getElementById("clable");
            var front = document.getElementById("front");
            if (back.style.display === "none") {
                back.style.display = "block";
                front.style.display = "none";
                clable.innerHTML = "back page"
            } else {
                back.style.display = "none";
                front.style.display = "block";
                clable.innerHTML = "front page"
            }


        }
        // function display(){
        //     document.getElementById.('back').style.display="none";
        // }
        //   function check() {
        //     var checkbox;
        //     checkbox = document.getElementById("checkbox");
        //     var back = document.getElementById("back");
        //     var clable = document.getElementById("clable");
        //     var front = document.getElementById("front");

        //     if (checkbox.checked) {

        //       back.style.display = "none";
        //       front.style.display = "block";
        //       clable.innerHTML = "front page";
        //         console.log("congratulations");

        //     }
        //       if(!checkbox.checked) 
        //       {
        //      front.style.display = "none";
        //      back.style.display = "block";======
        //       clable.innerHTML = "Back page";
        //     }
        //   }
        check();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>