<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="    {{asset('asset/css/stylesheet')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <style>
      body {
        background: black;
      }
    </style> -->
</head>

<body>
    <div class="container main">
        <div class="container second">
            <div class="row">
                <div class="col">
                    <img src="{{ asset('asset/assinement.jpg') }}" class="imgfluid" alt="" width="100%" height="700px" />
                </div>
                <div class="col mt-5 ms-5">
                    <form action="{{url('form/register')}}" method="post">
                        @csrf
                        <h3 class="text-uppercase">student registration form</h3>
                        <div class="row">
                            <div class="col-5">
                                <input type="text" name="fname" class="form-control mt-5" placeholder="First name" aria-label="First name" />
                            </div>
                            <div class="col-5">
                                <input type="text" name="lname" class="form-control mt-5" placeholder="Last name" aria-label="Last name" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-10">
                                <input type="text" name="address" class="form-control mt-4" id="inputAddress" placeholder="Address..." />
                            </div>
                        </div>
                        <!-- check and radio -->
                        <div class="col-9 d-flex justify-content-between mt-4">
                            <label for="">Gender:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="check1" type="checkbox" id="inlineCheckbox1" value="option1" />
                                <label class="form-check-label" for="inlineCheckbox1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="check2" type="checkbox" id="inlineCheckbox2" value="option2" />
                                <label class="form-check-label" for="inlineCheckbox2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="check3" type="checkbox" id="inlineCheckbox3" value="option3" />
                                <label class="form-check-label" for="inlineCheckbox3">Other
                                </label>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-5">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>State</option>
                                    <option value="1">Pakistan</option>
                                    <option value="2">Canada</option>
                                    <option value="3">Austrailia</option>
                                </select>
                            </div>
                            <div class="col-5">
                                <select name="city" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>City</option>
                                    <option value="1">Islamabad</option>
                                    <option value="2">Faisalabad</option>
                                    <option value="3">pattuki</option>
                                </select>
                            </div>
                        </div>

                        <!-- pincode-course-emailid -->
                        <div class="row my-4">
                            <div class="col-10">
                                <input name="pincode" type="text" class="form-control" id="pincode" placeholder="Pincode" />
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-10">
                                <select name="course" class="form-select" aria-label="Default select example">
                                    <option selected>Select course</option>
                                    <option value="1">Website Development</option>
                                    <option value="2">Digital Marketing</option>
                                    <option value="3">Graphic designing</option>
                                </select>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-10">
                                <input name="email" type="email" class="form-control" id="email-id" placeholder="Email ID" />
                            </div>
                        </div>
                        <div class="row d-flex justify-content-end my-5">
                            <div class="col-3">
                                <input value="RESET ALL" type="submit" class="btn btn-link text-decoration-none button">

                            </div>
                            <div class="col-5">
                                <input type="submit" value="SUBMIT FORM" class="btn fw-bold text-light btn-warning  ">


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>