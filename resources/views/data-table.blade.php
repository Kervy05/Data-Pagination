<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('stylesheets/bootstrap.css') }}">
    <script src="{{ asset('javascript/bootstrap.bundle.js') }}"></script>
    <title>Data Table</title>
</head>
<body>
    <div class="container shadow mt-5 ">
        <div class="d-flex justify-content-center"><h2 class = "fs-2 text-center">Data Informations</h2>
</div>
    <hr>
        <table class = "table table-hover table-bordered">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Middlename</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">Email</th>
                    <th scope="col">Birthdate</th>
                    <th scope="col">Age</th>
                    <th scope="col">Sex</th>
                    <th scope="col">Civil Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $datas as $data )
                <tr>
                    <th scope = "col">{{ $data->id }}</th>
                    <td scope = "col">{{ $data->firstname }}</td>
                    <td scope = "col">{{ $data->middlename }}</td>
                    <td scope = "col">{{ $data->lastname }}</td>
                    <td scope = "col">{{ $data->email }}</td>
                    <td scope = "col">{{ $data->birthdate }}</td>
                    <td scope = "col">{{ $data->age }}</td>
                    <td scope = "col">{{ $data->sex }}</td>
                    <td scope = "col">{{ $data->civilstatus }}</td>


                </tr>

                @endforeach

            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $datas->links('pagination::bootstrap-4') }}
        </div>
    </div>
</body>
</html>
