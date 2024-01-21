<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard(Request $request){

        $seller = User::where('seller', 1)->count();
        $admin = User::where('admin', 1)->count();
        $customer = User::where('customer', 1)->count();

        return response()->json(compact('seller', 'admin','customer'));
    }
}
