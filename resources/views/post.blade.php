<x-layout>
  <article>
    <h1>{{ $post->title }}</h1>

    {!! $post->body !!}
  </article>

  <a href="/">Back to Home page</a>

</x-layout>
