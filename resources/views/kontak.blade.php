@extends('layouts.layout')
@section('main')
<!-- Contact form -->
<section id="contact">
  <div
    class="d-flex flex-column justify-content-center align-items-center gap-4 container"
  >
    <h2 class="align-self-baseline">KONTAK KAMI</h2>
    <form action="/send-email" method="post" class="w-100">
      @csrf
      <div class="row m-0 mb-3">
        <div class="col-md-6 col-12 pe-md-3 pb-md-0 pb-3 px-0 d-flex flex-column">
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control form-control-lg"
              id="subject"
              name="subject"
              placeholder="Subject"
            />
            <label for="subject">Subject</label>
          </div>
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Name"
            />
            <label for="name">Name</label>
          </div>
          <div class="form-floating">
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              placeholder="Email"
            />
            <label for="email">Email</label>
          </div>
        </div>
        <div class="col-md-6 col-12 px-0">
          <div class="form-floating">
            <textarea
              class="form-control"
              placeholder="Message"
              id="message"
              name="message"
            ></textarea>
            <label for="message">Message</label>
          </div>
        </div>
      </div>
      <button class="btn btn-dark w-100" id="btn-submit-contact-form">
        KIRIM
      </button>
    </form>
    <div class="row w-100 mt-5 text-center">
      <div class="col-sm-4 col-12 pb-sm-0 pb-3">
        <div
          id="contact-email"
          class="contact-detail-item d-flex flex-column justify-content-center align-items-center gap-3"
        >
          <div>
            <img src="/assets/Group 66.png" alt="" />
          </div>
          <h5>EMAIL</h5>
          <p>{{ $kontak->email }}</p>
        </div>
      </div>
      <div class="col-sm-4 col-12 pb-sm-0 pb-3">
        <div
          id="contact-phone"
          class="contact-detail-item d-flex flex-column justify-content-center align-items-center gap-3"
        >
          <div>
            <img src="/assets/Group 67.png" alt="" />
          </div>
          <h5>PHONE</h5>
          <p>{{ $kontak->phone }}</p>
        </div>
      </div>
      <div class="col-sm-4 col-12 pb-sm-0 pb-3">
        <div
          id="contact-location"
          class="contact-detail-item d-flex flex-column justify-content-center align-items-center gap-3"
        >
          <div>
            <img src="/assets/Group 68.png" alt="" />
          </div>
          <h5>LOCATION</h5>
          <p>{{ $kontak->location }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Carousel -->

<!-- Location map -->
<section id="location-map">
  <div class="container">
    <iframe
      width="100%"
      style="border: 0"
      loading="lazy"
      allowfullscreen
      referrerpolicy="no-referrer-when-downgrade"
      src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA_e2YNMEprmWvAykWJcF-SNTwT6cJjJCM
&q={{ str_replace(' ', '+', $kontak->location) }}"
    >
    </iframe>
  </div>
</section>
<!-- End of Location map -->
@endsection