{{--
  Template Name: Kontakt
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="container text-center pt-5">
  <address>
  <p class="light mt-0"><b>Body beauty FIT</b><br>ul. Sarmacka 5<br>02-202 Warszawa</p>
  </address>
  <p class="light mt-4">NIP: 957 104 6856<br>REGON: 361 585 676</p>
  <p class="light mt-4"><b>Kontakt email:</b><br><a class="light" href="mailto:email@bbf.com.pl"> email@bbf.com.pl</a><br></p>
  <p class="light mt-4"><b>Numer tel:</b><br><a href="tel:22 11 93 059">22 11 93 059</a></p>
  <p class="light mt-4"><b>Godziny otwarcia:</b><br>pon-pt <span class="bold">10:00-20:00</span><br>sb-nd <span class="bold">10:00-20:00</span></p>
  <div class="section__header-wrapper pt-5">
</div>
@endwhile
@endsection