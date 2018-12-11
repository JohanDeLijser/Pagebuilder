<section class="banner-block" <?php echo (!empty($fields['banner_image_1'])) ? 'style="background-image: url(' . $fields['banner_image_1'] . ');"' : ''; ?>>
    <div class="container">
        <div class="banner-content">
            <?php if (!empty($fields['banner_title_1'])) : ?>
                <h1>{{ $fields['banner_title_1'] }}</h1>
            <?php endif; ?>
            <?php if (!empty($fields['banner_content_1'])) : ?>
                <p>{{ $fields['banner_content_1'] }}</p>
            <?php endif; ?>
            <?php if (!empty($fields['banner_linklabel_1']) && !empty($fields['banner_link_1'])) : ?>
                <a href="{{ $fields['banner_link_1'] }}" class="btn btn-red">{{ $fields['banner_linklabel_1'] }}</a>
            <?php endif; ?>
        </div>
    </div>
</section>
