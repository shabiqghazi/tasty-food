<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $tentang = DB::table('abouts')->first();
        return view('admin.tentang', ['tentang' => $tentang]);
    }

    public function edit()
    {
        $tentang = DB::table('abouts')->first();
        return view('admin/ubahtentang', ['tentang' => $tentang]);
    }
    public function update(Request $request)
    {
        $data = [
            'about' => $request->input('about'),
            'visi' => $request->input('visi'),
            'misi' => $request->input('misi')
        ];
        DB::table('abouts')->update($data);
        return redirect('/admin/tentang/');
    }
}
