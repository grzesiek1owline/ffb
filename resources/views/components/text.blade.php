@php
  $section = $data;
  $title = $section['title'];
  $content = $section['content'];
  $link = $section['link'];
  $image = $section['image'];
@endphp
<section class="section section--vertical pb-0">
    <div class="container pb-5">
      <div class="row align-items-stretch">
        <div class="col-12 col-md-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1 ">
          <div class="section__title d-block text-center">
                <h2 class="ttu bold">{{ $title }}</h2>
                <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
          </div>
          <div class="vertical__desc text-center">
            <div class="mb-4 pb-3">
              {!! $content !!}
            </div>
            @if($link)
              <a href="{{ $link['url'] }}" class="post__perm">{{ $link['title'] }}</a>
            @endif
          </div>
        </div>
      </div>
    </div>
    @if($image)
    <aside class="bg__fixed mt-5" style="background-image: url('{{ $image['url'] }}');">

    </aside>
    @endif

  </section>
