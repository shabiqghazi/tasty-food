@extends('layouts.dashboard.layout')
@section('main')
<table class="table">
  <thead>
        <tr class="row">
          <th class="col-3">Jenis</th>
          <th class="col-3">Kontak</th>
        </tr>
      </thead>
      <tbody>
        <tr class="row">
          <td class="news-title col-3">Email</td>
          <td class="news-text col-3">{{ $kontak->email }}</td>
        </tr>
        <tr class="row">
          <td class="news-title col-3">Telepon</td>
          <td class="news-text col-3">{{ $kontak->phone }}</td>
        </tr>
        <tr class="row">
          <td class="news-title col-3">Lokasi</td>
          <td class="news-text col-3">{{ $kontak->location }}</td>
        </tr>
      </tbody>
    </table>
    <div>
      <a href="/admin/kontak/ubah" class="btn btn-primary">Ubah</a>
    </div>
    
@endsection