
<?php

    get_header( );

    while ( have_posts()) {
        the_post();
?>
    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/justicia.jpg')?>);"></div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>NO TE OLVIDES REEMPLAZARME LUEGO</p>
            </div>
        </div>
    </div>

    <div class="container py-3">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                                <!-- breadcrumb -->
            <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <?php get_breadcrumb(); ?>
                    </nav>
                </div>
            <?php
                $theParent = wp_get_post_parent_id(get_the_ID());

                if ( $theParent != false) {
            ?>

            <?php
                }
            ?>
            </div>
            <div class="col-lg-9 col-sm-12">
                <p>Ha ocurrido un error, la dirección que busca no se encuentra o no está disponible</p>
            </div>
        </div>
    </div>
<?php
    }

    get_footer( );
?>
