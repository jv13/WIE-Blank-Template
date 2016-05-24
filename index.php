<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Jen Vitrano Blank Template</title>

    <!-- Links to our Style.css file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

</head>
<body>
    <div class="container">

    <!-- BEGIN HEADER -->
        <?php get_header(); ?>
    <!-- END HEADER -->

    <!-- BEGIN SECTION CONTAINER -->
        <section class="row">
            <div class="twelve columns">
                <h2>This is the Section</h2>
                <p>This is some cool section content</p>
            </div>
        </section>
    <!-- END SECTION CONTAINER -->


    <!-- BEGIN FOOTER-->
        <?php get_footer(); ?>
    <!-- END FOOTER -->
    </div>

</body>
</html>
