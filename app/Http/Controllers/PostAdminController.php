<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostAdminController extends Controller
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->paginate(5);

        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.post.create');
    }

    public function store(PostRequest $request)
    {
        $this->post->create($request->all());

        return redirect()->route('admin.post.index');
    }

    public function edit($id)
    {
        $post = $this->post->find($id);

        return view('admin.post.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        $this->post->find($id)->update($request->all());

        return redirect()->route('admin.post.edit', $id);
    }

    public function destroy($id)
    {
        $this->post->find($id)->delete();

        return redirect()->route('admin.post.index');
    }
}
