@extends('layouts.app')

@section('content')
    <div class="pageblocks">
        @foreach ($pageblocks as $key => $pageblock)
            @include('pageblocks.' . $pageblock)
        @endforeach
    </div>
@endsection

