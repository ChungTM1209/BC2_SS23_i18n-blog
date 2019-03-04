<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 01/03/2019
 * Time: 13:52
 */
namespace App\Http\Repositories\Impl;
use App\Blog;
use App\Http\Repositories\BlogRepository;
use App\Http\Repositories\Eloquent\EloquentRepository;
use App\Http\Services\BlogService;

class BlogRepositoryImpl extends EloquentRepository implements BlogRepository
{
    public function getModel(){
        $model = Blog::class;
        return $model;
    }

}