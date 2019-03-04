@extends('layouts.master')
@section('title','Edit')
@section('content')
    <form method="post" action="{{route('posts.update',$blog->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">@lang('language.name')</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$blog->name}}"
                   placeholder="@lang('language.name')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.title')</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput2" value="{{$blog->title}}"
                   placeholder="@lang('language.title')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.content')</label>
            <input type="text" name="content" class="form-control" id="formGroupExampleInput2"
                   value="{{$blog->content}}" placeholder="@lang('language.content')">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">@lang('language.file')</label>
            <input type="file" name="image" class="form-control" id="formGroupExampleInput2" value="{{$blog->image}}"
                   placeholder="@lang('language.file')">
        </div>
        <button type="submit" value="Create">@lang('language.update')</button>
    </form>
@endsection