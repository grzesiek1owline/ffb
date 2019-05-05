@php
  $kontakt_bloki = get_field('kontakt_bloki', 'options');
@endphp

@if($kontakt_bloki)

<aside class="section pb-5">
  <div class="container">
    <ul class="address__list">
      @foreach ( $kontakt_bloki as $item )
      <li class="address__box @if($loop->index == 1) address__box--light @endif">
        <img src="{{ $item['icon']['url'] }}" alt="{{ $item['icon']['alt'] }}" class="address__icon">
        <p class="address__title">{{ $item['title'] }}</p>
        <div class="address__desc">{!! $item['content'] !!}</div>
      </li>
      @endforeach
    </ul>
  </div>
</aside>

@endif
