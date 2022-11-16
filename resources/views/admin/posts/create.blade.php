@extends('layouts.dashboard')

@section('content')
    
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div @error('title') class="is-invalid" @enderror>
            <label for="title">{{__('Titolo')}}</label>
            <input name="title" type="text" required value="{{old('title','')}}">
            @error('title')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div @error('content') class="is-invalid" @enderror>
            <label for="content">{{__('Contenuto')}}</label>
            <textarea name="content" cols="20" rows="5" required>{{old('content','')}}</textarea>
            @error('content')
                <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="category_id">{{__('Categoria')}}</label>
            <select name="category_id">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                    <option @if($category->id == old('category_id', '')) selected @endif value="{{$category->id}}">
                        {{$category->name}}
                    </option>
                @endforeach
            </select>
        </div>
        <div>
            <input type="submit" value="{{__('Crea')}}">
        </div>
    </form>

@endsection