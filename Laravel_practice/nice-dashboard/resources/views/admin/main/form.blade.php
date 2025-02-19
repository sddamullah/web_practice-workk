@extends('admin.index')

@section('dashboard')

<section class="section">
    @if(session('success'))
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
   
    @endif
    @foreach($view_form as $form_input)
    <form action="{{url('index/form/'.$form_input->id)}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-12">
                    <div class="card mt-0">
                        <div class="card-body">
                            <h5 class="card-title">Vertical Form</h5>
                            <!-- Vertical Form -->
                            <form class="row g-3">
                            <div class="col-12">
                            <label for="exampleFormControlTextarea1" class="form-label">Website:</label>
                                <textarea class="form-control" name="web" rows="3">{{$form_input->web}}</textarea>
                                <!-- <label for="inputNanme4" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullname"> -->
                            </div>
                            <div class="col-12 mt-2">
                            <label for="exampleFormControlTextarea1" class="form-label">App:</label>
                                <textarea class="form-control" name="app" rows="3">{{$form_input->app}}</textarea>
                                <!-- <label for="inputEmail4" class="form-label">Email address</label>
                                <input type="email" class="form-control" name="emailaddress"> -->
                            </div>
                            <!-- <div class="col-12">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="inputPassword4">
                            </div> -->
                            <div class="col-12 mt-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Software:</label>
                                <textarea class="form-control" name="software" rows="3">{{$form_input->software}}</textarea>
                                <!-- <label for="inputAddress" class="form-label">Message</label> -->
                                <!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
                                <!-- <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St"> -->
                            </div>
                            <div class="text-center mt-3">
                            <input type="submit" class="btn btn-primary" value="Update" style="height: 40px; width: 80px; border: 2px solid rgba(79,129,50,255); background-image: linear-gradient(white, rgb(5, 134, 5) 10%);">
                            <input type="reset" class="btn btn-secondary" value="reset" style="height: 40px; width: 80px; border: 2px solid rgb(120, 120, 120); background-image: linear-gradient(white, rgb(100, 100, 100) 10%);">
                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                            </div>
                            </form><!-- Vertical Form -->

                        </div>
                    </div>
            </div>
        </div>
    </form>
    @endforeach
</section>

@endsection