@extends('layouts.app')
@section('title', 'Kontak Kami')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <h1 class="text-center mb-4">Hubungi Kami</h1>
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <p class="text-muted text-center">Ada pertanyaan atau ingin berkolaborasi? Jangan ragu untuk menghubungi kami!</p>
        <div class="card shadow-sm p-4">
            <h3>Informasi Kontak</h3>
            <ul>
                <li>Email: <a href="mailto:contact@revansblog.com">contact@revansblog.com</a></li>
                <li>Instagram: <a href="#">@revansblog</a></li>
                <li>Facebook: <a href="#">Revans Blog</a></li>
            </ul>
            <h3>Kirim Pesan</h3>
            <form action="{{route('blog.message')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Pesan</label>
                    <textarea class="form-control" name="message" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
@endsection

