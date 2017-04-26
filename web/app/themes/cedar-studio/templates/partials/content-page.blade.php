<div class="section section-main">
  <div class="row">
    <div class="columns medium-8 {{ has_post_thumbnail() ? '' : 'medium-centered'}}">
      @php(the_content())
    </div>
    @if(has_post_thumbnail())
      <div class="columns medium-4">
        @php(the_post_thumbnail())
      </div>
    @endif
  </div>
</div>