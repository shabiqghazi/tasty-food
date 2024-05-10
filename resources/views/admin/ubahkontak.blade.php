@extends('layouts.dashboard.layout')
@section('main')
<form action="/admin/kontak/ubah" method="POST">
  @csrf
  <div class="d-flex flex-column gap-2">
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" value="{{ $kontak->email }}" name="email">
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Telepon</label>
      <input type="text" class="form-control" id="phone"  value="{{ $kontak->phone }}" name="phone">
    </div>
    <div class="mb-3">
      <label for="location" class="form-label">Lokasi</label>
      <input type="text" class="form-control" id="location"  value="{{ $kontak->location }}" name="location">
    </div>
    <div class="mb-3">
      <button class="btn btn-primary">Simpan</button>
      <button class="btn" type="reset">Reset</button>
    </div>
  </div>
</form>
@endsection