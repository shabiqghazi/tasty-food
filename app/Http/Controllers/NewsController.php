<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = DB::table('news')->latest()->get();
        return view('admin.berita', ['berita' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambahberita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => ['required', 'unique:news', 'max:255'],
            'text' => ['required'],
        ]);
        $path = Storage::putFile('public/news', $request->file('img'));
        $path = explode('/', $path);
        $path = $path[1] . "/" . $path[2];
        $slug = Str::slug($validatedData['title']);
        $data = [
            'title' => $validatedData['title'],
            'text' => $validatedData['text'],
            'slug' => $slug,
            'img' => $path
        ];
        DB::table('news')->insert($data);
        return redirect('/admin/berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        var_dump($news);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $berita = DB::table('news')->where('id', '=', $id)->first();
        return view('admin/ubahberita', ['berita' => $berita]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->file('img') != null) {
            $path = Storage::putFile('public/news', $request->file('img'));
            $path = explode('/', $path);
            $path = $path[1] . "/" . $path[2];
            $data = [
                'title' => $request->input('title'),
                'text' => $request->input('text'),
                'slug' => Str::slug($request->input('title')),
                'img' => $path
            ];
        } else {
            $data = [
                'title' => $request->input('title'),
                'text' => $request->input('text'),
                'slug' => Str::slug($request->input('title'))
            ];
        }
        DB::table('news')->where('id', '=', $id)->update($data);
        return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('news')->delete($id);
        return redirect('/admin/berita');
    }
}
