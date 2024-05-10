@extends('layouts.layout')
@section('main')
<!-- Berita leading -->

<section id="berita-leading">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 pe-md-5 pb-4">
        <div class="berita-leading-image rounded-4 overflow-hidden zoom-on-hover">
          <img
            src="/storage/{{ $berita[0]->img }}"
            alt=""
            class="w-100 h-100"
          />
        </div>
      </div>
      <div class="col-md-6 col-12 d-flex flex-column justify-content-center gap-2">
        <h2 class="card-title news-title">
          <a class="leading" href="{{ "/berita/" . $berita[0]->slug }}">
          {{ $berita[0]->title }}
          </a>
        </h2>
        <p class="card-text news-text leading">
              {{ $berita[0]->text }}
            </p>
        <div>
          <button class="btn btn-dark" id="berita-leading-read-more">
            BACA SELENGKAPNYA
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Berita leading -->
<!-- Berita lainnya -->
<section id="berita-lainnya">
  <div
    class="d-flex flex-column justify-content-center align-items-center gap-4 container"
  >
    <h2 class="align-self-baseline">BERITA LAINNYA</h2>
    <div class="row">
      @foreach ($berita->slice(1,8) as $b)
        <div class="col-lg-3 col-md-4 col-sm-6 col-12 p-1">
          <div class="card rounded-4 overflow-hidden zoom-on-hover">
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
</section>
<!-- End of Berita lainnya -->
@endsection