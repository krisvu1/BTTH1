<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name_email = $request->name_email ?? ''; // $request->name_email ? $request->name_email : ''
        $category = $request->category ?? '';


        $users = User::query();
        if (!empty($name_email)) {
            $users = User::where(function ($query) use ($name_email, $category) {
                $query->where('name', 'like', '%' . $name_email . '%')
                    ->orWhere('email', 'like', '%' . $name_email . '%');
            });
        }
        if (!empty($category)) {
            $users->where('type', $category);
        }
        $users = $users->paginate(10);
        return view('user.index', compact('users', 'name_email', 'category'));
    }


    public function create()
    {
        $users = User::all();
        return view('user.create-user', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'type' => 'required|string',
        ]);

        $data = $request->only('name', 'email', 'password', 'type');
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('user.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit-user', compact('user'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'type' => 'required|string',
        ]);
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('user.error')->with('error', 'User not found.');
        }

        $data = $request->all();
        $user = User::find($request->id);
        $user->update($data);
        return redirect()->route('user.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.show-user', compact('user'));
    }
    public function error()
    {
        return view('user.error');
    }
}
