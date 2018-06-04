<?php get_header();
the_post(); ?>
<?php $galerie = get_field('galeria'); ?>

<div class="bigGrid">
    <div class="grid">
        <div class="grid-sizer"></div>
        <?php foreach ($galerie as $photo) { ?>
            <div class="grid-item">
                <div class="grid-item_image">
                    <img src="<?php echo $photo["sizes"]["medium_large"] ?>" alt="">
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="bigGrid" id="biofrafia">
    <div class="img-header">
        <img src="wp-content/themes/burnat/assets/images/header.jpg" alt="image header biografia">
    </div>
    <div class="biofrafie-c">
        <h1 class="title">BIOGRAFIA</h1>
        <?php the_content(); ?>
    </div>
</div>


<?php get_footer(); ?>