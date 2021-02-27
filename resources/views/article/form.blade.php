@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{ Form::label('name', 'Name') }}
{{ Form::text('name') }}<br>
{{ Form::label('body', 'Article text') }}
{{ Form::textarea('body') }}<br>