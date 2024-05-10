@extends('layouts.dashboard.layout')
@section('main')
<table class="table">
  <thead>
        <tr class="row">
          <th class="col-3">Jenis</th>
          <th class="col-9">Teks</th>
        </tr>
      </thead>
      <tbody>
        <tr class="row">
          <td class="col-3">Tentang</td>
          <td class="col-9">{!! $tentang->about !!}</td>
        </tr>
        <tr class="row">
          <td class="col-3">Visi</td>
          <td class="col-9">{{ $tentang->visi }}</td>
        </tr>
        <tr class="row">
          <td class="col-3">Misi</td>
          <td class="col-9">{{ $tentang->misi }}</td>
        </tr>
      </tbody>
    </table>
    <div>
      <a href="/admin/tentang/ubah" class="btn btn-primary">Ubah</a>
    </div>
    
@endsection