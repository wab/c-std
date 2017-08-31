@if (is_front_page())
  <header class="page-header text-center banner" style="background-image: url({{get_field( "banner_image")}})">
    <div class="wrapper">
      <h1 class="maintitle page--title">{{get_field( "banner_title")}}<span class="tagline">{{get_field( "banner_tagline")}}</span></h1>
      <a href="{{get_field( "banner_url")}}" class="button large focus"><?php _e('Order my project', 'cedar-studio');?></a>
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
