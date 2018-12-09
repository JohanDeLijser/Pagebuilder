<section class="card-block">
    <div class="container">
        <?php if (!empty($fields['content_title_1'])) : ?>
            <h1>{{ $fields['content_title_1'] }}</h1>
        <?php endif; ?>
        <?php if (!empty($fields['content_content_1'])) : ?>
            <p>{{ $fields['content_content_1'] }}</p>
        <?php endif; ?>
    </div>
</section>
