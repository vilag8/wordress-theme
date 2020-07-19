<!doctype html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description');?>">

    <?php wp_head();?>
  </head>

<body <?php body_class();?>>
  <main>
    <header>
      <div class="col-sm-3 sinistra">
        <a href="<?php echo home_url(); ?>"><h2><?php bloginfo('name'); ?></h2></a>
        <p><?php bloginfo('description');?></p>
      </div>

        <?php /* Main Navigation */
          wp_nav_menu( array(
            'theme_location' => 'header',
            'depth' => 2,
            'container' => false,
            'menu_class' => 'header__menu'
            )
          );
        ?>
        <Hr>
    </header>
