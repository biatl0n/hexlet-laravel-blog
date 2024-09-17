@extends('layouts.app')

@section('content')
    @if(session()->exists('flash-comment.create'))
        <div class="alert alert-success" role="alert">
            {{ session('flash-comment.create') }}
        </div>
    @endif
    @if(session()->exists('flash-comment.destroy'))
        <div class="alert alert-success" role="alert">
            {{ session('flash-comment.destroy') }}
        </div>
    @endif
    @if(session()->exists('flash-comment.update'))
        <div class="alert alert-success" role="alert">
            {{ session('flash-comment.update') }}
        </div>
    @endif
    <h1>{{ $article->name }}</h1>
    <a href="{{ route('articles.edit', $article->id) }}">Редактировать</a>
    <br>
    <a href="{{ route('articles.destroy', $article->id ) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Удалить</a>
    <div class="p-5">{{ $article->body }}</div>

    <H1>Комментарии</H1>
    @include('article.error')
    @foreach($article->comments as $comment)
        <div>{{$comment->content}}</div>
        <div>
            <a href="{{ route('articles.comments.edit', [$article, $comment]) }}">Edit</a>
            <a href="{{ route('articles.comments.destroy', [$article, $comment]) }}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Delete</a>
        </div>
    @endforeach

    {{ html()->modelForm($newComment, 'POST', route('articles.comments.store', $article))->open() }}
        {{ html()->textarea('content') }}
        <br>
        {{ html()->submit('Create') }}
    {{ html()->closeModelForm() }}
@endsection
