<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
{
    $categories = Category::all();
    return view('layouts.inc.frontend.navbar', compact('categories'));
}
}
