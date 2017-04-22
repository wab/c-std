@if (is_front_page())
  <header class="page-header text-center banner">
    <div class="wrapper">
      <h1 class="maintitle page--title">@php(bloginfo('title'))<span class="tagline">@php(bloginfo('description'))</span></h1>
      <a href="#" class="button large focus">Commander mon projet</a>
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
