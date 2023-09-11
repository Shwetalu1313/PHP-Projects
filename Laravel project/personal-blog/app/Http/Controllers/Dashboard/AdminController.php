<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Middleware\isAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // public function __construct(){
    //     $this->middleware(['auth', 'isAdmin']);
    // }

    public function index() {
        return view('admin.index');
    }
}
