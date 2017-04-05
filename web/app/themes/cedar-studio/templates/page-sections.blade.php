{{--
  Template Name: Page avec sections
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  @if( have_rows('section') )

    @while ( have_rows('section') ) @php(the_row())
    @php($image = get_sub_field('image'))
    <section class="page-section">
      <div class="row">
        <div class="columns medium-8 medium-centered">
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
            <img src="{{$thumb}}" alt="{{$alt}}" class="page-section-thumb">
          @endif
          <h2 class="page-section-title">@php(the_sub_field('title'))</h2>
          <div class="page-section-contenu">
            @php(the_sub_field('entry'))
          </div>
        </div>
      </div>
    </section>
    @endwhile

  @endif

@endsection
