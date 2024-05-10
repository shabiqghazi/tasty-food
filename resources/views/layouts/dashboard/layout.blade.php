<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TASTY FOOD</title>
    <link
      rel="stylesheet"
      href="{{ url('/vendor/bootstrap-5.3.1-dist/css/bootstrap.min.css') }}"
    />
    <link rel="stylesheet" type="text/css" href="{{ url('/css/dashboardStyle.css') }}" />
  </head>
  <body class="overflow-x-hidden">
    <div class="row page-wrapper">
    <aside class="col-3 bg-dark position-sticky text-white px-0 py-4">
      <div class="d-flex justify-content-center">
        <div class="nav-brand">
          TASTY FOOD
        </div>
      </div>
      <div class="menu-list mt-3 px-3 d-flex flex-column gap-2">
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/admin">Dashboard</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/admin/berita">Berita</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/admin/galeri">Galeri</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/admin/kontak">Kontak</a>
        </div>
        <div class="menu-item px-4 py-2 ">
          <a class="text-white" href="/admin/tentang">Tentang</a>
        </div>
      </div>
    </aside>
    <div class="col-9 ps-0 bg-light">
      <nav class="w-full shadow d-flex justify-content-end py-3 bg-white px-4 gap-2">
        <p class="m-0">{{ Auth::user()->name }}</p>
        <a href="/logout"><img src="/assets/sign-out-alt.svg" alt="" style="width: 14pt;"></a>
      </nav>
      <main class="card m-3 p-4 rounded-3">

    @section('main')
    @show
        </main>
      </div>
    </div>
    <script src="{{ url('/vendor/bootstrap-5.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{!! asset('/js/dashboardScript.js') !!}"></script>
  </body>
</html>