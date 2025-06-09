@extends('layouts.navbar')

@section('content')

<div class="wrapper"></div>
    <section id="home">
        <img src="{{ asset('images/home.png') }}" alt="library">
            <div class="kolom">
                <p class="deskripsi">Welcome to BacaQuy!</p>
                <h2>Tiada Hari Tanpa Membaca</h2>
                <p>Membaca bukan beban, tapi kebutuhan.</p>
                <p><a href="aboutus" class="tbl-pink">Pelajari lebih lanjut</a></p>
            </div>
    </section>
          

<!-- Fasilitas Perpus Section -->
<section id="tempat-perpus" class="py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Fasilitas Perpustakaan Kami</h2>
            <div class="underline"></div>
            <p class="lead text-muted mt-3">Nikmati pengalaman membaca premium di tempat kami</p>
        </div>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1589998059171-988d887df646?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Reading Area" style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 fw-bold">Premium</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Ruang Baca Eksklusif</h5>
                        <p class="card-text text-muted">Area membaca premium dengan desain ergonomis, pencahayaan natural, dan kenyamanan maksimal.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Book Collection" style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 fw-bold">Baru</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Koleksi Eksklusif</h5>
                        <p class="card-text text-muted">Lebih dari 10.000 judul buku premium dari berbagai genre termasuk edisi terbatas.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-lg rounded-3 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" class="card-img-top" alt="Digital Library" style="height: 220px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 bg-primary text-white px-3 py-1 fw-bold">Digital</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="color: #2c3e50;">Akses Digital Premium</h5>
                        <p class="card-text text-muted">Platform digital dengan ribuan e-book dan audiobook premium yang bisa diakses kapan saja.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<!-- Testimoni Section -->
