<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTypeController extends Controller
{
    public function getUserType() {
        $userTypes = DB::table('user_types')->get();
        return $userTypes;
    }
}
