<?php

get_header();

?>

<div style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>)" class="page_banner">
    <div class="banner_content">
        <h1 class="banner_title">Welcome to our Site</h1>
        <div class="banner_intro">
            <p>Keep up with latest news</p>
        </div>
    </div>
</div>


<!-- <div class="container"> -->

<?php

while (have_posts()) {
    the_post()?>

<div class="post_item">
    <h2 class='job_name'><a href="<?php the_permalink()?>">
            <?php the_title()?>
        </a></h2>
    <div class="metabox">
        <p>Posted by <?php the_author_posts_link()?> on <?php the_date("n.j.y")?> in
            <?php echo get_the_category_list(', ') ?> </p>
    </div>
    <div class="generic_content">
        <?php the_content()?>

    </div>

</div>

<hr>

<?php
}
echo paginate_links()
?>
<!-- </div> -->

<?php

get_footer();
?>