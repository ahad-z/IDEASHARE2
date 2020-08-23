<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Post;
use App\Vote;
use App\Category;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
    	$categories = Category::get();
    	$posts = Post::where('status', 1);
		if(isset($request->category_id)) {

			$posts = $posts->where('category_id', $request->category_id);
		}
			$posts = $posts->get();

        return view('pages.home.index', compact('posts','categories'));
    }

    public function addUser(Request $request){
    	$user = new User();
		$this->validate($request, [
		'name' => 'required|min:3|max:50',
		'email' => 'email',
		'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
		'password_confirmation' => 'min:6'
		]);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->type=$request->userType;
        $user->save();
        Session::flash('success','User Added successFullly!');
        return back();
    }
    public function allUser(){
    	$user = User::get();
    	return view('layouts.partials.user',compact('user'));
    }




}
