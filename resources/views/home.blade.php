@extends('layouts.app')

@section('content')
    <div class="container" ng-controller="ItemsController">
        @if(session('success'))
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                        {{ session()->get('success') }}
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-lg-9"></div>
            <div class="col-md-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter name"/>
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">Search</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4"></div>
        </div>

        <div class="row">
            <div class="card col-md-3">
                <nav id="sidebar">
                    <div class="card-header">
                        <h3>Categories</h3>
                    </div>
                    <ul class="list-unstyled components">
                        @foreach($categories as $category)
                            <li class="active">
                                <a href="#" class="nav-link">{{$category->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            </div>
            <div class="card col-md-9">
                <div class="row">
                    <div class="card-header col-md-4">Nazvaniya categoryy</div>
                    <div class="col-md-8">Uporyadochit'</div>
                </div>
                <div class="row" style="margin-top:20px;" ng-if="items.length>0">
                        <div class="card col-md-4" style="width: 18rem;" ng-repeat="() in items">
                            <img ng-src="@{{item.image_url}}" class="card-img-top" alt="@{{item.title}}">
                            <div class="card-body">
                                <div class="row">
                                    <h4 class="col-md-8"
                                        style="white-space: nowrap;
                                        overflow: hidden;
                                        text-overflow: ellipsis;">@{{item.title}}
                                    </h4>
                                    <h5 class="card-subtitle col-md-4">40$</h5>
                                </div>
                                <p class="card-text">@{{item.description}}</p>
{{--                                <a href="{{route('item.addToCart',['id'=>$item->id])}}" class="btn btn-primary">Add to cart</a>--}}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="container" style="display: block;">--}}
    {{--    <div class="">--}}
    {{--    <ul>--}}
    {{--        <li><a class="active" href="#home">Home</a></li>--}}
    {{--        <li><a href="#news">News</a></li>--}}
    {{--        <li><a href="#contact">Contact</a></li>--}}
    {{--        <li><a href="#about">About</a></li>--}}
    {{--        kekw--}}
    {{--    </ul>--}}
    {{--    </div>--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">Dashboard</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }}--}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    You are logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
