@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>All Posts in a table</h1>

        <a name="" id="" class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">Create</a>

        @foreach ($posts as $post)
            <div class="row">
                <div class="col-1">
                    {{ $post->id }}
                </div>
                <div class="col-2">
                    {{ $post->title }}
                </div>
                <div class="col">
                    {{ $post->body }}
                </div>


        @endforeach
    </div>





@endsection
