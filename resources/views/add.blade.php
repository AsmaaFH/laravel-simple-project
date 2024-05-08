<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3>Add Post</h3>
    <!-- @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{$error}}</div>
    @endforeach -->
    <form class="p-2" action="{{route('create')}}" method="post">
        @csrf
        <input class="form-control" placeholder="title" type="text" name="title">
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input class="form-control my-1" placeholder="description" type="text" name="desc">
        @error('desc')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <input class="form-control my-1" placeholder="email" type="text" name="email">
        @error('email')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</body>

</html>