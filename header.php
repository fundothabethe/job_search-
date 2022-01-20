<!DOCTYPE html>
<html style='margin:0 !important' <?php language_attributes()?>>

<head>
    <meta charset="<?php bloginfo("charset")?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/dev/style.css' ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>



<body <?php body_class()?>>
    <header>
        <h1 class="logo_text">
            <a href="<?php echo site_url() ?>"><strong>Job</strong> Search</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <!-- <?php wp_nav_menu(array(

    "theme_location" => "headerMenuLocation",
))?> -->
        <ul class="header_menu my-0">
            <li class='header_list' <?php if (is_page('find-jobs') or wp_get_post_parent_id(0) == 11) {
    echo 'class="current-menu-item"';
}
?>>
                <a href="#">
                    Find Jobs</a>
            </li>
            <li class="header_list" <?php if (get_post_type() == 'contacts') {
    echo "class='current-menu-item'";
}
?>><a href="<?php echo get_post_type_archive_link("contacts") ?>">Contacts</a></li>

        </ul>

    </header>