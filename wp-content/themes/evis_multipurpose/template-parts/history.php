<?php
    /* Template Name: History */
    get_header();
?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 title">Our Company</h1>
        <p class="lead">
            <?php
                if (have_posts()):while(have_posts()):the_post();
                        the_content();
                    endwhile;
                else:
                    ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
        </p>
    </div>
</div>

<?php
    get_footer();