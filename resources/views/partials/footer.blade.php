@php
  $logo = get_field('logo', 'options');
@endphp

@if(is_front_page())
  @include('partials.main-footer')
@else
  @include('partials.page-footer')
@endif


@php
  $cards_title = get_field('cards_title', 'options');
  $cards_content = get_field('cards_content', 'options');
  $cards_image = get_field('cards_image', 'options');
  $cards_link = get_field('cards_link', 'options');
@endphp

@if($cards_image)

<aside class="partners pb-5 mb-3">
  <div class="container">
    <div class="row flex-column align-items-center justify-content-center">
        <div class="partners__text py-3 mb-3 text-center">
            <p class="mb-0"><b>{{ $cards_title }}</b></p>
            <small>{{ $cards_content }}</small>
        </div>
        <img height="100px" src="{{ $cards_image['url'] }}" alt="{{ $cards_image['alt'] }}">
        <a class="primary-c" href="{{ $cards_link['url'] }}"><small>{{ $cards_link['title'] }}</small></a>
    </div>
  </div>
</aside>

@endif

<footer class="footer">
  <div class="container">
    <nav class="menu menu--footer">
      <a href="">
        <img height="60px" src="{{ $logo['url'] }}" alt="logo">
      </a>
      @if (has_nav_menu('footer-menu'))
      {!! wp_nav_menu(['theme_location' => 'footer-menu', 'menu_class' => 'menu__list menu__list--dark']) !!}
      @endif
    </nav>
  </div>
  <div class="footer__bottom">
    <p>Copyright @ 2019 domena.com</p>
  </div>
</footer>
