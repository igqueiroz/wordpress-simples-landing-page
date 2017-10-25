<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="UTF-8">
    <title>Empiricus Research Theme 1.0.0</title>
    <link rel="shortcut icon" href="https://www.empiricus.com.br/wp-content/themes/empiricus_v2/assets/images/icons/ico-favicon.ico">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="<?php if (nimbus_get_option('home-slug')=='') {echo "home";} else {echo esc_attr(nimbus_get_option('home-slug'));} ?>">
        <div class="wrapper">
            <?php
            get_template_part( 'parts/header','menu');
            get_template_part( 'parts/header','banner');
            ?>
        </div>
    </header>