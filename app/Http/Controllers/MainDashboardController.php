<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class MainDashboardController extends Controller
{
    private $user;
    public function dashboard()
    {
        return view('backEnd.home.home');
    }

    public  function addUser()
    {
        return view('backEnd.user.add-user');
    }
    public  function newUser(Request $request)
    {
        $this->user = new User();
        $this->user->name = $request->name;
        $this->user->email =$request->email;
        $this->user->password =bcrypt($request->password);
        $this->user->save();

        return back()->with('massage','New user Created Success');
    }
    public function manageUser()
    {

        return view('backEnd.user.manage',[
            'users'=>User::all(),
        ]);
    }

    public function userEdit($id)
    {
        $this->user = User::find($id);
        return view('backEnd.user.edit',[
            'user'=>$this->user,
        ]);
    }
    public function updateUser(Request $request)
    {
        $this->user = User::find($request->user_id);
        $this->user->name = $request->name;
        if (password_verify($request->old_password, $this->user->password  ))
        {
            $this->user->password = bcrypt($request->new_password);
        }
        else
        {
            return back()->with('massage','Your Old Password Invalied');
        }
        $this->user->save();
        return redirect(route('manage.user'))->with('massage','Your info update success');
    }
    public function deleteUser(Request $request)
    {
        $this->user = User::find($request->user_id);
        $this->user->delete();
        return back()->with('massage','User delete success');
    }



}
