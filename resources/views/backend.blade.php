@extends('layouts.base')

@section('content')
    <div class="backend container">
        <form action="{{ action('BackendController@postSaveBackendForm') }}" method="post" role="form">
            <div class="pageblocks">
                @foreach ($allActivePageblocks as $activePageblock)
                    @include('backend.pageblocks.' . $activePageblock['type'])
                @endforeach
            </div>
            <input id="submit-backend-form" type="submit" value="Save form"/>
        </form>
    </div>
@endsection
