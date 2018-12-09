@extends('layouts.base')

@section('content')
    <div class="backend container">
        <form action="{{ action('BackendController@postSaveBackendForm') }}" method="POST" role="form">
            <div class="pageblocks row">
                @foreach ($allActivePageblocks as $activePageblock)
                    <div class="pageblock col-12">
                        <div class="row">
                            <div class="col-12 pageblock-backend-controls">
                                <div class="row">
                                    <div class="col-6">
                                        <select class="pageblock-order-select" name="{{ $activePageblock['id'] }}-order">
                                            @for ($i = 1; $i <= $amountOfActivePageblocks; $i++)
                                                <option value="{{ $i }}" <?php echo ($activePageblock['order'] === $i) ? 'selected="selected"' : ''; ?>>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-6 delete-pageblock">
                                        <a href="deletePageblock?id={{ $activePageblock['id'] }}" name="delete-block">Delete block</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                @include('backend.pageblocks.' . $activePageblock['type'])
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <input id="submit-backend-form" type="submit" value="Save form"/>
        </form>

        <form action="{{ action('BackendController@postAddPageblock') }}" method="POST" role="form">
            <select id="all-available-pageblocks-select" class="all-available-pageblocks" name="all-available-pageblocks-select">
                @foreach ($allPageblocks as $pageblock)
                    <option value="{{ $pageblock->pageblock['id'] }}">{{ $pageblock->pageblock['name'] }}</option>
                @endforeach
            </select>
            <input id="submit-add-pageblock" type="submit" value="Add pageblock"/>
        </form>
    </div>
@endsection
