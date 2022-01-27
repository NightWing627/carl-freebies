<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Freeby;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {
        $users = User::withCount('freebies')->paginate(10);

        return view('admin.user', [
            'users' => $users
        ]);
    }

    public function show($id) {
        $user = User::find($id);

        return view('admin.user_detail', compact('user'));
    }

    public function delete($id) {
        User::delete($id);
        return redirect()->route('admin.user');
    }
}
