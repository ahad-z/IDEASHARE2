<?php
namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Session;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		$posts = Post::latest()->get();
		return view('pages.admin.post.index',compact('posts'));
	}

	public function create()
	{
		$category = Category::get();

		return view('pages.admin.add_post',compact('category'));
	}

	public function store(Request $request)
	{
		$post = new Post();
		$post->category_id=$request->category_id;
		$post->user_id=$request->user_id;
		$post->title = $request->title;
		$post->content = $request->input('content');
		$post->name = $request->name;
		$post->save();
		Session::flash('success','Post Submitted successFullly!');
		return back();
	}

	public function show(Post $post)
	{
		$post->upvote_count;
		return view('pages.posts.show', compact('post'));
	}

	public function edit(Post $post)
	{

	}


	public function update(Request $request, Post $post)
	{

	}


	public function destroy(Post $post)
	{
		//
	}

	public function postStatus($id,$status){
		$posts = Post::find($id);
		$posts->status = $status;
		$posts->save();
		return response()->json(['message'=> 'Success']);
	}

}
