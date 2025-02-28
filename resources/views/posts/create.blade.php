<h2>Create post</h2>
<form method="post" action="/posts">
    @csrf
    <x-input label="Post Title" name="title" />
    <x-input label="Post content" name="content" />
    <button>Send</button>
</form>

