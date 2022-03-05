<?php

namespace App\Http\Controllers;

use App\Models\S;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::latest()->get();
        return view('siswa', compact('user'));
    }
}
