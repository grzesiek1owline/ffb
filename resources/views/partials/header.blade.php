<header class="header">
  <div class="container">
    <nav class="menu menu--header">
      <a href="{{ home_url('/') }}">
        <img height="60px" src="@asset('images/body.png')" alt="logo">
      </a>
      <div class="hamburger hamburger--collapse">
        <div class="hamburger-box">
          <div class="hamburger-inner"></div>
        </div>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu__list']) !!}
      @endif
    </nav>
  </div>
</header>

@if(is_front_page())
  @include('partials.page-slider')
@else
  @include('partials.page-title')
@endif
 



