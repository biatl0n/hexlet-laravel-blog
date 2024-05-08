@extends('layouts.app')

@section('content')
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
                    {{-- Str::limit – функция-хелпер, которая обрезает текст до указанной длины --}}
                    {{-- Используется для очень длинных текстов, которые нужно сократить --}}
                    <td>{{Str::limit($article->body, 200)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{ $articles->links() }}
@endsection
