<h2>Update post</h2>
<form method="post" action="/posts/update">
    @csrf
    @method('PUT')

    <div>Title: <input name="title" value="{{ old('title') }}"></div>
    <div>Content: <textarea name="content">{{ old('content') }}</textarea></div>

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


