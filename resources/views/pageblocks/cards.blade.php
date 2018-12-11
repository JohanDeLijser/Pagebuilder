<section class="card-block">
    <div class="container">
        <?php if (!empty($fields['cardblock_title_1'])) : ?>
            <h1>{{ $fields['cardblock_title_1'] }}</h1>
        <?php endif; ?>
        <div class="row">
            @for ($i = 1; $i < 4; $i++)
                <div class="col-12 col-md-4">
                    <?php if (!empty($fields['cardblock_card_link_' . $i])) : ?>
                        <a href="{{ $fields['cardblock_card_link_' . $i] }}" target="_blank" class="card">
                    <?php else : ?>
                        <div class="card">
                    <?php endif; ?>
                            <div class="image" style="background-image: url({{ $fields['cardblock_card_image_' . $i] }})">
                                <?php if (!empty($fields['cardblock_card_title_' . $i]) || !empty($fields['cardblock_card_content_' . $i])) : ?>
                                    <div class="content-holder">
                                        <?php if (!empty($fields['cardblock_card_title_' . $i])) : ?>
                                            <h3 class="title">{{ $fields['cardblock_card_title_' . $i] }}</h3>
                                        <?php endif; ?>
                                        <?php if (!empty($fields['cardblock_card_content_' . $i])) : ?>
                                            <p class="content">{{ $fields['cardblock_card_content_' . $i] }}</p>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                    <?php if (!empty($fields['cardblock_card_link_' . $i])) : ?>
                        </a>
                    <?php else : ?>
                        </div>
                    <?php endif; ?>
                </div>
            @endfor
        </div>
    </div>
</section>
