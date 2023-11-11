<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserListController extends Controller
{
    public function view(){
        $users = User::all();
        
        // return view("backend.pages.slider.manage", compact("sliders"));
        return view("userlist.view",compact("users") );
    }

    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('userlist.edit', compact('users'));
    }

    public function update(Request $request, string $id)
    {
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->password = $request->password;
       
        $users->update();
        return redirect()->route('userlist.view')->with("alert"," Successfully update information");;

    }
    // public function userstatus($id){
    //     $find=User::find($id);
    //     if($find->status==1){
    //         $find->status="2";
    //     }
    //     else{
    //         $find->status="1";
    //     }
    //     $find->update();

        
    //     return redirect()->route("admin.userlist.view")->with("alert"," Status Updated");
       
    // }

    public function destroy(string $id)
    {
      $users = User::findOrFail($id);
       $users->delete(); 
        return redirect()->route("userlist.view")->with("alert","Item Deleted");
    }
}
