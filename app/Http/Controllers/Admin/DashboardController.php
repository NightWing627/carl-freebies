<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Freeby;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index() {
        return view('admin.dashboard', [
            'category_count' => Category::count(),
            'freebies_count' => Freeby::count(),
            'user_count' => User::count(),
        ]);
    }
}
