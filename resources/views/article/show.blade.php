@extends('layouts.app')

@section('content')
    <h1>{{$article->name}}</h1>
    <div>{{$article->body}}</div>
    <div><a href="{{ route('articles.edit', ['article' => $article], false) }}">Edit article</a></div>
    <a href="{{ route('articles.destroy', ['article' => $article], false) }}" data-confirm="Are you sure?" data-method="delete" rel="nofollow">Delete article</a>
@endsection