<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    static function dashbord()
    {
        return view('admin.home');
    }
    static function institutions()
    {
        return view('admin.page.institutions');
    }
    static function volunteers()
    {
        return view('admin.page.volunteers');
    }
    static function users()
    {
        return view('admin.page.users');
    }
    static function posts()
    {
        return view('admin.page.posts');
    }
    static function showUser()
    {
        return view('admin.page.showUser');
    }
}
