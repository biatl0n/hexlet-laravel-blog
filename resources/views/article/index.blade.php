@extends('layouts.app')

@section('content')
    @if(session()->exists('flash-article.create'))
        <div class="alert alert-success" role="alert">
            {{ session('flash-article.create') }}
        </div>
    @endif
    @if(session()->exists('flash-article.update'))
        <div class="alert alert-success" role="alert">
            {{ session('flash-article.update') }}
        </div>
    @endif

    <h1>Список статей</h1>
        <table class="table table-bordered mt-5 mb-5">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Текст</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td><a href="{{ route('articles.show', $article->id) }}">{{$article->name}}</a></td>
                    <td>{{Str::limit($article->body, 200)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{ $articles->links() }}
@endsection
