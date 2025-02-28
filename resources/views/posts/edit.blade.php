<h2>Update post # {{ $post->id }}</h2>
<form method="post" action="{{ route('posts.update', [$post->id]) }}">
    @method('PUT')
    @csrf

    <x-input label="Post title" name="title" default-value="{{ $post->title }}" />
    <x-input label="Post content" name="content" default-value="{{ $post->content }}" />

    <button>Update</button>
</form>


