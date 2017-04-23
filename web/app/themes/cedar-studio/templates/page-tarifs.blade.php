{{--
  Template Name: Page tarifs
--}}

@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    <div class="container">

      @if( have_rows('plan') )

        @while ( have_rows('plan') ) @php(the_row())
        <section class="section-price plan">
          <h2 class="page-price-title">Nos Offres</h2>
          <div class="page-price-contenu">
            @php(the_sub_field('content'))
          </div>
        </section>
        @endwhile

      @endif
      @if( have_rows('render') )

        @while ( have_rows('render') ) @php(the_row())
        <section class="section-price render">
          <h2 class="page-price-title">Nos Rendus</h2>
          <div class="page-price-contenu">
            @php(the_sub_field('content'))
          </div>
        </section>
        @endwhile

      @endif

      @if( have_rows('packs') )

        @while ( have_rows('packs') ) @php(the_row())
        <section class="section-price packs">
          <h2 class="page-price-title">Nos Packs</h2>
          <div class="page-price-contenu">
            @php(the_sub_field('content'))
          </div>
        </section>
        @endwhile

      @endif

      @if( have_rows('subscription') )

        @while ( have_rows('subscription') ) @php(the_row())
        <section class="section-price subscription">
          <h2 class="page-price-title">Nos Abonnements</h2>
          <div class="page-price-contenu">
            @php(the_sub_field('content'))
          </div>
        </section>
        @endwhile

      @endif

    </div>

    @include('partials.content-page')
  @endwhile
@endsection
