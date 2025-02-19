<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>anchor tag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <table class="table">
        <thead>
            <tr>

                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">pin</th>
                <th scope="col">cpwd</th>
                <th>dlelte</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tab as $tabi)
            <tr>
                <th>{{$tabi->firstname4}}</th>
                <td>{{$tabi->lastname4}}</td>
                <td>{{$tabi->email4}}</td>
                <td>{{$tabi->password4}}</td>
                <td>{{$tabi->cpassord4}}</td>
                <td>
                    <a href="{{url('delete', $tabi['id'])}}" class=" btn btn-danger text-light text-decoration-none"> Delete</a>
                    <!-- <a href=" {{url('delete', $tabi->id)}}" class=" btn btn-danger text-light text-decoration-none">Delete</a> -->
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>