<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Subject Edit</title>
</head>
<body>
    <a href="{{route('subject.index')}}">Kembali</a>
    <form action="{{route('subject.update', $subjectDetail->id)}}" method="post">
        @csrf
        @method('put')
        <label for="name_subject">Nama Mapel : <input type="text" name="name_subject" value="{{$subjectDetail->name_subject}}"></label>
        <button type="submit">Submit</button>
    </form>

    <form action="{{route('subject.destroy', $subjectDetail->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
