@if(is_front_page())
  @include('partials.main-footer')
@else
  @include('partials.page-footer') 
@endif
<footer class="footer">
  <div class="container">
    <nav class="menu menu--footer">
      <a href="">
        <img src="" alt="logo">
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
