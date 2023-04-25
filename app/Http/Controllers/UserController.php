<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(Request $r)
    {
        $data = User::find($r->id);

        return $data;
    }
}
