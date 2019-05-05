@php
    $oferta_title = get_field('oferta_title', 'options');
    $oferta = get_field('oferta', 'options');
@endphp

@if($oferta)
<section class="section" style="background-color: #f5f5f5">
  <div class="container">
    <div class="section__title d-block text-center">
      <h2 class="ttu bold">{{ $oferta_title }}</h2>
      <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
    </div>
    <ul class="service__list">
      @foreach ($oferta as $item)
      <li class="service__element">
        <div class="service__top">
          {!! wp_get_attachment_image($item['image']['ID'], 'medium_large', '', array( "class" => "service__image" )) !!}
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">
              {{ $item['content']['text'] }}
            </p>
          </div>
        </div>
        <div class="service__title">
          <h3>{{ $item['content']['title'] }}</h3>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</section>
@endif
