<?php get_header();
the_post(); ?>
<?php $galerie = get_field('galeria'); ?>



<div class="big-grid" id="biofrafia">
    <div class="big-grid_container">
        <div class="img-header">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header.jpg" alt="image header biografia">
        </div>
        <div class="biofrafie-c">
            <h1 class="title">BIOGRAFIA</h1>
            <?php the_content(); ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/artiste.jpg" alt="image artiste" class="image-artist">
        </div>

    </div>
</div>


<div class="big-grid">
    <div class="grid">
        <div class="grid-sizer"></div>
        <?php foreach ($galerie as $idx=>$photo) { ?>
            <div class="grid-item">
                <div class="grid-item_image">
                    <img alt="<?php echo $photo['title']; ?>" class="galeria-image" data-name="" data-index="<?php echo $idx; ?>" src="<?php echo $photo["sizes"]["medium_large"] ?>" data-large-src="<?php echo $photo["sizes"]["large"] ?>" alt="">
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<div class="popin">
    <div class="title"></div>
    <div class="close-button">
        <p>x</p>
    </div>
    <div class="arrow arrow--left">
        <p>< </p>
    </div>
    <div class="arrow arrow--right">
        <p> > </p>
    </div>
    <div class="img-c">
        <span><?php the_field('title'); ?></span>
        <img src="" alt="">
    </div>
</div>

<?php get_footer(); ?>