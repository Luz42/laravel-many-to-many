@extends('layouts.dashboard')

@section('content')
    <h2>{{$post->title}}</h2>
    <h4>{{$post->content}}</h4>
    @if ($post->category)
        <p>{{$post->category->name}}</p>
    @endif
    <div>
        <h6 style="display: inline-block">Tags:</h6>
        @foreach ($post->tag as $tag)
            <span>{{__($tag->name)}}</span>
        @endforeach
    </div>
    <a href="{{route('admin.posts.edit', $post->id)}}">{{__('Modifica')}}</a>
    <form action="{{route('admin.posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')   
        <input onclick="confirm('Eliminare il post?')" type="submit" value="{{__('Elimina')}}">
    </form>
@endsection