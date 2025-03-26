@extends('layouts.app')
@section('title', $article->title)
@section('content')
<article class="col-lg-8 mx-auto">
    <h1 class="mb-3 fw-bolder">{{ $article->title }}</h1>
    <p class="text-muted">Kategori: <span class="badge bg-primary">{{ $article->category->name }}</span> | Diposting pada: {{ $article->created_at->format('d M Y') }}</p>
    <img src="{{ asset('storage/' . $article->featured_image) }}" class="img-fluid rounded mb-3" alt="{{ $article->title }}">
    <div class="fs-5">{!! $article->content !!}</div>
    <a href="{{route('blog.index')}}" class="btn btn-secondary mt-4">Kembali ke Beranda</a>
</article>
@endsection