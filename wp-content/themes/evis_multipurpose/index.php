<?php

    get_header();
?>
<!-- What We Do -->
<div class="w3-agileits-interior-design pb-lg-5" id="whatWeDo">
    <div class="container">
        <?php
        $args = [
            'post_type' => 'our_work',
            'posts_per_page' => 5,
        ];
        $loop = new WP_Query($args);
        $i = 1;
        while ($loop->have_posts()) {
            $loop->the_post();
            if ($i == 1 || $i == 3 || $i == 5) {
                ?>
                <div class="row w3ls-interior-design-grids py-5">
                    <div class="col-lg-6 w3ls-interior-design-grid-<?php
                    if ($loop->posts['0']) {
                        echo 'left';
                    }
                    ?>">
                        <figure class="effect-lexi">
                            <img src="<?php the_post_thumbnail() ?>" alt="" class="img-fluid" />
                            <figcaption>
                                <p><?php the_title(); ?></p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6 w3ls-interior-design-grid-<?php
                    if ($loop->posts['0']) {
                        echo 'right';
                    }
                    ?>">
                        <h3 class="mt-4"><?php the_title(); ?></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
                <?php
            }
            if ($i == 2 || $i == 4) {
                ?>
                <div class="row w3ls-interior-design-grids py-5">
                    <div class="col-lg-6 w3ls-interior-design-grid-<?php
                    if ($loop->posts['1']) {
                        echo 'right';
                    }
                    ?>">
                        <h3><span><?php the_title(); ?></span></h3>
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="col-lg-6 w3ls-interior-design-grid-<?php
                    if ($loop->posts['1']) {
                        echo 'left';
                    }
                    ?>">
                        <figure class="effect-lexi">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/g4.jpg" alt="" class="img-fluid mt-4" />
                            <figcaption>
                                <p><?php the_title(); ?></p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <?php
            }
            $i++;
        }
        ?>
    </div>
</div>
<!-- End Of What We Do -->

<!-- About -->
<div data-vide-bg="<?php echo get_template_directory_uri() ?>/assets/video/meeting.mp4" id="about">
    <div class="center-container py-4 py-sm-5">
        <div class="w3ls-video-info py-lg-5">
            <div class="container">
                <h1 class="heading1"><?php echo cs_get_option('aboutTitle') ?></h1>
                <p><?php echo cs_get_option('aboutSubTitle') ?></p>
            </div>
        </div>
    </div>
</div>
<section class="w3-about" id="section2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 wthree-abt-info">
                <h2>ABOUT US</h2>
                <img src="<?php echo cs_get_option('aboutImage') ?>" alt="" class="img-fluid float-right w-50 p-4" />
                <p class="my-xl-4 my-lg-3 my-md-4 my-3">
                    <?php echo cs_get_option('aboutDescription') ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="stats_test pb-5 container-fluid">
    <div class="row inner_stat_wthree_agileits">
        <div class="col-md-3 col-sm-6 py-5 stats_info counter_grid">
            <i class="far fa-building"></i>
            <p class="counter"><?php echo cs_get_option('branchNumbers') ?></p>
            <label class="mx-auto"></label>
            <h4>Branches</h4>
        </div>
        <div class="col-md-3 col-sm-6 py-5 stats_info counter_grid1">
            <i class="fas fa-users"></i>
            <p class="counter"><?php echo cs_get_option('memberNumbers') ?></p>
            <label class="mx-auto"></label>
            <h4>Qualified Members</h4>
        </div>
        <div class="col-md-3 col-sm-6 py-5 stats_info counter_grid2">
            <i class="far fa-edit"></i>
            <p class="counter"><?php echo cs_get_option('projectNumbers') ?></p>
            <label class="mx-auto"></label>
            <h4>Projects Done</h4>
        </div>
        <div class="col-md-3 col-sm-6 py-5 stats_info counter_grid3">
            <i class="far fa-smile"></i>
            <p class="counter"><?php echo cs_get_option('customerNumbers') ?></p>
            <label class="mx-auto"></label>
            <h4>Happy Customers</h4>
        </div>
    </div>
</section>
<!-- End of About -->

<?php
    get_footer();