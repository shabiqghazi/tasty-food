<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = DB::table('contacts')->first();
        return view('admin.kontak', ['kontak' => $kontak]);
    }

    public function edit()
    {
        $kontak = DB::table('contacts')->first();
        return view('admin/ubahkontak', ['kontak' => $kontak]);
    }
    public function update(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'location' => $request->input('location')
        ];
        DB::table('contacts')->update($data);
        return redirect('/admin/kontak/');
    }
}
