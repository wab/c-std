<footer class="mainfooter">
  <div class="widget--area">
    <div class="widget">
      <p class="widget--title"><?php bloginfo('title'); ?></p>
      <nav class="nav-footer scrollreveal">
        <ul class="no-bullet nav-footer--menu">
          <li>item</li>
        </ul>
      </nav>
    </div>

    <div class="widget">
      <p class="widget--title"><?php _e('Recent posts', 'cedar-studio'); ?></p>
      <?php
      // the query
      $lastposts = new WP_Query( array('post_type' => 'post', 'posts_per_page' => '2') ); ?>

      <?php if ( $lastposts->have_posts() ) : ?>

        <!-- pagination here -->

        <ul class="no-bullet">

        <!-- the loop -->
        <?php while ( $lastposts->have_posts() ) : $lastposts->the_post(); ?>
          <li class="scrollreveal widget--item">
            <strong class="textcolor"><?php the_date(); ?></strong>
            <p class="post--title"><?php the_title(); ?></p>
            <?= App\easy_excerpt(20); ?><br>
            <a href="<?php the_permalink(); ?>">&rarr; <?php _e('Read', 'cedar-studio'); ?></a>
          </li>
        <?php endwhile; ?>
        <!-- end of the loop -->

        <!-- pagination here -->
        </ul>

        <?php wp_reset_postdata(); ?>

      <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>

    </div>
    <div class="widget">
      <p class="widget--title"><?php _e('Recent tweets', 'cedar-studio'); ?></p>
    </div>

    <div class="widget">
      <p class="widget--title"><?php _e('Follow us', 'cedar-studio'); ?></p>
      <ul class="reseaux--list no-bullet scrollreveal">
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://twitter.com/mysketcher')"><svg class="icon-twitter"><use xlink:href="#icon-twitter"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://www.facebook.com/My-Sketcher-1548463242070456')"><svg class="icon-facebook"><use xlink:href="#icon-facebook"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://plus.google.com/118015676047486854511')"><svg class="icon-google-plus"><use xlink:href="#icon-google-plus"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://www.youtube.com/user/MrMySketcher')"><svg class="icon-youtube-play"><use xlink:href="#icon-youtube-play"></use></svg></button></li>
        <li class="reseaux--item"><button class="reseaux--link" onclick="window.open('https://fr.pinterest.com/mysketcher/')"><svg class="icon-pinterest"><use xlink:href="#icon-pinterest"></use></svg></button></li>
      </ul>
    </div>
  </div>
  <div class="ours text-center">
    <div class="row column">
      <div class="scrollreveal">
         Cedreo Interactive
      </div>
    </div>
  </div>
</footer>
