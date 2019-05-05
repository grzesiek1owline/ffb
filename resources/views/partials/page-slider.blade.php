@php
  $slider = get_field('slider');
@endphp

@if($slider)
<section class="section section--gallery relative py-0">
  <ul class="slider">
    @foreach ($slider as $item)
    <li class="slider__element" style="background-image: url({{ $item['image']['url'] }});">
      <div class="slider__overlay"></div>
      <div class="container h-100 text-center relative">
        <div class="row h-100 flex-column justify-content-center align-items-center slider__text">
          <p class="h3 ff2">{{ $item['content']['title'] }}</p>
          @if($loop->first)
          <h1>{{ $item['content']['title_middle'] }}</h1>
          @else
          <p class="h1 ttu">{{ $item['content']['title_middle'] }}</p>
          @endif
          <p>{{ $item['content']['title_botom'] }}</p>
          @if($item['content']['link'])
          <div class="pt-4 d-block">
            <a href="{{ $item['content']['link']['url'] }}" class="post__perm post__perm--transparent">{{ $item['content']['link']['title'] }}</a>
          </div>
          @endif
        </div>
      </div>
    </li>
    @endforeach
  </ul>
  <div class="slider__navigation">
    <button class="slider__arrow slider__arrow--prev arrow__new"></button>
    <button class="slider__arrow slider__arrow--next arrow__new"></button>
  </div>
</section>
@endif
