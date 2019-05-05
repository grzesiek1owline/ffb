@php
  $logo = get_field('logo', 'options');
@endphp

<header class="header">
  <div class="container relative">
    <nav class="menu menu--header">
      <a href="{{ home_url('/') }}">
        <img height="60px" src="{{ $logo['url'] }}" alt="logo">
      </a>
      <div class="hamburger hamburger--collapse">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu__list', 'container' => 'div','container_class' => 'menu__container',]) !!}
      @endif
    </nav>
  </div>
</header>

@if(is_front_page())
  @include('partials.page-slider')
@else
  @include('partials.page-title')
@endif




