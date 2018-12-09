<section class="text-image">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <?php if (!empty($fields['textimage_title_1'])) : ?>
                    <h1>{{ $fields['textimage_title_1'] }}</h1>
                <?php endif; ?>
                <?php if (!empty($fields['textimage_content_1'])) : ?>
                    <p>{{ $fields['textimage_content_1'] }}</p>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-6">
                <?php if (!empty($fields['textimage_image_1'])) : ?>
                    <div class="image" style="background-image: url({{ $fields['textimage_image_1'] }});"></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
