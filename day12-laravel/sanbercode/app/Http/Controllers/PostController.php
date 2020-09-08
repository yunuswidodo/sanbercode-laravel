<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($id) // param
    {
        return "ini id nya: $id";
    }
}
