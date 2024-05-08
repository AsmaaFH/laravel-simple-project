<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3>Update Post</h3>
    <form class="p-2" action="{{route('update', ['id'=> $post->id])}}" method="post">
        @csrf
        <input class="form-control" type="text" name="title" value="{{$post->title}}">
        <input class="form-control my-1" type="text" name="desc" value="{{$post->desc}}">
        <input class="form-control my-1" type="text" name="email" value="{{$post->email}}">
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
</body>

</html>