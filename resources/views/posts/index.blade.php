<h2>Hello</h2>
<hr>
<a href="/posts/create">Create post</a>
<hr>
<ul>
    @foreach($posts as $post)
        <li>{{ $post->id }}, <strong>{{ $post->title }}</strong></li>
    @endforeach
</ul>
