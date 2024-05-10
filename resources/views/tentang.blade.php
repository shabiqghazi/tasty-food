@extends('layouts.layout')
@section('main')
<!-- About description -->
<section id="about-desc">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 d-flex flex-column justify-content-center gap-2">
        <h2>TASTY FOOD</h2>
        {!! $tentang->about !!}
      </div>
      <div class="col-md-6 col-12">
        <div class="row">
          <div class="col-6 px-2">
            <div class="rounded-4 overflow-hidden zoom-on-hover">
              <img
                src="/assets/brooke-lark-oaz0raysASk-unsplash.jpg"
                alt=""
                class="w-100"
              />
            </div>
          </div>
          <div class="col-6 px-2">
            <div class="rounded-4 overflow-hidden zoom-on-hover">
              <img
                src="/assets/sebastian-coman-photography-eBmyH7oO5wY-unsplash.jpg"
                alt=""
                class="w-100"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of About description -->
<!-- Visi misi -->
<section id="visi-misi">
  <div class="container">
    <div class="row py-5" id="visi">
      <div class="col-md-6 col-12 pe-md-4 order-md-1 order-2">
        <div class="row">
          <div class="col-6 visi-image p-1">
            <div class="rounded-4 overflow-hidden zoom-on-hover">
              <img
                src="/assets/fathul-abrar-T-qI_MI2EMA-unsplash.jpg"
                alt=""
                class="w-100 h-100"
              />
            </div>
          </div>
          <div class="col-6 visi-image p-1">
            <div class="rounded-4 overflow-hidden zoom-on-hover">
              <img
                src="/assets/michele-blackwell-rAyCBQTH7ws-unsplash.jpg"
                alt=""
                class="w-100 h-100"
              />
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-12 ps-md-5 d-flex flex-column justify-content-center order-md-2 order-1">
        <h3>VISI</h3>
        <p class="visimisi-text">
          {!! $tentang->visi !!}
        </p>
      </div>
    </div>
    <div class="row py-5" id="misi">
      <div class="col-md-6 col-12 pe-md-5 d-flex flex-column justify-content-center">
        <h3>MISI</h3>
        <p class="visimisi-text">
          {!! $tentang->misi !!}
        </p>
      </div>
      <div class="col-md-6 col-12 ps-md-4">
        <div class="misi-image">
          <div class="rounded-4 overflow-hidden zoom-on-hover">
            <img
              src="/assets/sanket-shah-SVA7TyHxojY-unsplash.jpg"
              alt=""
              class="w-100 h-100"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of visi misi -->
@endsection