@if(is_front_page())
  @include('partials.main-footer')
@else
  @include('partials.page-footer') 
@endif

<aside class="partners pb-5">
  <div class="container">
    <div class="row flex-column align-items-center justify-content-center">
        <div class="partners__text py-3 mb-3 text-center">
            <p class="mb-0"><b>Honorujemy karty:</b></p>
            <small>MultiSport, MultiSport Senior i Kids, Fitprofit, Ok System</small>
        </div>
        <img height="100px" src="@asset('images/karty-sportowe2.png')" alt="karty sportowe - multisport, fit profit, oksystem">
    </div>
  </div>
</aside>

<footer class="footer">
  <div class="container">
    <nav class="menu menu--footer">
      <a href="">
        <img height="60px" src="@asset('images/body.png')" alt="logo">
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
