{{--
  Template Name: Galeria
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<section class="section section--gallery">
    <div class="gallery__wrapper gallery__wrapper--page">

      <div class="gallery__cell gallery__cell--3">
        <div class="gallery__element gallery__element--small"><a
            href="@asset('images/unsplash-4.jpg')"><img
              src="@asset('images/unsplash-4.jpg')" alt=""></a></div>
        <div class="gallery__element gallery__element--small"><a
            href="@asset('images/unsplash-12.jpg')"><img
              src="@asset('images/unsplash-12.jpg')" alt=""></a>
        </div>
        <div class="gallery__element gallery__element--small"><a
            href="@asset('images/unsplash-15.jpg')"><img
              src="@asset('images/unsplash-15.jpg')" alt=""></a></div>
        <div class="gallery__element gallery__element--small"><a
            href="@asset('images/unsplash-23.jpg')"><img
              src="@asset('images/unsplash-23.jpg')"
              alt=""></a></div>
        <div class="gallery__element gallery__element--small"><a
            href="@asset('images/unsplash-16.jpg')"><img
              src="@asset('images/unsplash-16.jpg')"
              alt=""></a></div>
<!-- second -->
          <div class="gallery__element gallery__element--small"><a
              href="@asset('images/unsplash-4.jpg')"><img
                src="@asset('images/unsplash-4.jpg')" alt=""></a></div>
          <div class="gallery__element gallery__element--small"><a
              href="@asset('images/unsplash-12.jpg')"><img
                src="@asset('images/unsplash-12.jpg')" alt=""></a>
          </div>
          <div class="gallery__element gallery__element--small"><a
              href="@asset('images/unsplash-15.jpg')"><img
                src="@asset('images/unsplash-15.jpg')" alt=""></a></div>
          <div class="gallery__element gallery__element--small"><a
              href="@asset('images/unsplash-23.jpg')"><img
                src="@asset('images/unsplash-23.jpg')"
                alt=""></a></div>
          <div class="gallery__element gallery__element--small"><a
              href="@asset('images/unsplash-16.jpg')"><img
                src="@asset('images/unsplash-16.jpg')"
                alt=""></a></div>
        </div>

<!-- second end -->
    </div> <!-- .gallery__wrapper -->
  </section>
@endwhile
@endsection