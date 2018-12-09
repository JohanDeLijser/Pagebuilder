<section <?php echo ($activePageblock['id']) ? 'id="' . $activePageblock['id'] . '"': ''; ?> class="backend cards-block">
    <h2 class="col-12">Cards block</h2>
    <div class="fields col-12">
        <div class="row">
            <div class="col-12">
                <label>
                    Title
                    @if (!empty($activePageblock['fields']['cardblock_title_1']))
                        <input type="text" name="{{ $activePageblock['id'] }}-cardblock_title_1" value="{{ $activePageblock['fields']['cardblock_title_1']['value'] }}"/>
                    @else
                        <input type="text" name="{{ $activePageblock['id'] }}-cardblock_title_1"/>
                    @endif
                </label>
            </div>
            <div class="col-12">
                <div class="row">
                    <?php for ($i = 1; $i < 4; $i++) : ?>
                        <div class="col-12 col-md-3 card">
                            <label>
                                Image
                                @if (!empty($activePageblock['fields']['cardblock_card_image_' . $i]))
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_image_{{ $i }}" value="{{ $activePageblock['fields']['cardblock_card_image_' . $i]['value'] }}"/>
                                @else
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_image_{{ $i }}"/>
                                @endif
                            </label>
                            <label>
                                Title
                                @if (!empty($activePageblock['fields']['' . $i]))
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_title_{{ $i }}" value="{{ $activePageblock['fields']['cardblock_card_title_' . $i]['value'] }}"/>
                                @else
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_title_{{ $i }}"/>
                                @endif
                            </label>
                            <label>
                                Content
                                @if (!empty($activePageblock['fields']['cardblock_card_content_' . $i]))
                                    <textarea type="text" name="{{ $activePageblock['id'] }}-cardblock_card_content_{{ $i }}">{{ $activePageblock['fields']['cardblock_card_content_' . $i]['value'] }}</textarea>
                                @else
                                    <textarea type="text" name="{{ $activePageblock['id'] }}-cardblock_card_content_{{ $i }}"></textarea>
                                @endif
                            </label>
                            <label>
                                Link
                                @if (!empty($activePageblock['fields']['cardblock_card_link_' . $i]))
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_link_{{ $i }}" value="{{ $activePageblock['fields']['cardblock_card_link_' . $i]['value'] }}"/>
                                @else
                                    <input type="text" name="{{ $activePageblock['id'] }}-cardblock_card_link_{{ $i }}"/>
                                @endif
                            </label>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>