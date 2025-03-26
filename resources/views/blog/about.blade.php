@extends('layouts.app')
@section('title', 'Tentang Kami')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Tentang Kami</h1>
        <p class="text-muted text-center">Selamat datang di Revans Blog, tempat berbagi informasi dan inspirasi!</p>
        <div class="card shadow-sm p-4">
            <h3>Visi & Misi</h3>
            <p><strong>Visi:</strong> Menjadi platform blog terpercaya yang memberikan wawasan dan inspirasi bagi semua kalangan.</p>
            <p><strong>Misi:</strong></p>
            <ul>
                <li>Menyediakan konten berkualitas dan informatif.</li>
                <li>Menghubungkan pembaca dengan berbagai topik menarik.</li>
                <li>Mendorong diskusi dan berbagi wawasan antar pembaca.</li>
            </ul>
            <h3>Tim Kami</h3>
            <div class="d-flex align-items-center mb-3">
                <img src="{{ asset('profile-pic.jpg') }}" class="rounded-circle me-3" alt="Revans Satria Putra" width="150">
                <div>
                    <h5 class="mb-1">Revans Satria Putra</h5>
                    <p class="text-muted">Pendiri & Penulis Utama</p>
                </div>
            </div>
            <h3>Kontak</h3>
            <p>Jangan ragu untuk menghubungi kami melalui:</p>
            <ul>
                <li>Email: <a href="mailto:contact@revansblog.com">contact@revansblog.com</a></li>
                <li>Instagram: <a href="#">@revansblog</a></li>
                <li>Facebook: <a href="#">Revans Blog</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
