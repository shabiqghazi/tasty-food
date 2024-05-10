<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index()
    {
        $news = $this->_getNews();
        $gallery = $this->_getGallery();
        $tentang = $this->_getAbout();
        $kontak = $this->_getContact();

        return view('index', ["title" => "Home", "berita" => $news, "galleryItems" => $gallery, "tentang" => $tentang, 'kontak' => $kontak]);
    }
    public function berita()
    {
        $tentang = $this->_getAbout();
        $kontak = $this->_getContact();
        $news = $this->_getNews(9);
        return view('berita', ["title" => "Berita Kami", "berita" => $news, 'tentang' => $tentang, 'kontak' => $kontak]);
    }
    public function beritaById(News $news)
    {
        $tentang = $this->_getAbout();
        $kontak = $this->_getContact();
        return view('beritaSingle', ["title" => "Berita Kami", "news" => $news, 'tentang' => $tentang, 'kontak' => $kontak]);
    }
    public function galeri()
    {
        $tentang = $this->_getAbout();
        $kontak = $this->_getContact();
        $gallery = $this->_getGallery(15);
        return view('galeri', ["title" => "Galeri Kami", "galleryItems" => $gallery, 'tentang' => $tentang, 'kontak' => $kontak]);
    }
    public function tentang()
    {
        $kontak = $this->_getContact();
        $tentang = $this->_getAbout();
        return view('tentang', ['title' => "Tentang Kami", 'tentang' => $tentang, 'kontak' => $kontak]);
    }
    public function kontak()
    {
        $kontak = $this->_getContact();
        $tentang = $this->_getAbout();
        return view('kontak', ['title' => "Kontak Kami", 'tentang' => $tentang, 'kontak' => $kontak]);
    }
    private function _getContact()
    {
        return DB::table('contacts')->orderByDesc('id')->latest()->first();
    }
    private function _getAbout()
    {
        return DB::table('abouts')->orderByDesc('id')->latest()->first();
    }
    private function _getNews($limit = 5)
    {
        return DB::table('news')->orderByDesc('id')->limit($limit)->get();
    }
    private function _getGallery($limit = 6)
    {
        return DB::table('galleries')->orderByDesc('id')->limit($limit)->get();
    }
}
