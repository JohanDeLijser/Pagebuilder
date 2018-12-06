@section('banerBlock')
    <?php $fields = \App\Http\Classes\PageblockHelper::getRenderableFields($activePageblock['fields']); ?>
    <section class="banner-block" style="background-image: url('{{ $fields['image'] }}');">
        <div class="container">
            <div class="banner-content">
                <h1>{{ $fields['text'] }}</h1>
                <p>{{ $fields['textarea'] }}</p>
            </div>
        </div>
    </section>
@show