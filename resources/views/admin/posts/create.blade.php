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
            <input type="submit" value="{{__('Crea')}}">
        </div>
    </form>

@endsection