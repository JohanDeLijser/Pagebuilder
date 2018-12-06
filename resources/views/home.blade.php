@extends('layouts.base')

@section('content')
    <div class="frontend pageblocks">
        @foreach ($activePageblocks as $key => $activePageblock)
            <?php var_dump($activePageblock); ?>
            @include('pageblocks.' . $activePageblock['type'])
        @endforeach
    </div>
@endsection

