<?php

namespace Vikingdesign\Forum\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ForumController extends Controller
{
    public function index()
    {
        return view('forum::home');
    }
}
