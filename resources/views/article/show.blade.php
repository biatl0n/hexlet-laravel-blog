@extends('layouts.app')

@section('content')
    <h1>{{ $article->name }}</h1>
    <a href="{{ route('articles.edit', $article->id) }}">Редактировать</a>
    <br>
    <a href="{{ route('articles.destroy', $article->id ) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    <div class="p-5">{{ $article->body }}</div>
@endsection
