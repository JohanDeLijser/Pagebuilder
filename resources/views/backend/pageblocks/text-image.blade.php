<section class="backend text-image-block">
    <h2 class="col-12">{{ $pageblock->pageblock['name'] }}</h2>
    <div class="fields col-12">
        <div class="row">
            @foreach($pageblock->pageblock['fields'] as $field)
                <div class="col-12">
                    @include('backend.components.' . $field->type)
                </div>
            @endforeach
        </div>
    </div>
</section>