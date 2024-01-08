<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
class usercontroller extends Controller
{
    //
    function login(Request $req){
$user= User::where(['email'=>$req->email])->first();
if(!$user || !Hash::check($req->password,$user->password)){
    return "username and password is not matched please signup";
}
else{
    $req->session()->put('user' ,$user);                                                                                                     
    return redirect('/'); 
}
    }
    function signup(Request $req){ 
       
        // return $req->input(); 
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->name);
        $user->save();
        return redirect('/login');
    }
    
}
