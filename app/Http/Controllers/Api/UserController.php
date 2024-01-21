<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $role = $request->role;
        $users = User::search($request->search)
            ->role($request->role)
            ->paginate($request->rows, ['*'], 'page', $request->page);

        return response()->json(compact('users','role'));
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
        //$user->email = $request->email;
        $user->save();        

        return response()->json(compact('user'));

    }


    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone',
        ]);

        $user = new User();
        $user->phone = $request->phone;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->admin = $request->role == 'admin' ? 1 : 0;
        $user->seller = $request->role == 'seller' ? 1 : 0;
        $user->customer = $request->role == 'customer' ? 1 : 0;
        $user->save();        

        return response()->json(compact('user'));

    }

    public function update(Request $request, User $user){
        $this->validate($request, [
            'email' => ['required','email', Rule::unique('users')->ignore($user->id)],
            'phone' => ['required',Rule::unique('users')->ignore($user->id),]
        ]);

        $user->phone = $request->phone;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->admin = $request->role == 'admin' ? 1 : 0;
        $user->seller = $request->role == 'seller' ? 1 : 0;
        $user->customer = $request->role == 'customer' ? 1 : 0;
        $user->save();

        return response()->json(compact('user'));
    }


    public function profile(Request $request){

        $id = auth()->user()->id;

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