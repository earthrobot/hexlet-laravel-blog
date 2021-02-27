@extends('layouts.app')

@section('content')
    <h1>List of articles</h1>
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article->id], false) }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 200)}}</div>
        <div><a href="{{ route('articles.edit', ['id' => $article->id], false) }}">Edit article</a></div>
        <a href="{{ route('articles.destroy', ['id' => $article->id], false) }}" data-confirm="Are you sure?" data-method="delete" rel="nofollow">Delete article</a>
    @endforeach
@endsection

{{ $articles->links() }}