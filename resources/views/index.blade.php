@extends('layout.layout')

@section('title')
  All Posts
@endsection

@section('name')
<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Email</th>
            <th scope="col" colspan="3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->desc}}</td>
            <td>{{$post->email}}</td>
            <td class="d-flex gap-2">
                <form action="{{route('show', ['id' => $post->id])}}">
                    <button class="btn btn-primary">Show</button>
                </form>

                <form action="{{route('edit', ['id' => $post->id])}}">
                    <button class="btn btn-warning">Edit</button>
                </form>

                <form action="{{route('delete', ['id' => $post->id])}}">
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$posts->links()}}

@endsection