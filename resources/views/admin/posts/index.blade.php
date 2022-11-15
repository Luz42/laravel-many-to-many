@extends('layouts.dashboard')

@section('content')
    @foreach ($posts as $post)
        <a href="{{ route('admin.posts.show', $post->id) }}">{{$post->title}}</a>
    @endforeach
@endsection