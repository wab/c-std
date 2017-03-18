@extends('layouts.base')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="section">
      <div class="row">
        <div class="columns large-8 large-centered">
          @include('partials.content-page')
        </div>
      </div>
    </div>

    @include('partials.section')
  @endwhile
@endsection
