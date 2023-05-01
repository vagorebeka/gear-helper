<form action="{{ route('item.destroy', $items->id) }}" method="POST" style="display: inline;">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-outline-secondary">Törlés</button>
</form>
