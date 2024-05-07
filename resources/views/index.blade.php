@extends('layouts.app')

@section('content')
    <div><a href='{{ route('pages.about') }}'>About</a></div>
    <div><a href='{{ route('articles.index') }}'>Articles</a></div>
@endsection
