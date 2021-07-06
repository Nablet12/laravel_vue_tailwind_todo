<form action="/note/{{ $note->id }}" method = "POST">
@csrf
@method('PUT')
<div>
    <label for="title">Title</label>
    <textarea value = "{{ $note->title }}" name = "title">
    </textarea>

    <label for="content">Content</label>
    <textarea value = "{{ $note->content }}" name = "content">
    </textarea>

    <label for="important">Important</label>
    <option value="true">Yes</option>
    <option value="false">No</option>
</div>
<button type = "submit">Save</button>
</form>