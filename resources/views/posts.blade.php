<x-layout>
    <x-slot name="content">

        {{-- Nueva forma usando tailwind --}}

        @include('_posts-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            
            <x-post-featured-card />

            <div class="lg:grid lg:grid-cols-2">
                <x-post-card />
                <x-post-card />
            </div>

            <div class="lg:grid lg:grid-cols-3">
                <x-post-card />
                <x-post-card />
                <x-post-card />
            </div>
        </main>

        {{-- Forma antigua en que estaba construido --}}

        {{--@foreach ($posts as $post) {{--<?php foreach ($posts as $post) : ?>--}}
            {{--@dd($loop)--}} {{-- Nos da acceso a una variable loop con informacón acerca del loop --}}
            {{--<article class="{{ $loop->even ? 'foobar' : '' }}"> {{-- La variable loop puede servir para algo como esto y más --}}

                {{--<h1>
                    <a href="/posts/{{ $post->id }}{{--<?= $post->slug; ?>--}}{{--">
                        {{-- <?= $post->title; ?> --}} {{-- Forma de hacerlo en php sin usar blade --}}
                        {{--{!! $post->title !!} {{-- Forma usando blade y escaping de HTML code --}}
                    {{--</a>
                </h1>

                <p>
                    By <a href="/authors/{{ $post->author->username }}"> {{ $post->author->name }} </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>

                <div>
                    {{-- <?= $post->excerpt; ?> --}} {{-- Forma de hacerlo en php sin usar blade --}}
                    {{---{{ $post->excerpt }} {{-- Forma usando blade --}}
                {{--</div>

            </article>
        @endforeach {{--<?php endforeach; ?>--}}  

    </x-slot>  
</x-layout>