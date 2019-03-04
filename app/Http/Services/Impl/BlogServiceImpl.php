<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 01/03/2019
 * Time: 14:13
 */

namespace App\Http\Services\Impl;


use App\Blog;
use App\Http\Repositories\BlogRepository;
use App\Http\Services\BlogService;

class BlogServiceImpl implements BlogService
{
    protected $blogRepository;

    public function __construct(BlogRepository $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function getAll()
    {
        $blogs = $this->blogRepository->getAll();
        return $blogs;
    }

    public function create($request)
    {
        // TODO: Implement create() method.
        $blog = new Blog();
        $blog->name = $request->input('name');
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $blog->image = $path;
        }
        $this->blogRepository->store($blog);
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->blogRepository->findById($id);
    }


    public function destroy($obj)
    {
        // TODO: Implement destroy() method.
        return $this->blogRepository->destroy($obj);
    }

    public function update($obj, $request)
    {
        // TODO: Implement update() method.
        $obj->name = $request->input('name');
        $obj->name = $request->input('title');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $obj->image = $path;
        }
        return $this->blogRepository->store($obj);
    }
}