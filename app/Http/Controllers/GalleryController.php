<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleryItems = DB::table('galleries')->latest()->get();
        return view('admin.galeri', ['galleryItems' => $galleryItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahgaleri');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path = Storage::putFile('public/galleries', $request->file('img'));
        $path = explode('/', $path);
        $path = $path[1] . "/" . $path[2];
        $data = [
            'title' => $request->input('title'),
            'img' => $path
        ];
        DB::table('galleries')->insert($data);
        return redirect('/admin/galeri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeri = DB::table('galleries')->where('id', '=', $id)->first();
        return view('admin/ubahgaleri', ['galeri' => $galeri]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'title' => $request->input('title'),
        ];
        DB::table('galleries')->where('id', '=', $id)->update($data);
        return redirect('/admin/galeri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('galleries')->delete($id);
        return redirect('/admin/galeri');
    }
}
