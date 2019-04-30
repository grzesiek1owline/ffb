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

<div class="lang__wrapper lang__wrapper--active pl" id="pl">
<section class="section section--price pt-5">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Karnety</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="Karnet-1-tab" data-toggle="tab" href="#Karnet-1" role="tab" aria-controls="Karnet-1" aria-selected="true">1 Miesiąc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Karnet-2-tab" data-toggle="tab" href="#Karnet-2" role="tab" aria-controls="Karnet-2" aria-selected="false">3 Miesiące</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Karnet-3-tab" data-toggle="tab" href="#Karnet-3" role="tab" aria-controls="Karnet-3" aria-selected="false">6 Miesięcy</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4" id="Karnet-1" role="tabpanel" aria-labelledby="Karnet-1-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko1</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko1</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
            <div class="tab-pane fade py-4" id="Karnet-2" role="tabpanel" aria-labelledby="Karnet-2-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko2</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
            <div class="tab-pane fade py-4" id="Karnet-3" role="tabpanel" aria-labelledby="Karnet-3-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko4</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Pojedyńcze Wejścia</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Indywidualna nauka pływania</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Grupowa nauka pływania</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Trening personalny</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Pozostałe usługi</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                  <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>

  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Karty Członkowskie</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>

    <div class="container">
      <div class="row flex-column align-items-center justify-content-center">
        {{-- <div class="partners__text py-3 mb-3 text-center">
            <p class="mb-0"><b>Honorujemy karty:</b></p>
            <small>MultiSport, MultiSport Senior i Kids, Fitprofit, Ok System</small>
        </div> --}}
        <img height="100px" src="@asset('images/karty-sportowe2.png')" alt="karty sportowe - multisport, fit profit, oksystem">
        <div class="partners__info text-center">
          <p>
            Honorujemy karty MultiSport, MultiSport Senior i Kids, Fitprofit, Ok System.
          <br/>
          Dla kart <b>Multisport</b> obowiązuje dopłata w wysokości 5zł za korzystanie z części basenowej. Brak dopłaty dla uzytkowników sprzętu cardio i sali fitness
          <br/>
          Dla kart <b>OK SYSTEM</b> opcjonalnie występuje dopłata w wysokości 5zł. Sprawdź na <a href="https://www.oksystem.pl/">stronie partnera</a> czy dopłata dotyczy Twojej karty.
        </p>
        </div>
      </div>
    </div>

  
  </section>
</div>


<!-- ===================================== ENG ====================================== -->

<div class="lang__wrapper eng" id="eng">
<section class="section section--price pt-5">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Plans</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="Karnet-1-tab" data-toggle="tab" href="#Karnet-1" role="tab" aria-controls="Karnet-1" aria-selected="true">1 Miesiąc</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Karnet-2-tab" data-toggle="tab" href="#Karnet-2" role="tab" aria-controls="Karnet-2" aria-selected="false">3 Miesiące</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="Karnet-3-tab" data-toggle="tab" href="#Karnet-3" role="tab" aria-controls="Karnet-3" aria-selected="false">6 Miesięcy</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4" id="Karnet-1" role="tabpanel" aria-labelledby="Karnet-1-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko1</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko1</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
            <div class="tab-pane fade py-4" id="Karnet-2" role="tabpanel" aria-labelledby="Karnet-2-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko2</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
            <div class="tab-pane fade py-4" id="Karnet-3" role="tabpanel" aria-labelledby="Karnet-3-tab">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko4</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Pojedyńcze Wejścia</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Indywidualna nauka pływania</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Grupowa nauka pływania</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Trening personalny</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                    <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
  
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>
  
  <section class="section section--price">
    <div class="section__title d-block text-center">
      <div class="container">
        <h2 class="ttu bold">Pozostałe usługi</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
    </div>
    <div class="price__table">
      <div class="container">
        <div class="price__table-wrapper">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active py-4">
            <table summary="Cennik" class="table table-bordered table-hover tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                  <!-- <thead>
                    <tr>
                      <th>Typ <b>Karnetu</th>
                      <th>Cena</th>
                      <th>Opis</th>
                    </tr>
                  </thead> -->
                  <tbody>
                  <tr>
                      <td><p><b>Karnet Bronze</b></p></td>
                      <td><p>199zł</p></td>
                      <td>
                        <ul>
                          <li><p>pozwala na wszystko</p></li>
                          <li><p>pozwala na wszystko i jeszcze więcej</p></li>
                        </ul>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
          </div>
        </div> <!-- price table-wrapper -->
      </div>
    </div>
  
  </section>

  <section class="section section--price">
      <div class="section__title d-block text-center">
        <div class="container">
          <h2 class="ttu bold">Karty Członkowskie</h2>
          <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
        </div>
      </div>
  
      <div class="container">
        <div class="row flex-column align-items-center justify-content-center">
          {{-- <div class="partners__text py-3 mb-3 text-center">
              <p class="mb-0"><b>Honorujemy karty:</b></p>
              <small>MultiSport, MultiSport Senior i Kids, Fitprofit, Ok System</small>
          </div> --}}
          <img height="100px" src="@asset('images/karty-sportowe2.png')" alt="karty sportowe - multisport, fit profit, oksystem">
          <div class="partners__info text-center">
            <p>
              Honorujemy karty MultiSport, MultiSport Senior i Kids, Fitprofit, Ok System.
            <br/>
            Dla kart <b>Multisport</b> obowiązuje dopłata w wysokości 5zł za korzystanie z części basenowej. Brak dopłaty dla uzytkowników sprzętu cardio i sali fitness
            <br/>
            Dla kart <b>OK SYSTEM</b> opcjonalnie występuje dopłata w wysokości 5zł. Sprawdź na <a href="https://www.oksystem.pl/">stronie partnera</a> czy dopłata dotyczy Twojej karty.
          </p>
          </div>
        </div>
      </div>
  
    
    </section>

</div>

@endwhile
@endsection