<section id="testimonials" class="py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="display-4 fw-bold mb-3" style="color: #2c3e50;">Apa Kata Klien Kami?</h2>
            <div class="underline"></div>
            <p class="lead text-muted mt-3">Pengalaman nyata dari anggota premium kami</p>
        </div>
        <div class="row g-4">
            @foreach([
                ['name' => 'Gominsi', 'title' => 'Istri Pertama', 'stars' => 5, 'img' => 'testi1.jpeg', 'quote' => 'Perpustakaan dengan fasilitas premium dan pelayanan personal. Koleksi buku langka mereka sungguh mengesankan!', 'since' => '2019', 'color' => '#8e44ad'],
                ['name' => 'Shinsiaa', 'title' => 'Istri Kedua', 'stars' => 4.5, 'img' => 'testi2.jpeg', 'quote' => 'Sebagai anggota premium, saya mendapatkan akses ke koleksi digital eksklusif yang sangat membantu penelitian saya.', 'since' => '2020', 'color' => '#3498db'],
                ['name' => 'Hanjieun', 'title' => 'Istri Ketiga', 'stars' => 5, 'img' => 'testi3.jpeg', 'quote' => 'Program anak-anak mereka sungguh luar biasa. Fasilitas bermain sambil belajar yang premium.', 'since' => '2021', 'color' => '#e74c3c']
            ] as $testi)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                    <div class="card-body p-4 text-center">
                        <div class="position-relative mb-4">
                            <img src="{{ asset('images/' . $testi['img']) }}" class="rounded-circle shadow" width="100" alt="Testimonial" style="border: 3px solid {{ $testi['color'] }};">
                            <div class="position-absolute bottom-0 end-0 bg-primary text-white rounded-circle p-2" style="width: 40px; height: 40px;">
                                <i class="fas fa-quote-left"></i>
                            </div>
                        </div>
                        <h5 class="card-title fw-bold mb-2" style="color: #2c3e50;">{{ $testi['name'] }}</h5>
                        <p class="text-muted mb-0">{{ $testi['title'] }}</p>
                        <div class="text-warning mb-3">
                            @for ($i = 0; $i < floor($testi['stars']); $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                            @if (fmod($testi['stars'], 1) >= 0.5)
                                <i class="fas fa-star-half-alt"></i>
                            @endif
                        </div>
                        <p class="card-text text-muted">"{{ $testi['quote'] }}"</p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-center py-3">
                        <small class="text-muted">Member sejak {{ $testi['since'] }}</small>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



        <footer style="background-color:rgb(0, 0, 0);">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4">
          <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;"><b>Content</b></h5>
          <p style="color: white;">
          BacaQuy adalah layanan perpustakaan digital.
          Kami hadir untuk memudahkan pengelolaan perpustakaan digital Anda.
          </p>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3" style="letter-spacing: 2px; color: #818963;"><b>Contact</b></h5>
            <ul class="list-unstyled mb-0">
                <li class="mb-2">
                <a href="https://wa.me/6281234648067" target="_blank" style="color:rgb(255, 255, 255); text-decoration: none;">
                    <i class="fab fa-whatsapp" style="margin-right: 8px; font-size: 18px;"></i>081234648067
                </a>
                </li>
                <li class="mb-2">
                <a href="mailto:UTSKelas2023C@gmail.com" style="color:rgb(255, 255, 255); text-decoration: none;">
                    <i class="fas fa-envelope" style="margin-right: 8px; font-size: 18px;"></i>api@gmail.com
                </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4">
          <h5 class="mb-1" style="letter-spacing: 2px; color: #818963;"><b>Opening hours</b></h5>
          <table class="table" style="color: #4f4f4f; border-color: #666;">
            <tbody>
              <tr style="color:rgb(255, 255, 255);">
                <td>Senin - Jumat:</td>
                <td>8.00WIB - 21.00WIB</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="text-center p-3" style="background-color: rgb(0, 0, 0);">
      <p style="color: white;">©uasapi</p>
    </div>
    
  </footer>
<style>

section {
    margin: auto;
    display: flex;
    margin-bottom: 60px;
    flex-wrap: wrap;
    justify-content: center;
}

.kolom {
    margin-top: 50px;
    margin-bottom: 50px;
    max-width: 600px;
    padding: 0 20px;
}

.kolom .deskripsi {
    font-size: 22px;
    font-weight: bold;
    font-family: 'Poppins', sans-serif;
    color: #1a374d;
}

h2 {
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    font-size: 42px;
    margin-bottom: 20px;
    color: #1a374d;
    line-height: 1.3;
}

a.tbl-biru, a.tbl-pink {
    background: linear-gradient(90deg, #4facfe 0%, #00f2fe 100%);
    border-radius: 30px;
    padding: 14px 24px;
    color: #fff;
    font-weight: bold;
    display: inline-block;
    margin-top: 20px;
    transition: all 0.3s ease;
    text-decoration: none;
}

a.tbl-pink:hover, a.tbl-biru:hover {
    background: #044d6a;
}

.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

.btn-outline-dark:hover {
    background: linear-gradient(90deg, #8e44ad, #3498db);
    color: white !important;
    border-color: transparent;
}

img {
    max-width: 100%;
    height: auto;
}

p {
    margin: 10px 0;
    padding: 10px 0;
    font-family: 'Poppins', sans-serif;
    font-size: 16px;
}

.tengah {
    text-align: center;
    width: 100%;
}

.underline {
    height: 4px;
    width: 100px;
    background: linear-gradient(90deg, #8e44ad, #3498db);
    margin: 0 auto;
    border-radius: 10px;
}
    
.card {
  transition: all 0.3s ease;
}
    
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
}
    
.btn-outline-dark:hover {
    background: linear-gradient(90deg, #8e44ad, #3498db);
    color: white !important;
    border-color: transparent;
}


section {
    margin: auto;
    display: flex;
    margin-bottom: 50px;
}

.kolom {
    margin-top: 50px;
    margin-bottom: 50px;
}

.kolom .deskripsi {
    font-size: 20px;
    font-weight: bold;
    font-family: 'comic sans ms';
    color:#044d6a;
}

h2 {
    font-family: 'comic sans ms';
    font-weight: 800;
    font-size: 45px;
    margin-bottom: 20px;
    color:#044d6a;
    width: 100%;
    line-height: 50px;
}

a.tbl-biru {
    background: #dae8e8;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-biru:hover {
    background: #044d6a;
    text-decoration: none;
}

a.tbl-pink {
    background: #dae8e8;
    border-radius: 20px;
    margin-top: 20px;
    padding: 15px 20px 15px 20px;
    color: #FFFFFF;
    cursor: pointer;
    font-weight: bold;
}

a.tbl-pink:hover {
    background: #044d6a;
    text-decoration: none;
}

p {
    margin: 10px 0px 10px 0px;
    padding: 10px 0px 10px 0px;
}

.tengah{
    text-align: center;
    width: 100%;
}

</style>


@endsection

