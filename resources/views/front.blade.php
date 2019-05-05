{{--
  Template Name: Front
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

@php
  $builder = get_field('components');
@endphp

@foreach ( $builder as $section)
  @php
    $name = $section['acf_fc_layout'];
  @endphp

  @include('components.' . $name, ['data' => $section])
@endforeach

@endwhile
@endsection
