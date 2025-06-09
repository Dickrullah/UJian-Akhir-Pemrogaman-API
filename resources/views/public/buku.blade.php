@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">

<div class="container py-5">
    <!-- Hero Header -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-dark mb-3" style="font-family: 'Playfair Display', serif;">Koleksi Buku</h1>
        <p class="lead text-muted" style="font-family: 'Montserrat', sans-serif;">Discover timeless literary masterpieces in our exquisite library</p>
    </div>

    <!-- Enhanced Search Bar -->
    <form method="GET" action="{{ route('buku.index') }}" class="mb-5">
        <div class="input-group input-group-lg shadow-sm">
            <input type="text" name="search" class="form-control border-0 py-3 px-4" 
                   placeholder="Search for literary treasures..." value="{{ request('search') }}"
                   style="font-family: 'Montserrat', sans-serif;">
            <button class="btn btn-dark px-4" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    <!-- Book Grid -->
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @forelse ($bukus as $buku)
        <div class="col">
            <div class="card h-100 shadow border-0 rounded-4 overflow-hidden book-card">
                <!-- Book Cover with Gold Accent -->
                <div class="book-cover position-relative">
                    <div class="text-center bg-light" style="height: 280px; background: linear-gradient(135deg, #f5f7fa 0%, #f0f2f5 100%);">
                        <img src="{{ asset('storage/' . $buku->gambar) }}"
                             class="img-fluid h-100"
                             alt="{{ $buku->judul }}"
                             style="object-fit: contain; max-height: 100%; width: auto;">
                    </div>
                </div>
                
                <!-- Book Details -->
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold mb-3" style="font-family: 'Playfair Display', serif; color: #2c3e50;">{{ $buku->judul }}</h5>
                    
                    <div class="book-meta mb-3">
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-user-pen me-2 text-gold"></i>
                            <span style="font-family: 'Montserrat', sans-serif;">{{ $buku->penulis }}</span>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="fas fa-building me-2 text-gold"></i>
                            <span style="font-family: 'Montserrat', sans-serif;">{{ $buku->penerbit }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-layer-group me-2 text-gold"></i>
                            <span style="font-family: 'Montserrat', sans-serif;">{{ $buku->kategori_buku }}</span>
                        </div>
                    </div>
                    
                    <!-- View Details Button -->
                    <div class="d-grid mt-4">
                        <button class="btn btn-outline-dark btn-sm rounded-pill px-4 py-2 view-details" 
                                data-bs-toggle="modal" data-bs-target="#bookModal{{ $buku->id }}">
                            View Details <i class="fas fa-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Book Modal -->
        <div class="modal fade" id="bookModal{{ $buku->id }}" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0 rounded-4 overflow-hidden">
                    <div class="modal-header border-0 bg-dark text-white">
                        <h5 class="modal-title" style="font-family: 'Playfair Display', serif;">{{ $buku->judul }}</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="text-center bg-light p-3 rounded-3 mb-3" style="height: 300px;">
                                    <img src="{{ asset('storage/' . $buku->gambar) }}"
                                         class="img-fluid h-100"
                                         alt="{{ $buku->judul }}"
                                         style="object-fit: contain; max-height: 100%; width: auto;">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="book-details">
                                    <div class="d-flex mb-3">
                                        <div class="me-4">
                                            <h6 class="text-muted mb-1">Author</h6>
                                            <p class="mb-0">{{ $buku->penulis }}</p>
                                        </div>
                                        <div class="me-4">
                                            <h6 class="text-muted mb-1">Publisher</h6>
                                            <p class="mb-0">{{ $buku->penerbit }}</p>
                                        </div>
                                        <div>
                                            <h6 class="text-muted mb-1">Year</h6>
                                            <p class="mb-0">{{ $buku->tahun_penerbitan }}</p>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <h6 class="text-muted mb-2">Description</h6>
                                        <p class="mb-0" style="font-family: 'Montserrat', sans-serif;">{{ $buku->abstrak }}</p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <h6 class="text-muted mb-1">ISBN</h6>
                                            <p class="mb-0">{{ $buku->isbn }}</p>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <h6 class="text-muted mb-1">Category</h6>
                                            <p class="mb-0">{{ $buku->kategori_buku }}</p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="text-muted mb-1">Stock</h6>
                                            <p class="mb-0">{{ $buku->stok_buku }} available</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-outline-dark rounded-pill px-4" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
            <div class="alert alert-light border" role="alert">
                <i class="fas fa-book-open fa-2x mb-3 text-muted"></i>
                <h4 style="font-family: 'Playfair Display', serif;">Buku Tidak Dapat Ditemukan</h4>
                <p class="mb-0" style="font-family: 'Montserrat', sans-serif;">Masukkan Judul Dengan Benar</p>
            </div>
        </div>
        @endforelse
    </div>
</div>

<!-- Pagination -->
<div class="mt-5 d-flex justify-content-center">
    {{ $bukus->withQueryString()->links('pagination::bootstrap-5') }}
</div>

<!-- Luxurious Footer -->
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
                <td>Senin-Jumat:</td>
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
    :root {
        --gold: #c9a66b;
        --dark: #2c3e50;
        --light: #f8f9fa;
    }
    
    .text-gold {
        color: var(--gold) !important;
    }
    
    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f8f9fa;
    }
    
    .book-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .book-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    }
    
    .book-cover {
        position: relative;
        overflow: hidden;
    }
    
    .book-meta {
        border-left: 3px solid var(--gold);
        padding-left: 15px;
    }
    
    .view-details {
        transition: all 0.3s ease;
        border-width: 2px;
        font-weight: 600;
    }
    
    .view-details:hover {
        background-color: var(--dark);
        color: white;
    }
    
    .modal-content {
        border: none;
        box-shadow: 0 5px 30px rgba(0,0,0,0.2);
    }
    
    .modal-header {
        background: linear-gradient(135deg, #2c3e50 0%, #1a252f 100%);
    }
    
    .book-details h6 {
        font-size: 0.8rem;
        letter-spacing: 1px;
    }
    
    .social-icons a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.1);
        transition: all 0.3s ease;
    }
    
    .social-icons a:hover {
        background-color: var(--gold);
        transform: translateY(-3px);
    }
    
    .form-control:focus {
        border-color: var(--gold);
        box-shadow: 0 0 0 0.25rem rgba(201, 166, 107, 0.25);
    }
    
    .page-item.active .page-link {
        background-color: var(--dark);
        border-color: var(--dark);
    }
    
    .page-link {
        color: var(--dark);
    }
</style>
@endsection