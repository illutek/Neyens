<h2 class="title_realizations"><?php print $title; ?></h2>
<div class="img_realisaties">
    <div class="grid">
        <div class="grid-item grid-item--width2">
            <?php print render($content['field_realisatie_img'][0]); ?>
        </div>
        <?php print render($content['field_realisatie_img']); ?>
        <?php // print_r ($field_realisatie_img) ?>
    </div>
</div>
<script>
    $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 195
    });
</script>