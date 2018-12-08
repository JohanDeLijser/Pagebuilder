<section <?php echo ($activePageblock['id']) ? 'id="' . $activePageblock['id'] . '"': ''; ?> class="backend content-block">
    <div class="row">
        <h2 class="col-12">Content block</h2>
        <div class="fields col-12">
            <div class="row">
                <div class="col-12">
                    <label>
                        Title
                        @if (!empty($activePageblock['fields']['content_title_1']))
                            <input type="text" name="{{ $activePageblock['id'] }}-content_title_1" value="{{ $activePageblock['fields']['content_title_1']['value'] }}"/>
                        @else
                            <input type="text" name="{{ $activePageblock['id'] }}-content_title_1"/>
                        @endif
                    </label>
                </div>
                <div class="col-12">
                    <label>
                        Content
                        @if (!empty($activePageblock['fields']['content_content_1']))
                            <textarea type="text" name="{{ $activePageblock['id'] }}-content_content_1">{{ $activePageblock['fields']['content_content_1']['value'] }}</textarea>
                        @else
                            <textarea type="text" name="{{ $activePageblock['id'] }}-content_content_1"></textarea>
                        @endif
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>