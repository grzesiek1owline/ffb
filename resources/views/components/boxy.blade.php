@php
  $section = $data['boxy'];
@endphp

<aside class="container pt-4 pb-5">
    <ul class="info-box__list">
      @foreach ($section as $item)
      <li class="info-box__element @if($loop -> index % 2 == 1 ) info-box__element--light @endif">
        <img src="{{ $item['boxy_image']['url'] }}" alt="{{ $item['boxy_image']['alt'] }}" class="info-box__icon">
        <p class="info-box__title">{{ $item['content']['title'] }}</p>
        <p class="info-box__desc">
          {{ $item['content']['text'] }}
        </p>
      </li>
      @endforeach
    </ul>
  </aside>
