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
