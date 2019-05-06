@php
  $args = array(
    'numberposts' => 10,
    'post_type' => 'post'
  );

  $latest_posts = get_posts( $args );
  

@endphp
{{-- @dump($latest_posts) --}}

<section class="section section--bg pb-4">
    <div class="container">
      <div class="section__title d-block text-center">
        <h2 class="ttu bold">Aktualności</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
      @foreach ( $latest_posts as $post )
        @php setup_postdata( $post ); @endphp
          @if($loop -> first)
          <!-- BIG -->
          <div class="post__newest">
            <div class="post__thumb post__thumb--newest">
              <img
                src="{{ get_the_post_thumbnail_url($post -> ID) }}"
                alt="title">
              <div class="post__overlay"></div>
              <div class="post__date">
                <span>{{ get_the_date('M', $post -> ID) }}</span>
                <p>{{ get_the_date('j', $post -> ID) }}</p>
              </div>
            </div>
            <div class="post__excerpt post__excerpt--newest">
              <h3>{{ $post -> post_title }}</h3>
              <p>{{ the_field('zajawka', $post->ID) }}</p>
              @if($post -> post_content)
              <a href="{{ get_permalink($post -> ID) }}" class="post__perm">Czytaj dalej...</a>
              @endif
            </div>
          </div>
          <ul class="post__list">
          @else
          <li class="post__list-element">
            <div class="post__single">
              <div class="post__thumb">
                <img
                src="{{ get_the_post_thumbnail_url($post -> ID) }}"
                alt="title">
                <div class="post__overlay"></div>
                <div class="post__date">
                  <span>{{ get_the_date('M', $post -> ID) }}</span>
                  <p>{{ get_the_date('j', $post -> ID) }}</p>
                </div>
              </div>
              <div class="post__excerpt">
                <h3>{{ $post -> post_title }}</h3>
                <p>{{ the_field('zajawka', $post->ID) }}</p>
                @if($post -> post_content)
                <a href="{{ get_permalink($post -> ID) }}" class="post__perm">Czytaj dalej...</a>
                @endif
              </div>
            </div>
          </li>
          @endif
          @if($loop -> last)
          </ul>
          @endif
        @endforeach
        @php
        wp_reset_postdata();
      @endphp
    </div>
  </section>
