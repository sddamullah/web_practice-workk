@extends('admin.dashboard')
@section('body')



<table class="table">
    <thead>

        <tr>
            <th scope="col">#</th>
            <th scope="col"> Name</th>
            <th scope="col">Email</th>
            <th scope="col">date & Time</th>

            <th scope="col">Message</th>


        </tr>
    </thead>
    <tbody>
        @foreach($data as $dut)
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $dut->name }}</td>
            <td>{{ $dut->email }}</td>
            <td>{{ $dut->date }}</td>

            <td>{{ $dut->req }}</td>

        </tr>
        @endforeach


    </tbody>
</table>

@endsection