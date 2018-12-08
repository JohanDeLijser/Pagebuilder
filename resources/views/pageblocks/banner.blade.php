@section('banerBlock')
    <section class="banner-block" style="background-image: url('{{ $fields['banner_image_1'] }}');">
        <div class="container">
            <div class="banner-content">
                <h1>{{ $fields['banner_title_1'] }}</h1>
                <p>{{ $fields['banner_content_1'] }}</p>
            </div>
        </div>
    </section>
@show