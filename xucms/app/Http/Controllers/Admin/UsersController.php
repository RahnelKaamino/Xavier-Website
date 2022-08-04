<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
       
        return view('admin.users.index', ['users' => User::paginate(10)]);
    }
    
    public function create(){
        return view('admin.users.create');
    }


    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }
    
    public function destroy($id)
    {
        User::destroy($id);

        return redirect(route('users'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);

        User::create($request->all());
       
        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }
    public function show (User $user){
        return view('admin.users.show',compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
        ]);
      
        $user->update($request->all());
      
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
 
}
