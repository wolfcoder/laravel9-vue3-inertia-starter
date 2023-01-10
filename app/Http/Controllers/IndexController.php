<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(): \Inertia\Response|\Inertia\ResponseFactory
    {
        return inertia('Index');
    }

    public function show(): \Inertia\Response|\Inertia\ResponseFactory
    {
        return inertia('Index/Show');
    }
}
