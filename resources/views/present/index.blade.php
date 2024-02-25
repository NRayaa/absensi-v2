<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present</title>
</head>
<body>
    <h1>Present</h1>
    <a href="{{route('present.create')}}">Buat Presensi</a>
    <table border='1'>
        <tr>
            <td>No</td>
            <td>Nama Guru</td>
            <td>Kehadiran</td>
            <td>Kelas</td>
            <td>Pertemuan Ke</td>
            <td>Tanggal</td>
            <td>Mapel</td>
            <td>Topik</td>
            <td>Total Murid</td>
            <td>Action</td>
        </tr>
        @foreach ($presents as $present)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$present->teacher_p}}</td>
            <td>{{$present->attend_p}}</td>
            <td>{{$present->class_p}}</td>
            <td>{{$present->meet_p}}</td>
            <td>{{$present->date_p}}</td>
            <td>{{$present->subject_p}}</td>
            <td>{{$present->topic_p}}</td>
            <td>{{$present->student_p}}</td>
            <td><a href="{{route('present.show', $present->id)}}">Detail</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
