<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Create</title>
</head>
<body>
    <a href="{{route('subject.index')}}">Kembali</a>
    <form action="{{route('subject.store')}}" method="post">
        @csrf
        <label for="name_subject">Nama Mapel : <input type="text" name="name_subject"></label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
