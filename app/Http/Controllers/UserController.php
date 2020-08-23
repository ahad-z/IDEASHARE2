<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	$users = User::latest()->get();

        return view('pages.admin.users.index', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $user = new User();

		$this->validate($request, [
			'name' => 'required|min:3|max:50',
			'email' => 'email',
			'password' => 'min:6|required'
		]);

		try {
			User::create(array_merge(
				$request->except('_token', 'password'),
				['password' => bcrypt($request->password)]
			));

			return redirect()->back()->with('success', 'User created successfully.');
		} catch (\Exception $e) {
			return redirect()->back()->with('danger', $e->getMessage());
		}
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
