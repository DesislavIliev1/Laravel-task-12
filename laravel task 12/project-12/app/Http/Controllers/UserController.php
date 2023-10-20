<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){
        $users = User::orderBy('id','desc')->paginate(10);
        return view('users.index', compact('users'));
    }

    public function factoryCreateUsers(){
        User::factory()->count(10)->create();
        return view('users.index');
    }

    public function create(){
        return view('users.manage');
    }

    public function store(Request $request ){
        
        $request->validate([
            'name' => 'required' ,
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = strtolower($request->email);
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect()->route("carAdminusersindex");

       
    }

    public function edit($id){

        $user = User::find($id);

        return view('users.manage', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id){

        $request->validate([
            'name' => 'required' ,
            'email' => 'required|unique:users,email,'.$id,
            'phone' => 'required|unique:users,phone,'.$id,
            'password' => 'required|min:6',
        ]);

        $user = User::find($id);
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->phone = $request->phone;

        if($request->password){
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route("carAdminusersindex");

    }

    public function delete(string $id)
    {
        User::find($id)->delete();

      return redirect()->route("carAdminusersindex");
        // return response()->json(['success'=>'Product deleted successfully.']);
    }
    //
}
