<x-layout.main title="Posts">
    <hr>
    <a href="/posts/create">Create post</a>
    <hr>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->id }}, <strong>{{ $post->title }}</strong>
                <a href="{{ route('posts.show', [$post->id]) }}">Show</a>
                <a href="/posts/{{ $post->id }}/edit">Edit</a>

            </li>
        @endforeach
    </ul>
</x-layout.main>

