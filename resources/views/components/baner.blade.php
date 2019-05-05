@php
  $section = $data;
  $title = $section['title'];
  $content = $section['content'];
  $image = $section['icon'];
@endphp

<aside class="section section--baner py-5 bg--primary font--light">  <!-- opcjonalnie bg--second + niżej opcjonalny rozkład - klasy bootstrap-a-->
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center">
      <div class="baner__text text-center text-md-right mr-0 mr-md-5">
        <p class="h2 mb-2">{{ $title }}</p>
        <p class="mb-4 mb-md-0">{{ $content }}</p>
      </div>
      <img class="baner__ico" src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
    </div>
  </div>
</aside>
