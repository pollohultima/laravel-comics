@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')

<div class="comics_content">
    <div class="container">
        <button class="current_series">
            <a href="">CURRENT SERIES</a>
        </button>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2 px-0">

                <div class="card">
                    <img src="{{$comic['thumb']}}" alt="">
                    <h6>{{$comic['series']}}</h6>
                </div>

            </div>


            @endforeach
        </div>
        <div class="load">
            <button>
                <a href="">LOAD MORE</a>
            </button>
        </div>
    </div>
</div>

@endsection