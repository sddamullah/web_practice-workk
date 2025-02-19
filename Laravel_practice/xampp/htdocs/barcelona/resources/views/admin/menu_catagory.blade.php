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

<table class="table bg-secondary w-75  rounded-2">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col " class="ps-3"> Edit Catagories</th>
            <th scope="col " class="ps-3">Delet Catagories</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $dut)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $dut->catagory_name }}</td>
            <td class="py-3">
                <a href="{{url('edit_catagory', $dut->id)}}" class="text-dark  rounded-2 px-4 py-2 mx-3 " style="background-color: aqua;">Edit</a>
            </td>
            <td class="py-3">
                <a href="{{url('delete_catgory', $dut->id)}}" class="text-white bg-danger rounded-2 px-3 py-2 mx-3 ">Delete</a>

            </td>


        </tr>
        @endforeach


    </tbody>
</table>


<form action="{{url('/save_catagory')}}" method="post">
    <p class="h3 mt-5 bg-secondary w-50 py-4 px-3" style="color: red;">Add New Catagory</p>
    @csrf
    <div class="bg-secondary rounded h-100 p-4 w-50 mt-3">

        <div class="form-floating mb-3">
            <input type="text" class="form-control" name="catagory_name" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Catagory name</label>
        </div>





    </div>

    <input type="submit" class="btn  btn-primary m-2" value="Submit">

</form>
@endsection