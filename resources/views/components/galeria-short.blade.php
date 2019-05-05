@php
  $galeria = get_field('galeria', 'options');
@endphp

@if($galeria)
<section class="section section--gallery">
  <div class="gallery__wrapper">
    <div class="gallery__cell gallery__cell--1">
      <div class="gallery__element">
        <a
          href="{{ $galeria[0]['url'] }}">
          <img
            src="{{ $galeria[0]['url'] }}"
            alt="{{ $galeria[0]['alt'] }}">
        </a>
      </div>
    </div>
    <div class="gallery__cell gallery__cell--2">
      <div class="gallery__element gallery__element--small">
        <a
          href="{{ $galeria[1]['url'] }}">
          <img
            src="{{ $galeria[1]['url'] }}"
            alt="{{ $galeria[1]['alt'] }}">
        </a>
      </div>
      <div class="gallery__element gallery__element--small gallery__element--wider"><a
        href="{{ $galeria[2]['url'] }}">
        <img
          src="{{ $galeria[2]['url'] }}"
          alt="{{ $galeria[2]['alt'] }}">
      </a>
      </div>
      <div class="gallery__element gallery__element--small"><a
        href="{{ $galeria[3]['url'] }}">
        <img
          src="{{ $galeria[3]['url'] }}"
          alt="{{ $galeria[3]['alt'] }}">
      </a></div>
      <div class="gallery__element gallery__element--small"><a
        href="{{ $galeria[4]['url'] }}">
        <img
          src="{{ $galeria[4]['url'] }}"
          alt="{{ $galeria[4]['alt'] }}">
      </a></div>
      <div class="gallery__element gallery__element--small"><a
        href="{{ $galeria[5]['url'] }}">
        <img
          src="{{ $galeria[5]['url'] }}"
          alt="{{ $galeria[5]['alt'] }}">
      </a></div>
    </div>
    <div class="gallery__cell gallery__cell--1">
      <div class="gallery__element gallery__element--higher"><a
        href="{{ $galeria[6]['url'] }}">
        <img
          src="{{ $galeria[6]['url'] }}"
          alt="{{ $galeria[6]['alt'] }}">
      </a></div>
    </div>
  </div>
</section>
@endif
