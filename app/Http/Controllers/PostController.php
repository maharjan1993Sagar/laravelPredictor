<?php

namespace App\Http\Controllers;
use app\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $rules =
        [
            'title' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
            'description' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i'
        ];

    public function index()
    {
        $posts = post::all();

        return view('posts.index', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = new post();
            $post->title = $request->title;
            $post->description = $request->description;
            $post->posted_date=$request->posted_date;
            $post->posted_by=Auth::user()->id;
            $post->save();
            return response()->json($post);
        }
    }

    public function show($id)
    {
        $post = post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), $this->rules);
        if ($validator->fails()) {
            return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        } else {
            $post = post::findOrFail($id);
            $post->title = $request->title;
            $post->description = $request->description;
            $post->posted_date=$request->posted_date;
            $post->posted_by=Auth::user()->id;
            $post->save();
            return response()->json($post);
        }
    }

    public function destroy($id)
    {
        $post = post::findOrFail($id);
        $post->delete();

        return response()->json($post);
    }

    public function changeStatus()
    {
        $id = Input::get('id');

        $post = post::findOrFail($id);
        $post->is_published = !$post->is_published;
        $post->save();

        return response()->json($post);
    }
}

