<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function getUsers($nim)
    {
        return view('users', ['nim' => $nim]);
    }
}
