{{--
  Template Name: Kontakt
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
  <div class="container pt-5">
      @include('partials.content-single-'.get_post_type())
  </div>
@endwhile
@endsection