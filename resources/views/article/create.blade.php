@extends('layouts.app')

@section('content')
    {{ html()->modelForm($article, 'POST', route('article.store'))->open() }}
        @include('article.form')
        {{  html()->submit('Создать')->class('btn btn-primary')  }}
    {{ html()->closeModelForm() }}
@endsection
