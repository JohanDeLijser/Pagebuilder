@extends('layout.baseLayout')

<?php
$pageblocks = array('bannerBlock' => 'pageblocks.bannerBlock', 'contenBlock' => 'pageblocks.contentBlock');
?>

@section('content')
    <div class="pageblocks">
        @foreach ($pageblocks as $key => $pageblock)
            @include($pageblock)
        @endforeach
    </div>
@endsection
