<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Revans Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blog Kami</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.index')}}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.article')}}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.about')}}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog.contact')}}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero">
        <h1>Selamat Datang di Revans Blog</h1>
        <p>Tempat terbaik untuk membaca artikel menarik</p>
    </header>
    
    <div class="container my-5">
        @yield('content')
    </div>
    
    <footer>
        <p>&copy; {{date('Y')}} Revans Blog. Semua Hak Cipta Dilindungi.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>