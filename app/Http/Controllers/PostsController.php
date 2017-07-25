<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $posts = Post::latest()->filter(request(['month','year']))->get();

       

    	return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::find($id);

    	return view('posts.show', compact('post'));
    }
    public function create()
    {
    	return view('posts.create');
    }
    public function store()
    {
    	$this->validate(request(),
    		['title' => 'required',
    		'body' => 'required']);

        auth()->user()->publish( 
            new POST(request(['title','body']))
            );

    	
    	return redirect()->home();
    }
    public function addComment($body)
    {
        Comment::create([
            'body' => $body,
            'post_id' => $this->id,
            'user_id' => auth()->id]);

    }


}
