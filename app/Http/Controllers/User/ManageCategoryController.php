<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class ManageCategoryController extends Controller
{
    public function index()
    {
        return view('auth.pages.customer.manage_categories.index');
    }
}
