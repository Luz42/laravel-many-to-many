@extends('layouts.dashboard')

@section('content')
    
<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div>
        <label for="title">{{__('Titolo')}}</label>
        <input name="title" type="text" required value="{{old('title', $post->title)}}">
        @error('title')
            <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <label for="content">{{__('Contenuto')}}</label>
        <textarea name="content" cols="20" rows="5" required>{{old('content',$post->content)}}</textarea>
        @error('content')
                <p class="text-danger">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input type="submit" value="{{__('Aggiorna')}}">
    </div>
</form>
<a href="{{route('admin.posts.show', $post->id)}}">{{__('Annulla')}}</a>

@endsection