@extends('admin.dashboard')
@section('body')
@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> Looks like there is somthing problem <br> <br>
    <ul>
        @foreach($errors->all() as $error )
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


<form action="{{url('/edit_menu')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">First col</h6>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="product" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Product</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="detail" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Detail</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="price" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Price</label>
        </div>

        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
            
            @foreach($data as $dut)
            <option value="{{$dut->catagory_name}}">{{$dut->catagory_name}}</option>
            @endforeach
        </select>
        <div class="mb-3 mt-3">

            <input class="form-control bg-dark" name="img" type="file" id="formFile">
        </div>


    </div>

    <input type="submit" class="btn  btn-primary m-2" value="Submit">

</form>
@endsection