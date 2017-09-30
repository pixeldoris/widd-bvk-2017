<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.index')
            ->with([
                'user' => $user,
            ]);
    }
}
