{{--
  Template Name: Galeria
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@php
  $galeria = get_field('galeria', 'options');
@endphp

<section class="section section--gallery">
    <div class="gallery__wrapper gallery__wrapper--page">

      <div class="gallery__cell gallery__cell--3">
        @foreach($galeria as $item)
        <div class="gallery__element gallery__element--small"><a
            href="{{ $item['url'] }}"><img
              src="{{ $item['url'] }}" alt="{{ $item['alt'] }}"></a>
        </div>
        @endforeach
        </div>


<!-- second end -->
    </div> <!-- .gallery__wrapper -->
  </section>
@endwhile
@endsection