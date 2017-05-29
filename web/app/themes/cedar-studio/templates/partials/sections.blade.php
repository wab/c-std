@if( have_rows('section') )

  @while ( have_rows('section') ) @php(the_row())
  @php($image = get_sub_field('image'))
  <section class="section">
    <h2 class="section-title"><span>@php(the_sub_field('title'))</span></h2>
    <div class="section-wrapper">
        @if(!empty($image))
          <div class="section-thumbnail">
            @php
              // variables
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              $caption = $image['caption'];

              // thumbnail
              $size = 'large';
              $thumb = $image['sizes'][ $size ];
            @endphp
            <img src="{{$thumb}}" alt="{{$alt}}">
          </div>
        @endif
        <div class="section-contenu">

          @php(the_sub_field('content'))
        </div>
    </div>
  </section>
  @endwhile

@endif