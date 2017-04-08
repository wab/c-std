{{--
  Template Name: Page avec sections
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="section">
      <div class="section-wrapper">
        @include('partials.content-page')
      </div>
    </div>
  @endwhile

  @if( have_rows('section') )

    @while ( have_rows('section') ) @php(the_row())
    @php($image = get_sub_field('image'))
    <section class="section">
      <div class="section-wrapper">
          @if(!empty($image))
            @php
              // variables
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              $caption = $image['caption'];

              // thumbnail
              $size = 'medium';
              $thumb = $image['sizes'][ $size ];
            @endphp
            <img src="{{$thumb}}" alt="{{$alt}}" class="section-thumbnail">
          @endif
          <h2 class="page-section-title">@php(the_sub_field('title'))</h2>
          <div class="page-section-contenu">
            @php(the_sub_field('content'))
          </div>
      </div>
    </section>
    @endwhile

  @endif

@endsection
