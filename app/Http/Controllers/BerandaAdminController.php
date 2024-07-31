<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaAdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.pages.dashboard', [
            'title' => 'Beranda Admin'
        ]);
    }
}
