@if (is_front_page())
  <header class="page-header text-center banner" style="background-image: url({{get_field( "banner_image", 8 )}})">
    <div class="wrapper">
      <h1 class="maintitle page--title">{{get_field( "banner_title", 8 )}}<span class="tagline">{{get_field( "banner_tagline", 8 )}}</span></h1>
      <a href="{{get_field( "banner_url", 8 )}}" class="button large focus">Commander mon projet</a>
    </div>
  </header>
@elseif (is_single() )
   <div class="page-header text-center banner">
    <div class="wrapper">
      <p class="page--title">Blog</p>
    </div>
  </div>
@else
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="page--title"><?= App\title(); ?></h1>
    </div>
  </header>
@endif

@include('partials.breadcrumb')
