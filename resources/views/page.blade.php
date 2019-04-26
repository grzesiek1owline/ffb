@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section class="section">
    <div class="container">
      @include('partials.content-page')
    </div>
  </section>
  @endwhile
@endsection
