<section <?php echo ($activePageblock['id']) ? 'id="' . $activePageblock['id'] . '"': ''; ?> class="backend banner-block">
    <div class="row">
        <h2 class="col-12">Banner block</h2>
        <div class="fields col-12">
            <div class="row">
                <div class="col-12">
                    <label>
                        Image
                        @if (!empty($activePageblock['fields']['banner_image_1']))
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_image_1" value="{{ $activePageblock['fields']['banner_image_1']['value'] }}"/>
                        @else
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_image_1"/>
                        @endif
                    </label>
                </div>
                <div class="col-12">
                    <label>
                        Title
                        @if (!empty($activePageblock['fields']['banner_title_1']))
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_title_1" value="{{ $activePageblock['fields']['banner_title_1']['value'] }}"/>
                        @else
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_title_1"/>
                        @endif
                    </label>
                </div>
                <div class="col-12">
                    <label>
                        Content
                        @if (!empty($activePageblock['fields']['banner_content_1']))
                            <textarea type="text" name="{{ $activePageblock['id'] }}-banner_content_1">{{ $activePageblock['fields']['banner_content_1']['value'] }}</textarea>
                        @else
                            <textarea type="text" name="{{ $activePageblock['id'] }}-banner_content_1"></textarea>
                        @endif
                    </label>
                </div>
                <div class="col-12">
                    <label>
                        Link
                        @if (!empty($activePageblock['fields']['banner_linklabel_1']))
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_linklabel_1" value="{{ $activePageblock['fields']['banner_linklabel_1']['value'] }}"/>
                        @else
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_linklabel_1"/>
                        @endif

                        @if (!empty($activePageblock['fields']['banner_link_1']))
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_link_1" value="{{ $activePageblock['fields']['banner_link_1']['value'] }}"/>
                        @else
                            <input type="text" name="{{ $activePageblock['id'] }}-banner_link_1"/>
                        @endif

                    </label>
                </div>
            </div>
        </div>
    </div>
</section>