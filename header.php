<!-- BEGIN HEADER -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?> <!-- ALLOWS FOR WORDPRESS TOP BAR TO SHOW -->

    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

</head>
<body>
    <!-- BEGIN CONTAINER DIV -->
    <div class="container">
        <header class="row">
            <div class="twelve columns">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
        </header>
<!-- END HEADER -->
