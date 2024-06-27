@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <td>{{  html()->label('Имя', 'name') }}</td>
        <td>{{  html()->input('text', 'name') }}</td>
    </tr>
    <tr>
        <td>{{  html()->label('Содержание', 'body') }}</td>
        <td>{{  html()->textarea('body') }}</td>
    </tr>
</table>
