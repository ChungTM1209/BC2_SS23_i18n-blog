@extends('layouts.master')
@section('title','Create')
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
        <div class="links">
            <a href="{!! route('home') !!} " style="color: #2d995b"> {!! __('language.home') !!} </a>
            <a href="{{route('posts.list')}}"> @lang('language.list_post')</a>
        </div>
    </div>
    <form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">@lang('language.name')</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="@lang('language.name')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.title')</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput2" placeholder="@lang('language.title')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.content')</label>
            <input type="text" name="content" class="form-control" id="formGroupExampleInput2" placeholder="@lang('language.content')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.file')</label>
            <input type="file" name="image" class="form-control" id="formGroupExampleInput2" placeholder="@lang('language.file')">
        </div>
        <button type="submit" value="Create">@lang('language.save')</button>
    </form>
    @endsection