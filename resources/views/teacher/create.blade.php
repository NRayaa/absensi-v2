<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teacher Create</title>
</head>
<body>
    <a href="{{route('teacher.index')}}">Kembali</a>
    <form action="{{route('teacher.store')}}" method="post">
        @csrf
        <label for="name_teacher">Nama Guru : <input type="text" name="name_teacher" placeholder=""></label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
