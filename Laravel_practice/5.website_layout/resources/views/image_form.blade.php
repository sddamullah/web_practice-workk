@extends('admin')
@section('dashboard')


<!-- @if(session('success'))

<div class=" bg-secondary">
   
        
        
    
    <div>
        {{session('success')}}
    </div>
    
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
       
    
</div> -->
<!-- @endif -->
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>






<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->


    <form action="{{url('/images')}}" method="post" enctype="multipart/form-data">
        <!-- <form action="{{url('/update')}}" method="post"> -->
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="mainehead">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="">
            </div>
            <div class="form-group">
                <label for="headcontant">Roll Number</label>
                <input type="text" class="form-control" name="roll" placeholder="">
            </div>
            <div class="form-group">
                <label for="firstchart_head">Class</label>
                <input type="text" class="form-control" name="class" placeholder="">

            </div>
            <div class="form-group">
                <label for="firstchart_contant">Image</label>
                <input type="file" class="form-control" name="img" placeholder="">

            </div>



        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</div>
@endsection