<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <title>Vee2design Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="style.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class("home bg-gray-200"); ?>>
  <?php wp_body_open(); ?>
  <nav class="flex flex-col flex-wrap justify-between p-6 bg-gray-900 item-center">
    <!-- logo -->
    <div class="flex flex-shrink-0 mx-auto text-white">
      <a href="http://localhost/wordpress/">
        <img style="height:150px" class="mr-6" src="<?php echo get_template_directory_uri(); ?>/images/images2/veedesigns.png" height="100" alt=""></img>
      </a>
    </div>
    <!-- button -->
  <!--  <div class="flex content-center block px-2 py-2 mx-auto border border-pink-200 rounded lg:hidden">
      <a href="#" class="mt-1 mr-4 text-lg text-white">Menu</a>
      <button class="flex px-3 py-2 text-pink-200 border-pink-200 rounded item-center hover:text-white hover:border-white">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <title>Menu</title>
          <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
        </svg>
      </button>
    </div> -->

    <div class="flex-grow block w-full md:inline md:item-center md:w-auto md:mx-auto">
      <div class="text-sm lg:flex-glow flex">

        <?php wp_nav_menu(
              array(
                'menu_class' => 'flex',
                'menu' => 'header-menu',
                'link_before' => '<div class="text-center pr-3"><span class="block text-pink-400 large:mt-0 md:inline hover:text-white">',
                'link_after' => '</span></div>',
              )
          ); ?>

        <span class="block text-pink-200 hover:text-pink-400"><a href="#Socialmedia">Socials</a>

      </div>
    </div>
   </nav>
