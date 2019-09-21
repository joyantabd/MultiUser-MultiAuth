<?php

namespace App\Http\Controllers\Admin;

use App\LogActivity;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {

        return view('admin.dashboard');
    }

}
