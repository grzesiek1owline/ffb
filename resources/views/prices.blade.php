{{--
  Template Name: Cennik
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="container">
<ul class="flags">
  <p id="lang-text">Wybierz język / Select language:</p>
  <li>
    <button class="lang active" data-target="pl">
      <img src="@asset('images/001-poland.png')" alt="pl">
    </button>
  </li>
  <li>
  <button class="lang" data-target="eng">
      <img src="@asset('images/002-united-kingdom.png')" alt="gb">
    </button>
  </li>
</ul>
</div>

@php
  $prices_pl = get_field('prices_pl');
@endphp

@if($prices_pl)

<div class="lang__wrapper lang__wrapper--active pl" id="pl">


@foreach ($prices_pl as $item)
<section class="section section--price pt-5">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">{{ $item['title'] }}</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          @if(count($item['tabs']) > 1)
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            @foreach ($item['tabs'] as $tab )
              <li class="nav-item">
                <a class="nav-link @if($loop->first) active @endif" id="{{ $item['title'] . $loop->index }}-tab" data-toggle="tab" href="#{{ $item['title'] . $loop->index }}" role="tab" aria-controls="{{ $item['title'] . $loop->index }}" aria-selected="@if($loop->first) true @else false @endif">{{ $tab['title'] }}</a>
              </li>
              @endforeach
          </ul>
          @endif
          <div class="tab-content" id="myTabContent">
            @if($item['tabs'])
              @foreach ($item['tabs'] as $tab )
                <div class="tab-pane fade show @if($loop->first) active @endif py-4" id="{{ $item['title'] . $loop->index }}" role="tabpanel" aria-labelledby="{{ $item['title'] . $loop->index }}-tab">
                  @if( $tab['rows'])
                  <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                    <tbody>
                      @foreach( $tab['rows'] as $row)
                      @php
                        $content = $row['content'];
                        $list = $content['list'];
                      @endphp
                      <tr>
                        <td><p><b>{{ $content['karnet'] }}</b></p></td>
                        <td><p>{{ $content['cena'] }}</p></td>
                        <td>
                          @if($list)
                          <ul>
                            @foreach ( $list as $e)
                              <li><p>{{ $e['element'] }}</p></li>
                            @endforeach
                          </ul>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif
                </div>
              @endforeach
            @endif
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>

  </section>
@endforeach
@endif
<!-- CARDS PL-->
@php
  $cards_pl_title = get_field('cards_pl_title');
  $cards_pl_content = get_field('cards_pl_content');
  $cards_pl_image = get_field('cards_pl_image');
  $cards_pl_link = get_field('cards_pl_link');
@endphp

@if($cards_pl_image)

<aside class="partners pb-5 mb-3">
  <div class="container">
    <div class="row flex-column align-items-center justify-content-center">
        <div class="partners__text py-3 mb-3 text-center">
            <p class="mb-0"><b>{{ $cards_pl_title }}</b></p>
            <small>{!! $cards_pl_content !!}</small>
        </div>
        <img height="100px" src="{{ $cards_pl_image['url'] }}" alt="{{ $cards_pl_image['alt'] }}">
        @if($cards_pl_link )
        <a class="primary-c" href="{{ $cards_pl_link['url'] }}"><small>{{ $cards_pl_link['title'] }}</small></a>
        @endif
    </div>
  </div>
</aside>

@endif
</div>


<!-- ===================================== ENG ====================================== -->
@php
  $prices_eng = get_field('prices_eng');
@endphp

@if($prices_eng)

<div class="lang__wrapper eng" id="eng">


@foreach ($prices_eng as $item)
<section class="section section--price pt-5">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">{{ $item['title'] }}</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          @if(count($item['tabs']) > 1)
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            @foreach ($item['tabs'] as $tab )
              <li class="nav-item">
                <a class="nav-link @if($loop->first) active @endif" id="{{ $item['title'] . $loop->index }}-tab" data-toggle="tab" href="#{{ $item['title'] . $loop->index }}" role="tab" aria-controls="{{ $item['title'] . $loop->index }}" aria-selected="@if($loop->first) true @else false @endif">{{ $tab['title'] }}</a>
              </li>
              @endforeach
          </ul>
          @endif
          <div class="tab-content" id="myTabContent">
            @if($item['tabs'])
              @foreach ($item['tabs'] as $tab )
                <div class="tab-pane fade show @if($loop->first) active @endif py-4" id="{{ $item['title'] . $loop->index }}" role="tabpanel" aria-labelledby="{{ $item['title'] . $loop->index }}-tab">
                  @if( $tab['rows'])
                  <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                    <tbody>
                      @foreach( $tab['rows'] as $row)
                      @php
                        $content = $row['content'];
                        $list = $content['list'];
                      @endphp
                      <tr>
                        <td><p><b>{{ $content['karnet'] }}</b></p></td>
                        <td><p>{{ $content['cena'] }}</p></td>
                        <td>
                          @if($list)
                          <ul>
                            @foreach ( $list as $e)
                              <li><p>{{ $e['element'] }}</p></li>
                            @endforeach
                          </ul>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                  @endif
                </div>
              @endforeach
            @endif
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>

  </section>
@endforeach
@endif

<!-- CARDS eng-->
@php
  $cards_eng_title = get_field('cards_eng_title');
  $cards_eng_content = get_field('cards_eng_content');
  $cards_eng_image = get_field('cards_eng_image');
  $cards_eng_link = get_field('cards_eng_link');
@endphp

@if($cards_eng_image)

<aside class="partners pb-5 mb-3">
  <div class="container">
    <div class="row flex-column align-items-center justify-content-center">
        <div class="partners__text py-3 mb-3 text-center">
            <p class="mb-0"><b>{{ $cards_eng_title }}</b></p>
            <small>{!! $cards_eng_content !!}</small>
        </div>
        <img height="100px" src="{{ $cards_eng_image['url'] }}" alt="{{ $cards_eng_image['alt'] }}">
        @if($cards_eng_link )
        <a class="primary-c" href="{{ $cards_eng_link['url'] }}"><small>{{ $cards_eng_link['title'] }}</small></a>
        @endif
    </div>
  </div>
</aside>

@endif

</div>



@endwhile
@endsection
