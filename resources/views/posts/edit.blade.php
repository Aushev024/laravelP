<h2>Update post # {{ $post->id }}</h2>
<form method="post" action="{{ route('posts.update', [$post->id]) }}">
    @method('PUT')
    @csrf


    <div>
        Title: <input name="title" value="{{ $post->title }}">
        @error('title')
        <div style="color: red">{{ $message }}</div>
        @enderror
    </div>
    <div>Content: <textarea name="content">{{ $post->content }}</textarea></div>

    @if($errors->any())
        <hr>
        <div style="color: red">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <hr>
    @endif

    <button>Update</button>
</form>


