@extends('layouts.layout')

@section('main')

<!-- About us -->
<section id="about">
  <div
    class="about-content d-flex flex-column justify-content-center align-items-center gap-4"
  >
    <h2>TENTANG KAMI</h2>
    <p class="text-center">
      {{ $tentang->about }}
    </p>
    <div class="divider"></div>
  </div>
</section>
<!-- End of About us -->
<!-- Menu -->
<section id="menu">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6 menu-item">
        <div
          class="position-relative d-flex justify-content-center align-content-center menu-item-wrapper"
        >
          <img
            src="/assets/img-1.png"
            alt=""
            class="position-absolute"
          />
          <div
            class="card justify-content-center align-items-center text-center position-static rounded-4 zoom-on-hover"
          >
            <div class="card-body">
              <h3>Kelezatan Otentik</h3>
              <p>
                Hidangan autentik, cita rasa Indonesia yang tak tertandingi.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 menu-item">
        <div
          class="position-relative d-flex justify-content-center align-content-center menu-item-wrapper"
        >
          <img
            src="/assets/img-2.png"
            alt=""
            class="position-absolute"
          />
          <div
            class="card justify-content-center align-items-center text-center position-static rounded-4 zoom-on-hover"
          >
            <div class="card-body">
              <h3>Variasi Menu</h3>
              <p>
                Pilihan khas Nusantara, petualangan rasa dalam satu tempat.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 menu-item">
        <div
          class="position-relative d-flex justify-content-center align-content-center menu-item-wrapper"
        >
          <img
            src="/assets/img-3.png"
            alt=""
            class="position-absolute"
          />
          <div
            class="card justify-content-center align-items-center text-center position-static rounded-4 zoom-on-hover"
          >
            <div class="card-body">
              <h3>Kenyamanan</h3>
              <p>
                Interior nyaman, pelayanan hangat untuk bersantap dengan kenyamanan.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 menu-item">
        <div
          class="position-relative d-flex justify-content-center align-content-center menu-item-wrapper"
        >
          <img
            src="/assets/img-4.png"
            alt=""
            class="position-absolute"
          />
          <div
            class="card justify-content-center align-items-center text-center position-static rounded-4 zoom-on-hover"
          >
            <div class="card-body">
              <h3>Lokal</h3>
              <p>
                Bahan lokal, komitmen lingkungan, dan budaya Indonesia.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Menu -->
<!-- Berita -->
<section id="berita">
  <div
    class="d-flex flex-column justify-content-center align-items-center gap-4 container"
  >
    <h2>BERITA KAMI</h2>
    <div class="row">
      <div class="col-md-6 col-sm-12 p-1">
        <div class="card rounded-4 h-100 overflow-hidden zoom-on-hover">
          <img
            src="/storage/{{ $berita[0]->img }}"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body d-flex flex-column">
            <h3 class="card-title news-title">
              <a class="main" href="{{ "/berita/" . $berita[0]->slug }}">
              {{ $berita[0]->title }}
              </a>
            </h3>
            <p class="card-text flex-grow-1 news-text main">
              {{ $berita[0]->text }}
            </p>
            <div class="d-flex card-link justify-content-between">
              <div>
                <a href="#" class="text-warning">Baca selengkapnya</a>
              </div>
              <div>
                <img src="/assets/menu-dots.svg" alt="" width="16pt" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="row">
          @foreach ($berita->slice(1,4) as $b)
            <div class="col-6 p-1">
              <div class="card rounded-4 overflow-hidden zoom-on-hover h-100">
                <img
                  src="/storage/{{ $b->img }}"
                  class="card-img-top"
                  alt="..."
                />
                <div class="card-body d-flex flex-column">
                  <h3 class="card-title news-title">
                    <a href="{{ "/berita/" . $b->slug }}">
                    {{ $b->title }}
                    </a>
                  </h3>
                  <p class="card-text flex-grow-1 news-text">
                    {{ $b->text }}
                  </p>
                  <div class="d-flex card-link justify-content-between">
                    <div>
                      <a href="#" class="text-warning">Baca selengkapnya</a>
                    </div>
                    <div>
                      <img src="/assets/menu-dots.svg" alt="" width="16pt" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Berita -->
<!-- Galeri -->
<section id="galeri">
  <div
    class="d-flex flex-column justify-content-center align-items-center gap-5 container"
  >
    <h2>GALERI KAMI</h2>
    <div>
      <div class="row w-100 m-0">
        @foreach ($galleryItems as $item)
          <div class="col-md-4 col-6 p-1">
            <div class="gallery-item overflow-hidden rounded-4 shadow-sm">
              <img
              src="/storage/{{ $item->img }}"
              alt="{{ $item->title }}"
                class="w-100 h-100"
                />
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <a href="/galeri" class="btn btn-dark" id="btn-about">LIHAT LEBIH BANYAK</a>
  </div>
</section>
<!-- End of Galeri -->

@endsection
