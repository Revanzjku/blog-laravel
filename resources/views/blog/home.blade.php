@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="row">
    @foreach ($articles as $article)
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' .$article->featured_image) }}" class="card-img-top" alt="{{ $article->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="text-muted">Kategori: {{ $article->category->category_name }}</p>
                    <p class="card-text">{!! Str::limit($article->content, 100) !!}</p>
                    <a href="{{ route('blog.show', $article->slug) }}" class="btn btn-warning">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
