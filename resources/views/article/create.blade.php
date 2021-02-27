{{ Form::model($article, ['url' => route('articles.store')]) }}
    @include('article.form')
    {{ Form::submit('Save') }}
{{ Form::close() }}
