<form action="/note" method = "POST">
@csrf
<div>
    <label for="title">Title</label>
    <textarea name = "title">
    </textarea>

    <label for="content">Content</label>
    <textarea name = "content">
    </textarea>

    <label for="important">Important</label>
    <textarea name = "important">
    </textarea>
</div>
<button type = "submit">Save</button>
</form>