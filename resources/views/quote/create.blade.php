<form action="/quote" method = "POST">
@csrf
<div>
    <label for = "quote">Quote</label>
    <input type = "text" name = "quote" />
</div>
<button type = "submit">Save</button>
</form>