@extends('layouts.app')
@section('title', $post->title)
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    .article-content {
        line-height: 1.8;
        color: #374151;
        font-size: 1.125rem;
    }
    .article-content h2 {
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 2.5rem;
        margin-bottom: 1rem;
        color: #111827;
    }
    .article-content h3 {
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 2rem;
        margin-bottom: 0.75rem;
        color: #111827;
    }
    .article-content p {
        margin-bottom: 1.5rem;
    }
    .article-content ul,
    .article-content ol {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
    }
    .article-content li {
        margin-bottom: 0.5rem;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        margin: 2rem auto;
        border-radius: 0.5rem;
    }
</style>
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Artikel -->
        <div class="mb-8">
            <div class="flex items-center text-sm text-gray-500 mb-4">
                <span class="text-blue-600">{{ $post->category->category_name }}</span>
                <span class="mx-2">•</span>
                <span>{{ $post->created_at->isoFormat('LL') }}</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">{{ $post->title }}</h1>
        </div>

        <!-- Gambar Utama -->
        <div class="mb-8 rounded-lg overflow-hidden">
            <img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto max-h-96 object-cover">
        </div>

        <!-- Konten Artikel -->
        <article class="article-content">
            {!! $post->content !!}
        </article>

        <!-- Share Artikel -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Bagikan Artikel Ini</h3>
            <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-blue-500">
                    <span class="sr-only">Facebook</span>
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-blue-400">
                    <span class="sr-only">Twitter</span>
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">LinkedIn</span>
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-red-500">
                    <span class="sr-only">WhatsApp</span>
                    <i class="fab fa-whatsapp text-xl"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection