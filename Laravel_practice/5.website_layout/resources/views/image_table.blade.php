@extends('admin')

@section('dashboard')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Fruit web contant</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>

                <tr>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>ROLL NUMBER</th>
                    <th>IMAGE</th>


                </tr>
            </thead>
            <tbody>
                @foreach($table as $tabi)
                <tr>
                    <td>{{$tabi->name}}</td>
                    <td>{{$tabi->class}}</td>
                    <td>{{$tabi->roll}}</td>
                    <td>
                        <img src="{{asset('/asset/img/'. $tabi->img)}}" width="70px" height="70px" />


                    </td>



                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection