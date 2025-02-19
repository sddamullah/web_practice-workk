@extends('admin.dashboard')
@section('body')

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <a href=" #" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</a>
</div>
@endif






<div class="container">
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>



@foreach($data as $dut)
<form action="{{url('update_catagory' , $dut->id)}}" method="post">
    <p class="h3 mt-5 bg-secondary w-50 py-4 px-3" style="color: red;">Add New Catagory</p>
    @csrf
    <div class="bg-secondary rounded h-100 p-4 w-50 mt-3">

        <div class="form-floating mb-3">
            <textarea type="text" class="form-control " style="overflow: hidden;" name="catagory_name" id="floatingInput" placeholder="name@example.com">{{ $dut->catagory_name }}</textarea>
            <label for="floatingInput">Catagory name</label>
        </div>






    </div>

    <input type="submit" class="btn  btn-primary m-2" value="Submit">

</form>
@endforeach
@endsection