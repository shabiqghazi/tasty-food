@extends('layouts.dashboard.layout')
@section('main')
<form action="/admin/galeri/tambah" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="d-flex flex-column gap-2">
    <div class="mb-3">
      <label for="title" class="form-label">Judul</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Tuliskan Judul..." >
    </div>
    <div class="mb-3">
      <label for="img" class="form-label">Gambar</label>
      <input class="form-control" type="file" id="img" name="img">
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
      <button class="btn" type="reset">Reset</button>
    </div>
  </div>
</form>
@endsection