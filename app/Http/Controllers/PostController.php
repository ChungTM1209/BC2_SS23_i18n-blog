<?php

namespace App\Http\Controllers;

use App\Http\Services\BlogService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $blogService;
    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    public function index(){
        $blogs = $this->blogService->getAll();
        return view('index', compact('blogs'));
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){
        $this->blogService->create($request);
        return redirect()->route('posts.list');
    }
    public function edit($id){
        $blog = $this->blogService->findById($id);
        return view('edit',compact('blog'));
    }
    public function update(Request $request,$id){
        $blog = $this->blogService->findById($id);
        $this->blogService->update($blog,$request);
        return redirect()->route('posts.list');
    }
    public function destroy($id){
        $blog = $this->blogService->findById($id);
        $this->blogService->destroy($blog);
        return redirect()->route('posts.list');
    }
    public function show($id){
        $blog = $this->blogService->findById($id);
        return view('list',compact('blog'));
    }
}
