@extends('admin.dashboard')
@section('body')

@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session()->get('message') }}
    <a href=" #" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">&times;</a>
</div>
@endif








<table class="table bg-secondary w-75  rounded-2">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col"> Description</th>
            <th scope="col"> Slug</th>
            <th scope="col"> Image</th>
            <th scope="col " class="ps-3"> Edit Catagories</th>
            <th scope="col " class="ps-3">Delet Catagories</th>

        </tr>
    </thead>
    <tbody>
        @foreach($data as $dut)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $dut->catagory_name }}</td>
            <td>{{ $dut->catagory_description }}</td>
            <td>{{ $dut->slug }}</td>
            <td> <img src="{{asset('/asset/catagory_img/'. $dut->catagory_img)}}" width="120px" height="60px" alt="Food" /></td>
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
<button type="button " class="btn btn-primary  " data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Catagory
</button>



<div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body bg-dark" style="box-shadow: 1px 1px 5px red;">
                <form class="bg-econdary" action="{{url('/save_catagory')}}" method="post" enctype="multipart/form-data">
                    <p class="h3 bg-secondary py-4 px-3" style="color: red;">Add New Catagory</p>
                    @csrf
                    <div class="bg-secondary rounded h-100 p-4 mt-3">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="catagory_name" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Catagory name</label>
                        </div>


                        <div class="form-floating">
                            <input type="text" class="form-control" name="catagory_description" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Catagory discription</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control" name="slug" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Catagory slug</label>
                        </div>
                        <div class="mb-3 mt-3">

                            <input class="form-control bg-dark" name="catagory_img" type="file" id="formFile">
                        </div>






                    </div>

                    <input type="submit" class="btn  btn-primary m-2" value="Submit">

                </form>
            </div>

        </div>
    </div>
</div>


@endsection