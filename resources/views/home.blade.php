@extends('layouts.base')

@section('content')
    <div class="frontend pageblocks">
        @foreach ($activePageblocks as $key => $activePageblock)
            <?php if (!empty($activePageblock['fields'])) : ?>
                <?php $fields = \App\Http\Classes\PageblockHelper::getRenderableFields($activePageblock['fields']); ?>
                @include('pageblocks.' . $activePageblock['type'])
            <?php endif; ?>
        @endforeach
    </div>
@endsection

