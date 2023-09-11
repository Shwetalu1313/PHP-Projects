<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users')->with('users',$users);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.edit',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
        ]);
        return redirect('/admin/users')->with('successAlert','The data was successfully updated');
    }

    public function delete($id){
        // dd($id);
        $user = User::find($id);

        $user->delete();
        return redirect('/admin/users')->with('successDeleteAlert','ID'.$user->id.' - '.$user->name.' was successfully deleted');
    }
}
