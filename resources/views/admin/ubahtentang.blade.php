@extends('layouts.dashboard.layout')
@section('main')
<form action="/admin/tentang/ubah" method="POST">
  @csrf
  <div class="d-flex flex-column gap-2">
    <div class="mb-3">
      <label for="about" class="form-label">Tentang</label>
      <textarea class="form-control" id="about" rows="7" name="about">{{ $tentang->about }}</textarea>
    </div>
    <div class="mb-3">
      <label for="visi" class="form-label">Visi</label>
      <textarea class="form-control" id="visi" rows="7" name="visi">{{ $tentang->visi }}</textarea>
    </div>
    <div class="mb-3">
      <label for="misi" class="form-label">Misi</label>
      <textarea class="form-control" id="misi" rows="7" name="misi">{{ $tentang->misi }}</textarea>
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
      <button class="btn" type="reset">Reset</button>
    </div>
  </div>
</form>
@endsection