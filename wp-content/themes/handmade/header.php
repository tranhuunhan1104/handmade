<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $site_title = get_bloginfo('name'); ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <?php wp_head();?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1><?php echo $site_title = get_bloginfo('name'); ?><span>.</span></h1>
      </a>
<?php

$menu_name = 'primary';
$menu = wp_get_nav_menu_object($menu_name);

$menu_items = wp_get_nav_menu_items($menu->term_id);

if ($menu_items) {
    echo '   <nav id="navbar" class="navbar">
        <ul>';

    foreach ($menu_items as $menu_item) {
        echo "<li><a href='" . $menu_item->url . "'>" . $menu_item->title . "</a></li>";
    }
    echo ' </ul>
        </nav>';
}

?>
<?php

$menu_name = 'menu_book';
$menu = wp_get_nav_menu_object($menu_name);

$menu_items = wp_get_nav_menu_items($menu->term_id);

if ($menu_items) {

    foreach ($menu_items as $menu_item) {
        echo "<a class='btn-book-a-table' href='" . $menu_item->url . "'> " . $menu_item->title . "</a>";
    }
}

?>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->