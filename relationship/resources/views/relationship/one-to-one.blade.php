<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One to One</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center">One to One</h1>
    <hr>
    <div class="container">
        {{-- <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Zip Code</th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td> --}}
                    {{-- <td>{{ $user->profile->address ?? 'Null' }}</td>
                    <td>{{ $user->profile->zip_code ?? 'NULL' }}</td> --}}
                     {{-- <td>{{ $user->profile->address  }}</td>
                    <td>{{ $user->profile->zip_code }}</td>
                </tr>
            @endforeach
        </table> --}}

        <hr>
        <table class="table table-bordered">
            <tr>
                <th>SL</th>
                <th>User</th>
                <th>Address</th>
                </tr>
            @foreach ($profiles as $profile)
            <tr>
                <th>{{ $profile->id }}</th>
                <th>{{ $profile->user->name }}</th>
                <th>{{ $profile->address }}</th>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
