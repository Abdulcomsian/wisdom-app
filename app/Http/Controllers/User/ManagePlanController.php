<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class ManagePlanController extends Controller
{
    public function index()
    {
        return view('auth.pages.customer.manage_plans.index');
    }
}
