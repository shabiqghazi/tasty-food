@extends('layouts.dashboard.layout')
@section('main')

    <a href="/admin/berita/tambah"><button class="btn btn-primary">Tambah</button></a> 
    <table class="table">
      <thead>
        <tr class="row">
          <th class="col-1">No</th>
          <th class="col-3">Judul</th>
          <th class="col-3">Teks</th>
          <th class="col-3">Gambar</th>
          <th class="col-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($berita as $key => $b)   
        <tr class="row">
          <td class="col-1">{{ $key +1 }}</td>
          <td class="news-title col-3">{{ $b->title }}</td>
          <td class="news-text col-3">{{ $b->text }}</td>
          <td class="col-3"><img src="/storage/{{ $b->img }}" alt="" class="w-75"></td>
          <td class="col-2"><a href="/admin/berita/ubah/{{ $b->id }}" class="btn btn-success mb-1 me-1">Ubah</a><a href="/admin/berita/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  
@endsection