{{ Form::model($article, ['url' => route('articles.update', $article), 'method' => 'PATCH']) }}
    @include('article.form')
    {{ Form::submit('Save changes') }}
{{ Form::close() }}