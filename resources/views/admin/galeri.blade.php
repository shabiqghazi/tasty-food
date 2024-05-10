@extends('layouts.dashboard.layout')
@section('main')

    <a href="/admin/galeri/tambah"><button class="btn btn-primary">Tambah</button></a> 
    <table class="table">
      <thead>
        <tr class="row">
          <th class="col-1">No</th>
          <th class="col-5">Judul</th>
          <th class="col-4">Gambar</th>
          <th class="col-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($galleryItems as $key => $item)   
        <tr class="row">
          <td class="col-1">{{ $key +1 }}</td>
          <td class="news-title col-5">{{ $item->title }}</td>
          <td class="col-4"><img src="/storage/{{ $item->img }}" alt="{{ $item->title }}" class="w-75"></td>
          <td class="col-2"><a href="/admin/galeri/ubah/{{ $item->id }}" class="btn btn-success mb-1 me-1">Ubah</a><a href="/admin/galeri/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  
@endsection