@extends('admin')
@section('dashboard')

@include ('sidebar')

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
    @foreach($data as $dut)

    <form action="{{url('data/' .$dut->id)}}" method="post">
        <!-- <form action="{{url('/update')}}" method="post"> -->
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="mainehead">mainehead</label>
                <textarea type="text" class="form-control" name="mainehead" placeholder="">{{$dut->mainehead}}</textarea>
            </div>
            <div class="form-group">
                <label for="headcontant">headcontant</label>
                <textarea type="text" class="form-control" name="headcontant" placeholder="">{{$dut->headcontant}}</textarea>
            </div>
            <div class="form-group">
                <label for="firstchart_head">firstchart_head</label>
                <textarea type="text" class="form-control" name="firstchart_head" placeholder="">{{$dut->firstchart_head}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="firstchart_contant">firstchart_contant</label>
                <textarea type="text" class="form-control" name="firstchart_contant" placeholder="">{{$dut->firstchart_contant}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="secondchart_head">secondchart_head</label>
                <textarea type="text" class="form-control" name="secondchart_head" placeholder="">{{$dut->secondchart_head}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="secondchart_contant">secondchart_contant</label>
                <textarea type="text" class="form-control" name="secondchart_contant" placeholder=""> {{$dut->secondchart_contant}} </textarea>
            </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        @endforeach
    </form>
</div>
@endsection