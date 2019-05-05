@php
  $opinie_title = get_field('opinie_title', 'options');
  $opinie = get_field('opinie', 'options');
@endphp

@if($opinie)
<section class="section section--opinions">
  <div class="container">
    <div class="opinion__wrapper" style="background: url('@asset('images/sec-bg.png')');">
      <h2 class="opinion__title">{{ $opinie_title }}</h2>
      <p class="opinion__quot">"</p>
      <ul class="opinion__list">
        @foreach ($opinie as $item)
        <li class="opinion__single">
          <p>
            {{ $item['text']}}<br />
          </p>
        </li>
        @endforeach
      </ul>
      <p class="opinion__quot">"</p>
      <ul class="dots relative">
      </ul>
    </div>
  </div>
</section>
@endif
