<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    // public function index(){
    //     return view('users.index');
    // }

    // public function getProfile($id){
    //     return view('users.profile', ['id' => $id]);
    // }

    // public function showUser($id)
    // {
    //     return view('users.show', ['id' => $id]);
    // }

    // public function editProfile($id, $name)
    // {
    //     return view('users.edit', [
    //         'id' => $id,
    //         'name' => $name
    //     ]);
    // }

    // public function profileEditLink($id, $name)
    // {
    //     return view('users.profileEditLink', [
    //         'id' => $id,
    //         'name' => $name
    //     ]);
    // }

    // public function profileLink($id, $name)
    // {
    //     return view('users.profileLink', [
    //         'id' => $id,
    //         'name' => $name
    //     ]);
    // }

    public function index()
        {
            $users = DB::table('users')
                ->leftJoin('user_types', 'users.user_type_id', '=', 'user_types.id')
                ->select('users.*', 'user_types.display_name as user_type')
                ->get();

            return view('users.index', compact('users'));
        }

  
    public function store(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:50',
            'middleName' => 'string|max:50',
            'lastName' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'password' => 'required|max:50',
            'userType' => 'required|integer|exists:user_types,id',
        ], [
            'firstName.required' => 'First Name is required.',
            'firstName.string' => 'First Name must be a string.',
            'firstName.max' => 'First Name cannot exceed 50 characters.',
            'middleName.string' => 'Middle Name must be a string.',
            'middleName.max' => 'Middle Name cannot exceed 50 characters.',
            'lastName.required' => 'Last Name is required.',
            'lastName.string' => 'Last Name must be a string.',
            'lastName.max' => 'Last Name cannot exceed 50 characters.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.max' => 'Email cannot exceed 50 characters.',
            'password.required' => 'Password is required.',
            'password.max' => 'Password cannot exceed 50 characters.',
            'userType.required' => 'Please select a User Type.',
            'userType.integer' => 'Invalid User Type selected.',
            'userType.exists' => 'Selected User Type does not exist.',
        ]);

        DB::table('users')->insert([
            'fname' => $request->firstName,
            'mname' => $request->middleName,
            'lname' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type_id' => $request->userType,
            'created_at' => now(),
        ]);
        Log::info('First Name: '.$request->firstName);
        Log::info('Last Name: '.$request->lastName);
        Log::info('Email: '.$request->email);
        
        
        return redirect('user');
    }

    public function formEdit($id) {
        $user= DB::table('users')->find($id);
        $user_types = DB::table('user_types')->get();
        return view('form-edit', compact('user_types', 'user'));
    }
}

