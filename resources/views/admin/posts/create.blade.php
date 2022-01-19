@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Create New Post</h1>

        <form action="{{ route('admin.posts.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="" class="form-control" placeholder="Type your title here"
                    aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>



        </form>

    </div>

@endsection
