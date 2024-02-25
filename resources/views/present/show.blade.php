<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Detail</title>
</head>
<body>
    <a href="{{route('present.index')}}">Kembali</a>
        <table>
            <tr>
                <td>Nama : </td>
                <td>{{$detailPresent->teacher_p}}</td>
            </tr>
            <tr>
                <td>Kehadiran : </td>
                <td>{{$detailPresent->attend_p}}</td>
            </tr>
            <tr>
                <td>Kelas : </td>
                <td>{{$detailPresent->class_p}}</td>
            </tr>
            <tr>
                <td>Pertemuan Ke : </td>
                <td>{{$detailPresent->meet_p}}</td>
            </tr>
            <tr>
                <td>Tanggal : </td>
                <td>{{$detailPresent->date_p}}</td>
            </tr>
            <tr>
                <td>Mapel : </td>
                <td>{{$detailPresent->subject_p}}</td>
            </tr>
            <tr>
                <td>Topik : </td>
                <td>{{$detailPresent->topic_p}}</td>
            </tr>
            <tr>
                <td>Jumlah Murid : </td>
                <td>{{$detailPresent->student_p}}</td>
            </tr>
        </table>
        {{-- <a href="{{route('present.edit', $detailPresent->id)}}">Edit</a> --}}
</body>
</html>
