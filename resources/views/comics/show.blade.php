@extends('layouts.app')

@section('page-title', 'Comic Page')

@section('content')

<div class="comic">

    <div class="comic_header position-relative">
        <div class="comic_cont ">
            <div class="img_wrapper position-absolute">
                <div class="comic_label text-white text-uppercase position-absolute px-1">
                    <span>{{$comic['type']}}</span>
                </div>
                <img src="{{$comic['thumb']}}" alt="">
                <div class="view text-center text-white position-absolute">
                    <span>VIEW GALLERY</span>
                </div>
            </div>
        </div>
    </div>

    <div class="cmc_info comic_cont position-relative">
        <h1 class="text-uppercase fs-4 mb-4">{{$comic['title']}}</h1>

        <div class="info_wrapper">

            <div class="price_wrapper d-flex align-items-center mb-3">
                <div class="price d-flex justify-content-between ">
                    <div class="px-3 text-white text-opacity-50">U.S. Price <span
                            class="text-white">{{$comic['price']}}</span>
                    </div>
                    <div class="px-3 text-white text-opacity-50">AVAILABLE</div>
                </div>
                <div class="check text-center px-3 text-white">
                    Check Availability <i class="fas fa-chevron-down"></i>
                </div>
            </div>

            <p class="mb-0">{{$comic['description']}}</p>
        </div>

        <div class="adv position-absolute text-end">
            <span class="fw-bold">ADVERTISEMENT</span>
            <img src="{{asset('img/ad.jpg')}}" alt="">
        </div>


        <h6>{{$comic['series']}}</h6>
    </div>
    <div class="specs_table">

    </div>

</div>




@endsection