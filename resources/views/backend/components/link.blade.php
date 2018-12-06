<label class="link-label">
    {{ $field->name }}
    <input class="link-label" type="text" placeholder="link-text" name="pageblock-{{$pageblock->pageblock['id']}}-{{ $field->name }}-{{ $field->id }}-text"/>
    <input class="link" type="text" placeholder="link" name="pageblock-{{$pageblock->pageblock['id']}}-{{ $field->name }}-{{ $field->id }}"/>
</label>