@extends('layouts.dashboard')

@section('content')
    <div class="py-5">
        <a href="{{route('admin.posts.create')}}">Crea nuovo post!</a>
    </div>
    @foreach ($posts as $post)
        <a style="display: block" class="py-1" href="{{ route('admin.posts.show', $post->id) }}">{{$post->title}}</a>
    @endforeach
@endsection