@extends('layouts.base')


@section('content')
    <h1>Blog page</h1>
    @foreach($posts as $post)
        <div>{{$post->title}}</div>
        <div>{{$post->body}}</div>
        <a href="{{ route('blog.show',$post->id)}}">Show</a>
    @endforeach
@endsection
