@extends('layouts.base')


@section('content')
    <a href="{{route('blog')}}">back</a>
    <h1>{{$post->title}}</h1>
    <p>
        {{$post->body}}
    </p>
@endsection
