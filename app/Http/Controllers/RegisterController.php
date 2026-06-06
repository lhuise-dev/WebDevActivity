<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function create()
    {
        $user_types = DB::table('user_types')->get();
        $users = DB::table('users')
            ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
            ->select('users.*', 'user_types.display_name as user_type')
            ->get();

        return view('register', compact('user_types', 'users'));
    }

    public function store(Request $request)
    {
        return "Form submitted successfully";
    }
}