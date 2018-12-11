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
                                        <a href="deletePageblock?id={{ $activePageblock['id'] }}" class="btn" name="delete-block">Delete block</a>
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
            <div class="save-button-holder">
                <div class="container text-right">
                    <input id="submit-backend-form" class="btn btn-red" type="submit" value="Save form"/>
                </div>
            </div>
        </form>

        <form action="{{ action('BackendController@postAddPageblock') }}" method="POST" role="form" class="add-pageblock-form">
            <h2>Add new pageblock</h2>
            <select id="all-available-pageblocks-select" class="all-available-pageblocks" name="all-available-pageblocks-select">
                @foreach ($allPageblocks as $pageblock)
                    <option value="{{ $pageblock->pageblock['id'] }}">{{ $pageblock->pageblock['name'] }}</option>
                @endforeach
            </select>
            <input id="submit-add-pageblock" type="submit" value="Add pageblock" class="btn btn-red"/>
        </form>
    </div>
@endsection
