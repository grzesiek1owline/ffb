@php
  $ikony = get_field('ikony', 'options');
@endphp

@if($ikony)
<aside class="section section--dark">
  <div class="container">
    <ul class="icon__list">
      @foreach ($ikony as $item)
      <li class="icon__element">
        {!! wp_get_attachment_image($item['image']['ID'], '', '', array( "class" => "icon__img" )) !!}
        <div class="icon__desc">
          <p class="icon__num">{{ $item['content']['title'] }}</p>
          <p class="icon__info">{{ $item['content']['text'] }}</p>
        </div>
      </li>
      @endforeach
    </ul>
  </div>
</aside>
@endif
