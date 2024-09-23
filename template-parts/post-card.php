<?php

/**
 * Template part for displaying posts in a card format
 */
?>

<div class="card h-100"> <!-- Card container -->
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?>">
        <?php endif; ?>
    </a>
    <div class="card-body">
        <h5 class="card-title">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none"><?php the_title(); ?></a>
        </h5>
        <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p> <!-- Trimmed excerpt -->
    </div>
    <div class="card-footer text-muted">
        <small><?php echo get_the_date(); ?></small> <!-- Post date -->
    </div>
</div>