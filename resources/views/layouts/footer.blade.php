<!-- Footer -->
<footer class="bg-dark text-white">
  <div class="d-flex flex-column align-items-center gap-5 container">
    <div class="row">
      <div class="col-lg-5 col-md-12 footer-description mb-md-3 mb-sm-3 mb-4">
        <h4>Tasty Food</h4>
        <p>
          {{ $tentang->about }}
        </p>
        <div class="social">
          <img src="/assets/001-facebook.png" alt="" />
          <img src="/assets/002-twitter.png" alt="" />
        </div>
      </div>
      <div class="col-lg-7 col-md-12">
        <div class="row">
          <div class="col-md-4 col-sm-12 mb-md-0 mb-4">
            <h4>Useful Links</h4>
            <div>
              <div>
                <a href="/berita">Blog</a>
              </div>
              <div>
                <a href="#">Hewan</a>
              </div>
              <div>
                <a href="/galeri">Galeri</a>
              </div>
              <div>
                <a href="#">Testimonial</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-md-0 mb-4">
            <h4>Privacy</h4>
            <div>
              <div>
                <a href="#">Karir</a>
              </div>
              <div>
                <a href="/tentang">Tentang Kami</a>
              </div>
              <div>
                <a href="/kontak">Kontak Kami</a>
              </div>
              <div>
                <a href="#">Servis</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 mb-md-0 mb-4">
            <h4>Contact Info</h4>
            <div>
              <div>
                <img
                  src="/assets/ic_markunread_24px.png"
                  alt=""
                  class="contact-icon"
                />
                <a href="#">{{ $kontak->email }}</a>
              </div>
              <div>
                <img
                  src="/assets/ic_call_24px.png"
                  alt=""
                  class="contact-icon"
                />
                <a href="#">{{ $kontak->phone }}</a>
              </div>
              <div>
                <img
                  src="/assets/ic_place_24px.png"
                  alt=""
                  class="contact-icon"
                />
                <a href="#">{{ $kontak->location }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p>Copyright &copy;2023 All rights reserved</p>
  </div>
</footer>
<!-- End of Footer -->