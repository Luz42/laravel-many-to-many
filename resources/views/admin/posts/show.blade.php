@extends('layouts.dashboard')

@section('content')
    <h2>{{$post->title}}</h2>
    <h4>{{$post->content}}</h4>
@endsection