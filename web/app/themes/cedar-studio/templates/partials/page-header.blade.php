<?php if (is_front_page()): ?>
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="maintitle page--title">@php(bloginfo('title'))<span class="tagline">@php(bloginfo('description'))</span></h1>
      <a href="#" class="button large focus">Commander mon projet</a>
    </div>
  </header>

<?php elseif (is_single() ): ?>
   <div class="page-header text-center banner">
    <div class="wrapper">
      <p class="page--title">Blog</p>
    </div>
  </div>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display')):?>
    <div class="row column">
      <?php bcn_display(); ?>
    </div>
    <?php endif; ?>
  </div>
<?php else:  ?>
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="page--title"><?= App\title(); ?></h1>
    </div>
  </header>
  <?php if (!is_page_template('templates/page-iframe.php')): ?>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <?php if(function_exists('bcn_display')):?>
      <div class="row column">
        <?php bcn_display(); ?>
      </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>
<?php endif; ?>