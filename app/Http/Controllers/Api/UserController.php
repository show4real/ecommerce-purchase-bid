<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::search($request->search)
            ->paginate($request->rows, ['*'], 'page', $request->page);

        return response()->json(compact('users'));
    }



    public function show(User $user)
    {

        return response()->json(compact('user'));
    }


     public function addProfile(Request $request){

       

        $user = User::find(auth()->user()->id);
        $user->phone = $request->phone;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->save();        

        return response()->json(compact('user'));

    }


    public function profile(Request $request){

        $user = User::where('id', auth()->user()->id)->first();

        
         return response()->json(compact('user'));

    }



    public function delete($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return response()->json(true);
    }


}