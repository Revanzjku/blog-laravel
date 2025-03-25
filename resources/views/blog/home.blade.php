@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="bg-gradient-to-r from-blue-600 to-blue-500 text-white py-16 md:py-24">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="md:flex md:items-center md:justify-between">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">Temukan Inspirasi dalam Setiap Kata</h1>
                <p class="text-xl mb-8 text-blue-100">Blog pribadi berisi pemikiran, tutorial, dan kisah inspiratif untuk membantu Anda berkembang.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-white text-blue-600 hover:bg-gray-100 px-6 py-3 rounded-md font-semibold">Mulai Membaca</button>
                    <button class="border-2 border-white text-white hover:bg-white hover:text-blue-600 px-6 py-3 rounded-md font-semibold">Tentang Saya</button>
                </div>
            </div>
            <div class="md:w-2/5">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Blog Inspirasi" class="rounded-lg shadow-xl">
            </div>
        </div>
    </div>
</section>
<section class="py-12 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Artikel Terbaru</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan artikel terbaru yang mungkin menarik untuk Anda baca</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articles as $ $article)
            <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300">
                <img src="{{ asset('images/'. $article->featured_image) }}" alt="{{ $article->title }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-500 mb-2">
                        <span>{{ $article->categories->name }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $article->created_at->format('D M Y') }}</span>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">{{ $article->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($article->content) }}</p>
                    <a href="{{ route('posts.show', $article) }}" class="text-blue-600 hover:text-blue-800 font-medium">Baca Selengkapnya →</a>
                </div>
            </div>
            @endforeach
        <div class="text-center mt-12">
            <a href="{{route('blog.article')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-md font-semibold">Lihat Semua Artikel</a>
        </div>
    </div>
</section>
@endsection