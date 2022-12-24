@extends('dashboard/layout')
@section('content')
    <section class="col-md-8 ">
        <div class="intro-img">
        <img src="{{asset('assets/dashboard/images/intro.png')}}" alt="">
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-bullhorn"></i>
                    <a href="{{route('showposts')}}">Posts</a>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-sitemap"></i>
                    <a href="{{route('showcategories')}}" >Categories</a>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-comments"></i>
                    <a  href="{{route('showcomments')}}" >Comments</a>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-laptop"></i>
                    <a href="/" target="_blank">Website</a>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-cog"></i>
                    <a  href="{{route('setting')}}">Setting</a>    
                </div>
            </div>
            <div class="col-md-4">
                <div class="intro-block">
                    <i class="fa fa-user"></i>
                    <a  href="{{route('logout')}}">Logout</a>   
                </div>
            </div>
        </div>
    </section>


@endsection