@extends('layouts.base')

@section('content')
    <div class="backend container">
        <form action="{{ action('BackendController@postBackendForm') }}" method="post" role="form">
            @foreach ($allPageblocks as $key => $pageblock)
                @if( $pageblock->pageblock['type'] == 'banner')
                    @include('backend.pageblocks.' . $pageblock->pageblock['type'])
                @endif
            @endforeach
            <input id="submit-backend-form" type="submit" value="Save form"/>
        </form>
    </div>
@endsection
