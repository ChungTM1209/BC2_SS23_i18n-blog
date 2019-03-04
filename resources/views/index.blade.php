@extends('layouts.master')
@section('title','Blogs List')
@section('content')
    <h1 class="text-center">@lang('language.list_post')</h1>
    <div class="card-group">
        @foreach($blogs as $blog)
            <div class="card">
                <img src="{{asset("storage/$blog->image")}}" class="card-img-top" alt="..." width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">@lang('language.title'): {{$blog->title}}</h5>
                    <p class="card-text">@lang('language.name'): {{$blog->name}}</p>
                    <p class="card-text">@lang('language.content'): {{$blog->content}}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"> Created_at: {{$blog->created_at}}</small>
                </div>
                <div>
                    <a class="btn btn-info" href="{{route('posts.show',$blog->id)}}">@lang('language.show')</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$blog->id) }}">@lang('language.edit')</a>
                    <a class="btn btn-danger" href="{{ route('posts.destroy',$blog->id) }}"
                       onclick="return confirm('@lang('language.messageDelete')')">@lang('language.delete')</a>
                </div>

            </div>

        @endforeach
    </div>
    {{ $blogs->appends(request()->query()) }}
@endsection