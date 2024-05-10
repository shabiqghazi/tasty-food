@extends('layouts.layout')
@section('main')
<!-- Carousel -->
<section id="gallery-carousel">
  <div class="container">
    <div
      id="carouselExampleAutoplaying"
      class="carousel slide"
      data-bs-ride="carousel"
    >
      <div
        class="carousel-inner position-relative rounded-4 overflow-hidden"
      >
        <div class="carousel-item active rounded-4 overflow-hidden">
          <img
            src="/storage/{{ $galleryItems[0]->img }}"
            class="d-block w-100"
            alt="{{ $galleryItems[0]->title }}"
          />
        </div>
        <div class="carousel-item rounded-4 overflow-hidden">
          <img
            src="/storage/{{ $galleryItems[1]->img }}"
            class="d-block w-100"
            alt="{{ $galleryItems[1]->title }}"
          />
        </div>
        <div class="carousel-item rounded-4 overflow-hidden">
          <img
            src="/storage/{{ $galleryItems[2]->img }}"
            class="d-block w-100"
            alt="{{ $galleryItems[2]->title }}"
          />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev"
      >
        <div class="carousel-control-mod-icon shadow">
          <img src="/assets/angle-small-left.svg" alt="" />
        </div>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next"
      >
        <div class="carousel-control-mod-icon shadow">
          <img src="/assets/angle-small-right.svg" alt="" />
        </div>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>
<!-- End of Carousel -->
<!-- Gallery -->
<section id="gallery-gallerypage">
  <div
    class="d-flex flex-column justify-content-center align-items-center gap-4 container"
  >
    <div class="row">
      <div class="row w-100 m-0">
        @foreach($galleryItems->slice(3,14) as $item)
        <div class="col-md-3 col-sm-4 col-6 p-1">
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
  </div>
</section>
<!-- End of Gallery -->
@endsection