<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject</title>
</head>

<body>
    <h1>MATA PELAJARAN</h1>
    <a href="{{ route('subject.create') }}">Tambah Mapel</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Mapel</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $subject->name_subject }}</td>
                    <td><a href="{{route('subject.show', $subject->id)}}">Detail</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
