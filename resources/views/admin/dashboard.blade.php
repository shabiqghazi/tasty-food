@extends('layouts.dashboard.layout')
@section('main')
<div class="row">
  <div class="card col-3 me-2">
    <h1>{{ $data['numNews'] }}</h1>
    <p>Jumlah Berita</p>
  </div>
  <div class="card col-3">
    <h1>{{ $data['numGallery'] }}</h1>
    <p>Jumlah Gambar</p>
  </div>
</div>
  
@endsection