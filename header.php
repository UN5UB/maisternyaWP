<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ковальська майстерня</title>
    <?php wp_head(); ?>


</head>

<body class="main__body">
    <div class="wrapper">
    <!-- Header -->
    <header>

    <div class="header fixed">
        <div class="container">
            <div class="navbar">
                <?php the_custom_logo(); ?>
                <nav class="section-main">
                    <ul class="menu">
                        <li class="menu__item"><a href="<?php echo get_page_link(8) ?>" class="menu__item-link">Головна</a></li>
                        <li class="menu__item"><a href="<?php echo get_page_link(112) ?>" class="menu__item-link">Наші роботи</a></li>
                        <li class="menu__item"><a href="<?php echo get_page_link(8) ?>" data-goto=".section-about" class="menu__item-link">Про нас</a></li>
                        <li class="menu__item"><a href="<?php echo get_page_link(8) ?>" data-goto=".section-contacts" class="menu__item-link">Контакти</a></li>
                    </ul>
                </nav>
                <button class="header__burger">
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</header>