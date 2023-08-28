<x-layout>

    <x-slot name="content">
        <article>
            <h1>
                {{-- <?= $post->title; ?> --}} {{-- Forma de hacerlo en php sin usar blade --}}
                {!! $post->title !!} {{-- Forma usando blade para escapar contenido HTML --}}
            </h1>

            <p>
                By <a href="#"> Jeffray Smith </a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                {{-- <?= $post->body; ?> --}} {{-- Forma de hacerlo en php sin usar blade --}}
                {!! $post->body !!} {{-- Forma usando blade para escapar contenido HTML --}}
            </div>
        </article>

        <a href="/">Go back</a>
    </x-slot>   

</x-layout>
