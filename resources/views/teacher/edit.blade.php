<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Edit</title>
</head>
<body>
    <a href="{{route('teacher.index')}}">Kembali</a>
    <form action="{{route('teacher.update', $teacherDetail->id)}}" method="post">
        @csrf
        @method('put')
        <label for="name_teacher">Nama Guru : <input type="text" name="name_teacher" value="{{$teacherDetail->name_teacher}}"></label>
        <button type="submit">Edit</button>
    </form>

    <form action="{{route('teacher.destroy', $teacherDetail->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
