@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'POST', route('articles.store'))->open() }}
        @include('article.error')
        @include('article.form')
        {{  html()->submit('Создать')->class('btn btn-primary')  }}
    {{ html()->closeModelForm() }}
@endsection
