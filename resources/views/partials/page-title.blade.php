@php
  /** pobierz thumb strony */
  $image = get_the_post_thumbnail_url(get_the_ID());

  if($image == '') {
    $image = get_field('image')['url'];
  }

  if($image == '') {
    $image = get_field('default_image', 'options')['url'];
  }
@endphp


<section class="section section--single-header relative d-flex flex-row text-center align-items-center justify-content-center" 
  style="background-image: url({{ $image }});">
    <div class="overlay"></div>
    <div class="container h-100 relative">
        <h1 class="font--light">{!! App::title() !!}</h1>
    </div>
</section>