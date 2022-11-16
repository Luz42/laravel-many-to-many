@extends('layouts.dashboard')

@section('content')
    
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf
        <div>
            <label for="title">{{__('Titolo')}}</label>
            <input name="title" type="text" required value="{{old('title','')}}">
        </div>
        <div>
            <label for="content">{{__('Contenuto')}}</label>
            <textarea name="content" cols="20" rows="5" required>{{old('content','')}}</textarea>
        </div>
        <div>
            <input type="submit" value="Crea">
        </div>
    </form>

@endsection