<?php get_header(); ?>
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
        unset($args);
      ?>
    </nav><!-- .nav-box -->
    <div class="header-container grid-1-4">
      <div class="header-icon">
        <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
      </div><!-- .header-icon -->
      <h1 class="header-title"><?php the_title(); ?></h1>
    </div><!-- .header-container -->
  </header><!-- .header-box -->
  <div class="content-box container margin-large grid-2 no-padding-left">
    <?php
      $bloc_association = get_field('description_association')[0];
      $cta = array(
        'href' => get_field('cta_social_href'),
        'label' => get_field('cta_social_label')
      );
      $args = array(
        'post_type' => 'page',
        'page_id' => $bloc_association->ID
      );
      $loop = new WP_Query($args);
      if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
    ?>
    <section class="asso-box border-left">
      <h2 class="asso-title"><?php the_title(); ?></h2>
      <svg role="img" aria-labelledby="title-icone-quai10"><use xlink:href="#icon-icone-quai10"></use></svg>
      <?php the_content(); ?>
      <a href="<?php echo $cta['href']; ?>>" class="btn"><?php echo $cta['label']; ?></a>
    </section>
    <?php
    endwhile; endif; unset($loop, $args); wp_reset_postdata();
    $bloc_coworkers = get_field('emplacement_des_voyageurs');
    ?>
    <section class="coworkers-box">
      <h2 class="coworkers-title"><?php echo $bloc_coworkers->name; ?></h2>
      <?php
        $args = array(
          'category_name' => $bloc_coworkers->slug,
          'orderby' => 'rand'
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) :
      ?>
      <ul class="coworkers-list grid-3">
        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        <li class="coworkers-element">
          <div class="coworkers-element-image">
            <?php $url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()))[0]; ?>
            <img src="<?php echo $url; ?>" alt="Photo de <?php the_title(); ?>" title="Photo de <?php the_title(); ?>">
          </div><!-- .coworkers-element-image -->
          <h3 class="h5-like coworkers-element-name"><?php the_title(); ?></h3>
          <p class="coworkers-element-work"><?php echo get_field('metier'); ?></p>
        </li><!-- .coworkers-element -->
        <?php unset($url); endwhile; ?>
      </ul><!-- .coworkers-list -->
      <?php else : ?>
        <p>Aucun voyageur n'a pris place dans le train actuellement.</p>
      <?php endif; unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .coworkers-box -->
  </div><!-- .content-box -->
  <div class="content-box container margin-large grid no-padding-left no-padding">
    <section class="espace-box">
      <?php
        $contenu_espace = get_field('contenu_espace');
        $args = array(
          'post_type' => 'page',
          'page_id' => $contenu_espace[0]->ID
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : $loop->the_post();
        $title = str_replace('Quai Numéro Dix', '<svg role="img" aria-labelledby="title-logo-quai10-vert"><use xlink:href="#icon-logo-quai10-vert"></use></svg>', get_the_title());
      ?>
      <h2 class="espace-title"><?php echo $title; ?></h2>
      <div class="espace-list">
        <?php the_content(); ?>
      </div><!-- .espace-list -->
    <?php endif; unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .espace-box -->
  </div><!-- .content-box -->
  <div class="content-box container margin-large grid-3-2 no-padding-left">
    <section class="entrepot-box border-left">
      <?php
        $photos = get_field('photographies');
        $args = array(
          'post_type' => 'post',
          'category_name' => 'chantier'
        );
        $loop = new WP_Query($args);
      ?>
      <h2 class="entrepot-title"><?php echo $photos->name; ?></h2>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php while ($loop->have_posts()) : $loop->the_post(); $photo = get_field('photographie'); ?>
          <div class="swiper-slide">
            <div class="slide-photographie" style="background-image: url(<?php echo $photo['url']; ?>);"></div>
            <strong class="slide-title"><?php the_title(); ?></strong>
          </div><!-- .swiper-slide -->
          <?php endwhile; ?>
        </div><!-- .swiper-wrapper -->
        <div class="swiper-pagination">
          <a class="swiper-prev-btn" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/arrow-white.png" alt="Flèche précédente" title="Slide précédente">
          </a><!-- .swiper-prev-btn -->
          <a class="swiper-next-btn" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/arrow-white.png" alt="Flèche suivante" title="Slide suivante">
          </a><!-- .swiper-next-btn -->
        </div><!-- .swiper-pagination -->
        <ul class="social-icons" role="presentation">
          <li class="social-icon">
            <a class="no-style" href="https://flickr.com/" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/icon-flickr.png" alt="" title="">
              Flickr
            </a>
          </li><!-- .social-icon -->
          <li class="social-icon">
            <a class="no-style" href="https://instagram.com/" target="_blank">
              <img src="<?php bloginfo('template_directory'); ?>/assets/dist/img/icon-instagram.png" alt="" title="">
              Instagram
            </a>
          </li><!-- .social-icon -->
        </ul><!-- .social-icons -->
      </div><!-- .swiper-container -->
      <?php unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .entrepot-box -->
    <section class="projet-box">
      <?php
        $projet = get_field('projet');
        $projet_btn = get_field('link_coworking');
        $projet_btn_label = get_field('link_coworking_label');
        $args = array(
          'post_type' => 'page',
          'page_id' => $projet->ID
        );
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : $loop->the_post();
      ?>
      <h2 class="projet-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
      <a class="btn" href="<?php echo $projet_btn; ?>"><?php echo $projet_btn_label; ?></a>
      <?php endif; unset($loop, $args); wp_reset_postdata(); ?>
    </section><!-- .projet-box -->
  </div><!-- .content-box -->
  <?php
    $contact = get_field('section_contact');
    $args = array(
      'post_type' => 'page',
      'page_id' => $contact->ID
    );
    $loop = new WP_Query($args);
    $loop->the_post();
  ?>
  <section class="cta-box content-box container margin-large contrast-box grid-2-1 no-padding-left" style="background-image: url(<?php echo get_field('cta_background')['url']; ?>);">
    <div class="cta-content border-left">
      <h2 class="cta-title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div><!-- .cta-content -->
    <aside class="cta-aside">
      <p class="cta-aside-content"><?php echo get_field('cta_contenu'); ?></p>
      <a class="btn cta-aside-btn" href="<?php echo get_field('cta_destination')->guid; ?>"><?php echo get_field('cta_titre'); ?></a>
    </aside><!-- .cta-aside -->
  </section><!-- .cta-box -->
  <?php unset($loop, $args); wp_reset_postdata(); ?>
<?php get_footer(); ?>
