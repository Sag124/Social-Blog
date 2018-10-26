<?php 

namespace App\Http\Controllers;
use App\Post;

/**
* 
*/
class PagesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => 'getIndex']);
	}

	public function getIndex()
	{
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);	
	}

	public function getAbout()
	{
		return view('pages.about');
	}

	public function getContact()
	{
		return view('pages.contact');
	}
	public function getRegister()
	{
		return view('register');
	}
	public function getLogin()
	{
		return view('login');
	}
	public function postLogout()
	{
		Auth::logout();
	}
}