<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display home page.
     * 
     * @return Renderable
     */
    public function showDashboard(){
        return view('dashboard.index');
    }
}
