<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'numGallery' => DB::table('galleries')->count(),
            'numNews' => DB::table('news')->count()
        ];
        return view('admin.dashboard', ['data' => $data]);
    }
}
