@extends('layouts.dashboard')

@section('content')
    <h2>{{$post->title}}</h2>
    <h4>{{$post->content}}</h4>
    <h4>{{$post->category->name}}</h4>

    <a href="{{route('admin.posts.edit', $post->id)}}">{{__('Modifica')}}</a>
    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')   
        <input onclick="confirm('Eliminare il post?')" type="submit" value="{{__('Elimina')}}">
    </form>
@endsection