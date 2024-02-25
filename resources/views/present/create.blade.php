<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Create</title>
</head>
<body>
    <a href="{{route('present.index')}}">Kembali</a>
    <form action="{{route('present.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Nama : </td>
                <td>
                    <select name="teacher_p" id="">
                        @foreach ($dataTeacher as $teacher)
                            <option value="{{$teacher->name_teacher}}">{{$teacher->name_teacher}}"></option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kehadiran : </td>
                <td>
                    <select name="attend_p" id="">
                        <option value="Hadir">Hadir</option>
                        <option value="Tidak hadir">Tidak Hadir</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kelas : </td>
                <td>
                    <select name="class_p" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pertemuan Ke : </td>
                <td><input type="number" name="meet_p" id=""></td>
            </tr>
            <tr>
                <td>Tanggal : </td>
                <td><input type="date" name="date_p" id=""></td>
            </tr>
            <tr>
                <td>Mapel : </td>
                <td>
                    <select name="subject_p" id="">
                        @foreach ($dataSubject as $subject)
                            <option value="{{$subject->name_subject}}">{{$subject->name_subject}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Topik : </td>
                <td><input type="text" name="topic_p" id=""></td>
            </tr>
            <tr>
                <td>Jumlah Murid : </td>
                <td><input type="number" name="student_p" id=""></td>
            </tr>
        </table>

        <button type="submit">Buat Presensi</button>
    </form>
</body>
</html>
