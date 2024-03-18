<x-layout>
  <article>
    <h1>{{ $post->title }}</h1>

    <p>By <a href="/authors/{{ $post->user->name }}">{{ $post->user->name }}</a> in <a
        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

    {{ $post->body }}
  </article>

  <a href="/">Back to Home page</a>

</x-layout>
