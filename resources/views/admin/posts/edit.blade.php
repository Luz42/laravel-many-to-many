@extends('layouts.dashboard')

@section('content')

<form action="{{route('admin.posts.update', $post->id)}}" method="post">
    @csrf
    @method('PATCH')
    <div>
    {{-- TITOLO --}}
        <label for="title">{{__('Titolo')}}</label>
        <input name="title" type="text" required value="{{old('title', $post->title)}}">
        @error('title')
            <p class="text-danger">{{ __($message) }}</p>
        @enderror
    </div>
    {{-- CONTENUTO --}}
    <div>
        <label for="content">{{__('Contenuto')}}</label>
        <textarea name="content" cols="20" rows="5" required>{{old('content',$post->content)}}</textarea>
        @error('content')
                <p class="text-danger">{{ __($message) }}</p>
        @enderror
    </div>
    {{-- CATEGORIE --}}
    <div>
        <label for="category_id">{{__('Categoria')}}</label>
        <select name="category_id">
            <option value="">{{__('Nessuna')}}</option>
            @foreach ($categories as $category)
                <option @if($category->id == old('category_id', $post->category_id)) selected @endif value="{{$category->id}}">
                    {{__($category->name)}}
                </option>
            @endforeach
        </select>
    </div>
    {{-- TAGS --}}
    @if ($errors->any())
        @foreach ($tags as $tag)
            <input {{ in_array($tag->id, old('tags', [] )) ? 'checked' : '' }} type="checkbox" name="tags[]" value="{{$tag->id}}">
            <label class="text-uppercase">{{__($tag->name)}}</label>
        @endforeach
    @else
        <div>
            @foreach ($tags as $tag)
                <input {{ $post->tag->contains($tag->id) ? 'checked' : '' }} type="checkbox" name="tags[]" value="{{$tag->id}}">
                <label class="text-uppercase">{{__($tag->name)}}</label>
            @endforeach
        </div>
    @endif
    {{-- BUTTON --}}
    <div>
        <input type="submit" value="{{__('Aggiorna')}}">
    </div>
</form>
<a href="{{route('admin.posts.show', $post->id)}}">{{__('Annulla')}}</a>

@endsection