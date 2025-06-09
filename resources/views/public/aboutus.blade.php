@extends('layouts.navbar')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init();</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
    .profile-image {
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        object-fit: cover;
    }
</style>

<!-- Dickrullah Section -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <img class="w-100 h-100 profile-image" src="{{ asset('images/ultra1.jpeg') }}">
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="section-title mb-4">
                    <h6 class="text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4 text-primary fw-bold">Dickrullah Brilian Akbar</h1>
                </div>
                <p class="lead text-muted">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae excepturi iusto,
                   perspiciatis voluptatum autem neque enim blanditiis suscipit itaque aspernatur laudantium.
                   Aut tempora dolore ullam deleniti fugiat, explicabo quod harum.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Widirga Section -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center flex-lg-row-reverse">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-left">
                <img class="w-100 h-100 profile-image" src="{{ asset('images/widirga.jpeg') }}">
            </div>
            <div class="col-lg-7" data-aos="fade-right">
                <div class="section-title mb-4">
                    <h6 class="text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4 text-primary fw-bold">Widirga</h1>
                </div>
                <p class="lead text-muted">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium sint, quae ipsam, repellat,
                    explicabo magni delectus quisquam dolorem odio fuga id corrupti nam velit est unde exercitationem
                    eius sequi et.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Adji Section -->
<div class="container-fluid py-5 bg-light">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right">
                <img class="w-100 h-100 profile-image" src="{{ asset('images/adji.jpeg') }}">
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="section-title mb-4">
                    <h6 class="text-secondary text-uppercase pb-2">About Us</h6>
                    <h1 class="display-4 text-primary fw-bold">Adji</h1>
                </div>
                <p class="lead text-muted">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Quasi voluptate, commodi aliquam odio esse animi nobis molestias sit nam magnam ullam mollitia ex iste unde neque alias et, explicabo adipisci.
                </p>
            </div>
        </div>
    </div>
</div>


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

.profile-image {
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    object-fit: cover;
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