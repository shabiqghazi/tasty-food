    <!-- Jumbotron -->
    <div class="jumbotron bg-dark">
      <div class="header-jumbotron">
        <!-- Navbar -->
        <nav class="d-flex align-items-center justify-content-between">
          <div class="nav-brand"> 
            <a href="/" class="text-white"><h1>TASTY FOOD</h1></a>
          </div>
          <div id="nav-hamburger">
            <img src="/assets/menu-burger.svg" alt="">
            <input type="checkbox" id="nav-toggle">
          </div>
          <div class="nav-collapse">
            <div
              class="nav-list d-flex gap-2 align-items-lg-end m-0"
            >
                <a href="/" class="nav-item text-white">HOME</a>
                <a href="/tentang" class="nav-item text-white">TENTANG</a>
                <a href="/berita" class="nav-item text-white">BERITA</a>
                <a href="/galeri" class="nav-item text-white">GALERI</a>
                <a href="/kontak" class="nav-item text-white">KONTAK</a>
            </div>
          </div>
        </nav>
        <!-- End of Navbar -->
        <div class="main">
          <h1 class="text-white jumbotron-title">{{ $title }}</h1>
        </div>
      </div>
    </div>
    <!-- End of Jumbotron -->