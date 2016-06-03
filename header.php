<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <!-- <title><?php is_front_page() ? bloginfo('name') : wp_title(' ‐ ', true, 'right'); ?></title> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/assets/dist/css/styles.min.css">
  <script defer src="<?php bloginfo('template_url'); ?>/assets/src/vendor/leaflet/dist/leaflet.js"></script>
  <script defer src="<?php bloginfo('template_url'); ?>/assets/dist/js/global.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <svg aria-hidden="true" style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol role="img" id="icon-logo-quai10" viewBox="0 0 2048 1024">
        <title id="title-logo-quai10">Logo Quai Numéro 10</title>
        <path role="presentation" class="path1 fill-color1" d="M283.534 371.826c-31.63 0-60.53 12.971-80.555 33.906-20.48 20.935-32.54 48.697-32.54 79.872s12.060 59.392 32.54 79.872c20.025 20.48 48.924 33.906 80.555 33.906 30.265 0 59.164-13.198 78.734-33.906 20.48-20.48 33.223-48.697 33.223-79.872s-12.743-59.164-33.223-79.872c-19.342-20.935-48.469-33.906-78.734-33.906zM330.638 535.438c-12.516 12.971-29.127 20.708-47.104 20.708-19.115 0-35.726-7.737-48.242-20.708-12.516-12.288-20.252-30.265-20.252-49.835s7.737-37.547 20.252-50.062c12.516-12.971 29.127-20.252 48.242-20.252 17.977 0 34.588 7.509 47.104 20.252 12.288 12.516 20.252 30.72 20.252 50.062 0 19.57-7.964 37.547-20.252 49.835zM292.636 625.778l-1.365-1.365c-3.641-3.641-8.192-5.461-12.971-5.461h-0.455c-4.779 0-9.557 1.82-12.971 5.461-0.683 0.683-1.365 1.365-1.82 2.276l-13.653 13.653c-3.641 3.641-5.689 8.42-5.689 13.198s2.048 9.33 5.461 12.971c3.413 3.413 8.192 5.461 12.971 5.461s9.557-2.048 13.198-5.689l2.731-2.731 29.355 29.355c3.641 3.641 8.42 5.689 13.198 5.689s9.33-2.048 12.971-5.461c7.509-7.509 7.282-18.66-0.228-26.169l-40.732-41.188zM622.364 373.191c-13.426 0-23.893 10.695-23.893 24.121v103.31c0 34.816-18.432 52.565-47.787 52.565s-47.787-18.432-47.787-54.158v-101.717c0-13.426-9.33-24.121-22.756-24.121s-22.756 10.695-22.756 24.121v102.855c0 64.398 35.044 97.394 93.753 97.394 58.937 0 95.118-32.54 95.118-98.987v-101.49c0-13.198-10.468-23.893-23.893-23.893zM846.962 390.485c-5.234-11.833-14.791-19.57-27.762-19.57h-2.731c-13.198 0-22.756 7.509-28.217 19.57l-76.459 172.715c-1.593 3.413-2.731 7.054-2.731 10.468 0 12.516 9.785 22.528 22.3 22.528 10.012 0 18.204-6.144 22.3-15.474l15.246-36.636h96.484l14.791 35.044c4.324 10.012 11.833 16.839 23.211 16.839 12.743 0 22.756-10.24 22.756-22.983 0-3.186-0.91-6.372-2.503-9.785l-76.686-172.715zM786.432 500.622l30.265-72.363 30.265 72.363h-60.53zM1018.311 373.191c-13.426 0-23.893 10.695-23.893 24.121v174.535c0 13.426 10.468 24.121 23.893 24.121s23.893-10.695 23.893-24.121v-174.535c0-13.426-10.468-24.121-23.893-24.121zM1723.506 444.644c-16.156 0-28.217 16.839-28.217 40.96v0.455c0 24.348 12.288 41.415 28.672 41.415s28.217-16.384 28.217-40.96v-0.455c0-24.121-12.516-41.415-28.672-41.415zM1877.333 352.028c0-14.564-11.833-26.624-26.624-26.624h-670.379c-14.564 0-26.624 11.833-26.624 26.624v272.384c0 14.564 11.833 26.624 26.624 26.624h670.606c14.564 0 26.624-11.833 26.624-26.624v-272.384zM1383.538 543.858c0 10.695-6.144 20.48-16.839 20.48h-1.138c-9.557 0-15.474-5.689-19.797-11.15l-60.075-78.734v70.087c0 10.468-8.875 18.887-19.342 18.887s-19.342-8.42-19.342-18.887v-116.736c0-10.695 10.923-20.48 21.618-20.48h3.413c9.557 0 14.336 5.916 18.66 11.378l56.661 75.776v-67.129c0-10.468 7.737-18.887 18.204-18.887s18.204 8.42 18.204 18.887v116.508zM1495.040 559.787h-42.098c-8.192 0-14.564-6.599-14.564-14.791 0-7.964 6.599-14.791 14.564-14.791h42.098c8.42 0 14.791 6.599 14.791 14.791s-6.372 14.791-14.791 14.791zM1515.52 456.932c0 23.211-19.342 41.415-43.236 41.415-24.121 0-43.236-17.749-43.236-41.188v-0.228c0-23.211 19.342-41.415 43.236-41.415 24.348 0 43.236 17.749 43.236 41.415zM1620.196 541.355c0 9.785-8.42 17.977-18.204 17.977s-18.204-7.964-18.204-17.977v-92.388l-6.827 1.82c-0.91 0.228-3.413 0.91-5.916 0.91-8.647 0-16.156-7.282-16.156-15.929 0-7.509 4.779-13.653 12.288-15.929l19.57-5.689c6.144-1.82 10.695-2.503 15.019-2.503h0.455c9.785 0 17.749 7.737 17.749 17.749v111.957zM1788.587 485.831c0 43.236-26.396 74.638-63.943 74.638-18.432 0-35.954-7.737-47.559-21.618-11.378-13.426-18.204-32.085-18.204-52.565v-0.455c0-43.236 27.534-74.638 65.081-74.638 37.319 0 64.626 31.175 64.626 74.183v0.455zM1472.284 442.596c-7.737 0-13.653 6.144-13.653 14.336v0.228c0 8.192 5.916 14.564 13.653 14.564s13.653-6.144 13.653-14.336v-0.228c0-8.42-5.916-14.564-13.653-14.564z"></path>
      </symbol>
      <symbol role="img" id="icon-icone-quai10" viewBox="0 0 708 1024">
        <title id="title-icone-quai10">icone-quai10</title>
        <path role="presentation" class="path1 fill-color1" d="M354.157 0c-99.049 0-189.55 40.619-252.258 106.177-64.133 65.558-101.899 152.495-101.899 250.119s37.766 185.986 101.899 250.119c62.708 64.133 153.205 106.177 252.258 106.177 94.775 0 185.272-41.33 246.555-106.177 64.133-64.133 104.038-152.495 104.038-250.119s-39.905-185.272-104.038-250.119c-60.569-65.558-151.781-106.177-246.555-106.177v0zM501.663 512.351c-39.194 40.619-91.211 64.847-147.506 64.847-59.859 0-111.876-24.228-151.070-64.847-39.194-38.48-63.419-94.775-63.419-156.058s24.228-117.578 63.419-156.769c39.194-40.619 91.211-63.419 151.070-63.419 56.295 0 108.312 23.514 147.506 63.419 38.48 39.194 63.419 96.2 63.419 156.769 0 61.283-24.939 117.578-63.419 156.058z"></path>
        <path role="presentation" class="path2 fill-color1" d="M382.66 795.25l-4.274-4.274c-11.402-11.402-25.653-17.101-40.619-17.101h-1.425c-14.965 0-29.928 5.699-40.619 17.101-2.139 2.139-4.274 4.274-5.699 7.127l-42.754 42.754c-11.402 11.402-17.815 26.367-17.815 41.33s6.413 29.217 17.101 40.619c10.688 10.688 25.653 17.101 40.619 17.101s29.928-6.413 41.33-17.815l8.552-8.552 91.925 91.925c11.402 11.402 26.367 17.815 41.33 17.815s29.217-6.413 40.619-17.101c23.514-23.514 22.804-58.434-0.714-81.948l-127.555-128.98z"></path>
      </symbol>
      <symbol role="img" id="icon-logo-quai10-vert" viewBox="0 0 1000 1000">
        <title id="title-logo-quai10-vert">Logo Quai Numéro 10</title>
        <g>
          <path role="presentation" class="fill-color1" d="M331.8,258.5c-15.2,0-29.2,6.2-38.9,16.3c-9.8,10.1-15.7,23.5-15.7,38.6c0,15.1,5.9,28.7,15.7,38.6 c9.7,9.9,23.6,16.3,38.9,16.3c14.6,0,28.6-6.4,37.9-16.3c9.8-9.9,16-23.5,16-38.6c0-15.1-6.2-28.5-16-38.6 C360.4,264.7,346.4,258.5,331.8,258.5z M353.7,336.5c-5.8,6-13.6,9.6-21.9,9.6c-8.9,0-16.6-3.6-22.4-9.6 c-5.8-5.7-9.4-14.1-9.4-23.2c0-9,3.6-17.4,9.4-23.3c5.8-6,13.6-9.4,22.4-9.4c8.3,0,16.1,3.5,21.9,9.4c5.7,5.9,9.4,14.2,9.4,23.3 C363.1,322.4,359.3,330.8,353.7,336.5z"/>
          <path role="presentation" class="fill-color1" d="M336.6,380.5c-0.2-0.2-0.8-0.8-1.1-1.1c-1.7-1.7-3.9-3.4-6.3-3.4c0,0,0,0-0.1,0c0,0,0,0-0.1,0 c-2.4,0-4.6,1.7-6.3,3.4c-0.3,0.3-0.6,0.7-0.9,1l-6.6,6.8c-3.7,3.7-3.7,9.5-0.1,13.1c1.7,1.7,3.9,2.7,6.2,2.7 c2.4,0,4.6-0.9,6.4-2.7l1.4-1.3l14.1,14.1c1.8,1.8,4.1,2.8,6.4,2.8c2.3,0,4.5-0.9,6.2-2.7c3.6-3.6,3.9-9.4,0.3-13L336.6,380.5z"/>
          <path role="presentation" class="fill-color1" d="M496,259.1c-6.5,0-11,5.1-11,11.6v49.8c0,16.8-8.3,25.4-22.5,25.4S440,337,440,319.8v-49 c0-6.5-5.5-11.6-12-11.6s-12,5.1-12,11.6v49.6c0,31.1,16.8,46.9,45.2,46.9c28.4,0,45.8-15.7,45.8-47.7v-48.9 C507,264.2,502.5,259.1,496,259.1z"/>
          <path role="presentation" class="fill-color1" d="M603.5,267.9c-2.6-5.7-7.1-8.9-13.4-8.9h-1.4c-6.3,0-11,3.1-13.6,8.9l-36.8,83c-0.8,1.7-1.4,3.2-1.4,4.9 c0,6,4.7,10.8,10.7,10.8c4.8,0,8.8-2.7,10.7-7.2l7.4-17.3h46.5l7.1,16.6c2.1,4.8,5.7,8,11.2,8c6.2,0,11-5,11-11.2 c0-1.5-0.5-2.9-1.2-4.5L603.5,267.9z M574.3,322l14.6-34.9l14.6,34.9H574.3z"/>
          <path role="presentation" class="fill-color1" d="M687,259.1c-6.5,0-12,5.1-12,11.6v84.2c0,6.5,5.5,11.6,12,11.6c6.5,0,12-5.1,12-11.6v-84.2 C699,264.2,693.5,259.1,687,259.1z"/>
        </g>
        <g>
          <path role="presentation" class="fill-color1" d="M204,448.4c-6.3,0-12,5.1-12,11.5v54.5l-44.3-59.2c-3.2-4.1-6-7.2-11.6-7.2h-2.4c-6.5,0-11.7,5.9-11.7,12.4 v84.1c0,6.3,4.7,11.5,11,11.5s11-5.1,11-11.5v-56.6l47,60.7c3.2,4.1,7,6.5,12.6,6.5h0.8c6.5,0,11.7-4.6,11.7-11v-84.1 C216,453.6,210.3,448.4,204,448.4z"/>
          <path role="presentation" class="fill-color1" d="M334,448.4c-6.5,0-12,5.1-12,11.6v49.8c0,16.8-7.3,25.4-21.5,25.4c-14.2,0-21.5-8.9-21.5-26.1v-49 c0-6.5-5.5-11.6-12-11.6c-6.5,0-12,5.1-12,11.6v49.6c0,31.1,16.8,46.9,45.2,46.9c28.4,0,45.8-15.7,45.8-47.7v-48.9 C346,453.6,340.5,448.4,334,448.4z"/>
          <path role="presentation" class="fill-color1" d="M479.5,448H477c-4.7,0-8,2.3-10.4,6.3l-28.2,46.1l-28.1-46c-2.1-3.5-5.6-6.3-10.6-6.3h-2.6 c-6.5,0-11.2,5.9-11.2,12.4v84.2c0,6.3,4.1,11.3,10.4,11.3c6.3,0,10.6-5,10.6-11.3V492l20.7,30.9c2.4,3.6,5.8,5.9,10,5.9 c4.2,0,7.4-2.3,9.8-5.9l20.5-31.4v52.7c0,6.3,5.6,11.6,11.9,11.6c6.5,0,12.1-5.1,12.1-11.6v-83.9C492,453.9,486,448,479.5,448z"/>
          <path role="presentation" class="fill-color1" d="M571.1,441.9c5.1,0,8.8-0.9,13.1-5l9.4-8.8c1.8-1.7,3-3.3,3-5.4c0-3.5-7.2-6.9-12.8-6.9 c-3.8,0-6.6,2-8.6,5.1l-8.3,13c-0.8,1.2-1.5,2.7-1.5,4.1C565.4,440.4,567.8,441.9,571.1,441.9z"/>
          <path role="presentation" class="fill-color1" d="M602.5,535H556v-22h39c5.7,0,10.4-4.7,10.4-10.4c0-5.7-4.7-10.6-10.4-10.6h-39v-22h45.8 c5.7,0,10.4-4.2,10.4-9.9c0-5.7-4.7-10.1-10.4-10.1h-58.6c-6.5,0-12.2,4.5-12.2,11v82.4c0,6.5,5.7,11.6,12.2,11.6h59.3 c5.7,0,10.4-4.2,10.4-9.9C612.9,539.3,608.3,535,602.5,535z"/>
          <path role="presentation" class="fill-color1" d="M696.1,450h-36.7c-6.5,0-10.4,4.5-10.4,11v83.3c0,6.5,4.5,11.6,11,11.6s11-5.1,11-11.6V522h18.6l22.6,28.3 c2.7,3.5,6.2,5.8,11.5,5.8c5.6,0,11-4.3,11-10.8c0-3.6-1.5-6.1-3.8-9l-16.1-19.6c12.8-5.3,21.2-15.6,21.2-32.2v-0.3 c0-10-3.2-17.9-9.1-23.8C720,453.4,709.5,450,696.1,450z M712,485.7c0,8.9-6.1,14.3-17.4,14.3H671v-28h23.1 c11.3,0,17.9,3.4,17.9,13.4V485.7z"/>
          <path role="presentation" class="fill-color1" d="M823.7,447.5c-32.6,0-56.7,24.6-56.7,54.6v0.3c0,30,23.8,54.3,56.3,54.3c32.6,0,56.7-24.6,56.7-54.6v-0.3 C880,471.8,856.2,447.5,823.7,447.5z M856,502.5c0,18.1-14.1,32.9-32.8,32.9S790,520.3,790,502.2v-0.3c0-18.1,14.1-32.9,32.8-32.9 c18.7,0,33.2,15.1,33.2,33.2V502.5z"/>
        </g>
        <g>
          <path role="presentation" class="fill-color1" d="M387.5,635h-29.6c-6.5,0-11.9,4.8-11.9,11.3v82.4c0,6.5,5.4,11.3,11.9,11.3h29.6 c33.2,0,56.5-22.7,56.5-52.5v-0.3C444,657.5,420.7,635,387.5,635z M420,687.8c0,18.7-13.5,33.2-32.5,33.2H370v-64h17.5 c19,0,32.5,11.8,32.5,30.5V687.8z"/>
          <path role="presentation" class="fill-color1" d="M493,633.8c-6.5,0-12,5.1-12,11.6v84.2c0,6.5,5.5,11.6,12,11.6s12-5.1,12-11.6v-84.2 C505,638.9,499.5,633.8,493,633.8z"/>
          <path role="presentation" class="fill-color1" d="M629.2,721.2l-28.4-34.9l26.9-32.9c2.3-2.9,3.5-5.6,3.5-8.9c0-6.6-5.4-10.7-10.6-10.7 c-5.1,0-8.1,2.3-11.3,6.3l-22.9,30.2l-23.1-30.8c-2.9-3.8-5.7-5.7-10.7-5.7c-6.6,0-11.5,5-11.5,11.5c0,3.3,1.7,6.3,3.5,8.6 l26.9,32.7l-28.5,35c-2.3,2.9-3.5,5.6-3.5,8.9c0,6.6,5.4,10.7,10.6,10.7c5.1,0,8.1-2.3,11.3-6.3l24.4-31.8l24.7,32.4 c2.9,3.8,5.7,5.7,10.7,5.7c6.6,0,11.5-5,11.5-11.5C632.7,726.5,631,723.4,629.2,721.2z"/>
        </g>
      </symbol>
      <symbol id="icon-arrow" viewBox="0 0 1024 1024">
      	<title id="title-icon-arrow">Flèche vers la droite</title>
      	<path role="presentation" class="path1 fill-colo1" d="M621.254 877.254l320-320c24.994-24.992 24.994-65.516 0-90.51l-320-320c-24.994-24.992-65.516-24.992-90.51 0-24.994 24.994-24.994 65.516 0 90.51l210.746 210.746h-613.49c-35.346 0-64 28.654-64 64s28.654 64 64 64h613.49l-210.746 210.746c-12.496 12.496-18.744 28.876-18.744 45.254s6.248 32.758 18.744 45.254c24.994 24.994 65.516 24.994 90.51 0z"></path>
      </symbol>
    </defs>
  </svg><!-- /svg -->
  <header class="header-box container" id="top">
    <nav class="nav-box grid-1-4">
      <div class="nav-logo">
        <a href="<?php echo home_url(); ?>">
          <svg role="img" aria-labelledby="title-logo-quai10">
            <use xlink:href="#icon-logo-quai10"></use>
          </svg>
        </a>
      </div><!-- .nav-logo -->
        <?php
        $args = array(
          'theme_location' => 'primary_navigation',
          'container' => false,
          'menu_class' => 'nav-list',
          'menu_id' => 'navigation'
        );
        wp_nav_menu($args);
        ?>
      <div class="nav-burger push">
        <div id="menu-opener" class="menu-opener">
          <span></span>
        </div>
      </div>
    </nav><!-- .nav-box -->
    <div class="header-container grid-1-4">
      <div class="header-icon">
        <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
      </div><!-- .header-icon -->
      <h1 class="header-title"><?php the_title(); ?></h1>
    </div><!-- .header-container -->
  </header><!-- .header-box -->
