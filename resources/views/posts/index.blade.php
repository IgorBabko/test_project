@extends('layouts.app')

@section ('content')

<div class="container">
    <h1>Posts</h1>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-xs-12">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <a href="/posts/{{ $post->id }}" class="btn btn-primary pull-right">show</a>
            <form action="/posts/{{ $post->id }}" method="POST">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-danger pull-right">delete</button>
            </form>
        </div>
    </div>
    @endforeach

    {!! $posts->render() !!}
</div>

@endsection
