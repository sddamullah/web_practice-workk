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
                    <th>mainehead</th>
                    <th>headcontant</th>
                    <th>firstchart_head</th>
                    <th>firstchart_contant</th>
                    <th>secondchart_head</th>
                    <th>secondchart_contant</th>
                    <th>operations</th>

                </tr>
            </thead>
            <tbody>
                @foreach($table as $tabi)
                <tr>
                    <td>{{$tabi->mainehead}}</td>
                    <td>{{$tabi->headcontant}}</td>
                    <td>{{$tabi->firstchart_head}}</td>
                    <td>{{$tabi->firstchart_contant}}</td>
                    <td>{{$tabi->secondchart_head}}</td>
                    <td>{{$tabi->secondchart_contant}}</td>
                    <td>

                        <a href="{{url('delete', $tabi->id)}}" class=" btn btn-danger text-light text-decoration-none">Delete</a>
                        <a href="{{url('edit',$tabi->id)}}" class=" btn btn-primary text-light text-decoration-none">Edit</a>

                    </td>

                </tr>
                @endforeach



            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

@endsection