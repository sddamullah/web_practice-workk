@extends('admin.dashboard')
@section('body')


@foreach($data as $dut)
<form action="{{url('update/'.$dut->id)}}" method="post" enctype="multipart/form-data">

    @csrf

    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">First col</h6>
        <div class="form-floating mb-3">
            <textarea type="text" class="form-control" name="product" id="floatingInput" placeholder="name@example.com">{{$dut->product}}</textarea>
            <label for="floatingInput">Product</label>
        </div>
        <div class="form-floating mb-3">
            <textarea type="text" class="form-control" name="detail" id="floatingPassword" placeholder="Password">{{$dut->detail}}</textarea>
            <label for="floatingPassword">Detail</label>
        </div>
        <div class="form-floating mb-3">
            <textarea type="text" class="form-control" name="price" id="floatingPassword" placeholder="Password">{{$dut->price}}</textarea>
            <label for="floatingPassword">Price</label>
        </div>
        <select class="form-select" id="floatingSelect" name="catagory_name" aria-label="Floating label select example">
            <option>Select a catagory</option>
            @foreach($cata as $cat)
            <option value="{{$cat->catagory_name}}">{{$cat->catagory_name}}</option>
            @endforeach
        </select>
        <div class="my-3">
            <label for="formFile" class="form-label">Select product image</label>
            <input class="form-control bg-dark" name="img" type="file" id="formFile">
            <img src="{{asset('/asset/img/'. $dut->img)}}" width="120px" height="60px" alt="Food">
        </div>


    </div>

    <input type="submit" class="btn  btn-primary m-2" value="Submit">

</form>
@endforeach
@endsection