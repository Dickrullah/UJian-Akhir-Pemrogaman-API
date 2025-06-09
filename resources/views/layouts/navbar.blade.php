<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BacaQuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .navbar {
            background-color:rgb(255, 255, 255) !important; 
        }
        .navbar .nav-link {
            color: black!important; 
            transition: all 0.3s ease;
            
        }
        .navbar .nav-link:hover {
            color: black !important;
            font-weight: bold !important;
        }
    </style>
</head>
<body>
   <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
        <B><a class="navbar-brand" href="{{ URL('/') }}">BacaQuy</a></B> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="{{ URL('/') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('buku')) ? 'active' : '' }}" href="{{ URL('buku') }}">Buku</a>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('aboutus')) ? 'active' : '' }}" href="{{ URL('aboutus') }}">About Us</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('login')) ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('register')) ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('pemesanans')) ? 'active' : '' }}" href="{{ route('pemesanans.index') }}">Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('peminjaman')) ? 'active' : '' }}" href="{{ URL('peminjaman') }}">Peminjaman</a>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('jadwal')) ? 'active' : '' }}" href="{{ URL('dashboard') }}">Dashboard</a>
                    </li>    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form>
                        </li>
                        </ul>
                    </li>
                   
                @endguest
            </ul>
          </div>
        </div>
    </nav>    

    @yield('content')
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>
