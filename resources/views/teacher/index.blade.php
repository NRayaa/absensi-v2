<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guru</title>
</head>

<body>
    <h1>GURU</h1>
    <a href="{{ route('teacher.create') }}">Tambah Guru</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->name_teacher }}</td>
                    <td><a href="{{route('teacher.show', $teacher->id)}}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
