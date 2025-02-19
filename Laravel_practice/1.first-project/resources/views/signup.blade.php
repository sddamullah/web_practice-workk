<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <form action="{{url('form/register')}}" method="post">
    @csrf
    <div class="container  ">
      <div class="row mt-md-5  ">
        <div class="col-md-5 offset-md-1 text-light bg-primary ">
          <p class="h1 text-light mx-md-4 mt-md-5 mt-md-4 ">Information</p>
          <p class="p mx-md-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae error reprehenderit perferendis reiciendis veniam consectetur fugit totam, nostrum eaque eius eum fugiat praesentium quibusdam delectus, distinctio nihil aliquam tenetur quis assumenda! Similique totam, modi voluptatum minus autlorem dicta incidunt iste cumque at ipsam dolorum.</p>
          <p class="p mx-md-4">quis quis officiis provident delectus est do assumenda! Similique totam, modi voluptatum minus aut quis officiis provident delectus est dolorem dicta incidunt iste cumque at ipsam dolorum.</p>
          <div class="row">
            <div class="col-md-12 ms-md-4 mt-md-3">
              <button type="button" class="btn btn-light button px-4 py-2 fw-bold">Have An Account </button>
            </div>
          </div>
        </div>
        <div class="col-md-5 bg-light px-5 form ">
          <div class="row">
            <div class="col-md-12">
              <p class="h1 text-primary mt-md-5 mb-md-4">REGISTER FORM</p>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-6 ">

              <label for="firstname4" class="form-label">First Name</label>
              <input name="firstname4" type="text" class="form-control" id="firstname4">
            </div>
            <div class="col-md-6">
              <label for="lastname4" class="form-label">Last Name</label>
              <input name="lastname4" type="text" class="form-control" id="lastname4">
            </div>
          </div>
          <div class="row my-3">
            <div class="col-md-12">
              <label for="email4" class="form-label">Your Email</label>
              <input type="email" name="email4" class="form-control" id="email4">
            </div>
          </div>
          <div class="row ">
            <div class="col-md-6 ">

              <label for="password4" class="form-label">Password</label>
              <input type="password" name="password4" class="form-control" id="password4">
            </div>
            <div class="col-md-6">
              <label for="confirmpassword4" class="form-label">Confirm Password</label>
              <input type="password" name="cpassword4" class="form-control" id="cpassword4">
              <span id="pwderror" style="color:red ;"></span>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-10">
              <div class="form-check">
                <input class="form-check-input" name="gridcheck" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  I agree to the <a href="#">Term and conditions</a>
                </label><br>
                <span id="checkerror" style="color: red;"></span>
                <span id="checkok" style="color: green;"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 mt-md-4 mb-md-5 ">
              <!-- <button type="submit" class="btn  btn-primary button px-4 py-2 fw-normal">Register</button> -->
              <input type="submit" onclick="validation()" name="button" class="btn  btn-primary button px-4 py-2 fw-normal" value="Register">
            </div>
          </div>
        </div>
      </div>

    </div>

  </form>
  <script>
    function validation() {
      var fname, lname, email, pwd, cpwd, check;
      fname = document.getElementById("firstname4");
      lname = document.getElementById("lastname4");
      email = document.getElementById("email4");
      pwd = document.getElementById("password4");
      cpwd = document.getElementById("cpassword4");
      check = document.getElementById("gridCheck")
      if (fname.value == "" || lname.value == "" || email.value == "" || pwd.value == "" || cpwd.value == "") {
        alert('You have missed some information!');
        console.log("You have missed some information! ");
      }



      if (pwd.value !== cpwd.value) {
        // alert('your password is not same ');
        // console.log('your password is not same ');
        pwderror.innerHTML = " *your password is not same";
      }
      if (pwd.value == cpwd.value) {
        pwderror.innerHTML = " ";
      }

      if (!check.checked) {
        checkerror.innerHTML = "*you must agree our terms and conditions";
        // alert('you must agree our terms and conditions');
        console.log('you must agree  terms and conditions')
      }
      if (check.checked) {
        checkerror.innerHTML = "";
      }

    }
  </script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>