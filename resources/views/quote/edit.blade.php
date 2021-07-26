<form action="/quote/{{ $quote->id }}" method = "POST">
@csrf
@method('PUT')
<div>
    <label for = "quote"> Quote </label>
    <input type = "text" value = "{{ $quote->quote }}" name = "quote" />
</div>
<button type = "submit"> Save </button>
</form>