@extends('layouts.master')
@section('title','Welcome')
@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {{ __('language.blog_application') }}
        </div>

        <div class="links">

            <a href="{!! route('posts.list') !!} ">@lang('language.list_post')</a>
            <a href="{!! route('posts.create') !!} ">@lang('language.create_post')</a>
        </div>
    </div>
    @endsection