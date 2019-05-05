@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning text-center">
      {{ __('Strona o podanym adresie nie istnieje.', 'sage') }}
    </div>
  @endif
@endsection
