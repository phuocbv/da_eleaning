@extends('layouts.user.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('user/home.css') }}">
    <div class="main">
        <div class="speace30"></div>
        <div class="col-md-10 col-md-offset-1 background-while content">
            <div class="speace30"></div>
            <div class="speace30"></div>
            <div class="speace30"></div>
            @include('layouts.user.menu')
            <div class="speace20"></div>
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 images-title">
                <div id="carousel-example-generic" class="carousel slide border-shadow-bottom" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="{{ asset('images/banner1.jpg') }}" alt="" class="item-image-title">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/banner2.jpg') }}" alt="" class="item-image-title">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('images/banner3.jpg') }}" alt="" class="item-image-title">
                            <div class="carousel-caption">
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">@lang('categories.previous')</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">@lang('categories.next')</span>
                    </a>
            </div>
        </div>
    </div>
@endsection
