<x-app-layout>
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}"></a>
</x-app-layout>