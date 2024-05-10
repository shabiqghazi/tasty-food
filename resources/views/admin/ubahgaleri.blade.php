@extends('layouts.dashboard.layout')
@section('main')
<form action="/admin/galeri/ubah/{{ $galeri->id }}" method="POST"  enctype="multipart/form-data">
  @csrf
  <div class="d-flex flex-column gap-2">
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" id="title" placeholder="Tuliskan Judul..."  value="{{ $galeri->title }}" name="title">
    </div>
    <img src="/storage/{{ $galeri->img }}" alt="" width="250px">    
    <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
      <button class="btn" type="reset">Reset</button>
    </div>
  </div>
</form>
@endsection