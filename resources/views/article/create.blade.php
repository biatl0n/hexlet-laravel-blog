@extends('layouts.app')

@if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
@endif

@section('content')
{{ html()->modelForm($article, 'POST', route('article.store'))->open() }}
    <table class="table table-bordered" border>
        <tr>
            <td>{{  html()->label('Имя', 'name') }}</td>
            <td>{{  html()->input('text', 'name') }}</td>
        </tr>
        <tr>
            <td>{{  html()->label('Содержание', 'body') }}</td>
            <td>{{  html()->textarea('body') }}</td>
        </tr>
        <tr>
            <td colspan="2">{{  html()->submit('Создать') }}</td>
        <tr>
    </table>
{{ html()->closeModelForm() }}
@endsection
