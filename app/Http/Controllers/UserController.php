<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $name_email = $request->name_email ?? ''; // $request->name_email ? $request->name_email : ''
        $category = $request->category ?? '';
        //  dd($request->all());
         $users = User::query();
        if (!empty($name_email)) {
            $users = User::where(function ($query) use ($name_email, $category) {
                $query->where('name','like','%'.$name_email.'%')
                ->orWhere('email','like','%'.$name_email.'%');
            });
        }
        if(!empty($category)){
            $users->where('type',$category);
        }
        $users = $users->paginate(10);
        return view('user.index',compact('users', 'name_email', 'category'));
    }


    public function showCreateLayout(){
        return view('user.create-user');
    }

    public function create(Request $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return redirect()->route('user.index');
    }

    public function delete($id){
        User::destroy($id);
        return redirect()->route('user.index');
    }
    
    public function updateLayout($id){
        $user = User::find($id);
        return view('user.update-user',compact('user'));
    }

    public function updateUser(Request $request){
        $data = $request->all();
        $user = User::find($request->id);
        $user->update($data);
        return redirect()->route('user.index');
    }

    public function showUser($id){
        $user = User::find($id);
        return view('user.show-user',compact('user'));
    }
    
   
}

