@extends('admin.dashboard')
@section('body')



<table class="table">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Detail</th>
            <th scope="col">Catagory</th>
            <th scope="col">Image</th>

            <th>Delete Menu</th>
            <th>Edit Menu</th>




        </tr>
    </thead>
    <tbody>
        @foreach($product as $pro)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $pro->product }}</td>
            <td>{{ $pro->detail }}</td>
            <td>
                {{ $pro->catagory_name }}
            </td>
            <td>
                <img src="{{asset('/asset/img/'. $pro->img)}}" width="120px" height="60px" alt="Food" />
            </td>
            <td>
                <button class="btn btn-danger "><a href="{{url('delete' , $pro->id)}}" style="color: white;">Delete</a></button>

            </td>
            <td>
                <a href="{{url('update_catagory', $cata->id)}}" style="background-color: aqua; color:black;" class="btn  ">Edit</a>

            </td>



        </tr>
        @endforeach


    </tbody>
</table>

@endsection