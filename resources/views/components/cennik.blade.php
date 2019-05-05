@php
  $cennik_title = get_field('cennik_tytul', 'options');
  $cennik_link = get_field('cennik_link', 'options');
  $cennik = get_field('cennik', 'options');
@endphp

@if($cennik)
<section class="section section--main-prices">
  <div class="container">
      <div class="section__title d-block text-center">
          <h2 class="ttu bold">{{ $cennik_title }}</h2>
          <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
        </div>
    <ul class="price__list">
      @foreach ($cennik as $item)
        <li class="price__element @if($loop -> index == 1 )price__element--active @endif">
          <h3 class="price__title">{{ $item['title'] }}</h3>
          <img src="{{ $item['icon']['url'] }}" alt="{{ $item['icon']['alt'] }}">
          <div class="price">{{ $item['cena']['form'] }}<span>{{ $item['cena']['time'] }}</span></div>
          @if($item['items'])
          <ul class="package__list">
            <li class="package__element">
            @foreach ( $item['items'] as $item)
              <p>{{ $item['item'] }}</p>
            @endforeach
            </li>
          </ul>
          @endif
        </li>
      @endforeach
    </ul>
    @if($cennik_link)
    <div class="text-center bold mt-5 pt-3">
      <a href="{{ $cennik_link['url']  }}" class="post__perm">{{ $cennik_link['title'] }}</a>
    </div>
    @endif
  </div>
</section>
@endif
