@extends('layouts.base')

@section('content')
    <div class="frontend pageblocks">
        @foreach ($activePageblocks as $key => $activePageblock)
            <?php $fields = \App\Http\Classes\PageblockHelper::getRenderableFields($activePageblock['fields']); ?>
            @include('pageblocks.' . $activePageblock['type'])
        @endforeach
    </div>
@endsection

