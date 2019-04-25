{{--
  Template Name: Front
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp

<div class="container pt-4 pb-5">
  <ul class="info-box__list">
    <li class="info-box__element">
      <img src="@asset('images/021-dive-1.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Certyfikowani ratownicy</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element info-box__element--light">
      <img src="@asset('images/016-waves.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Bezpieczeństwo</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element">
      <img src="@asset('images/011-relax.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Strefa relaksu</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element info-box__element--light">
      <img src="@asset('images/025-thermometer-1.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Idealna temperatura</p>
      <p class="info-box__desc">
        Woda o temperaturze 25 stopni gwarantuje komfort użytkowania.
      </p>
    </li>
  </ul>
</div>

<section class="section section--bg pb-5">
  <div class="container">
    <div class="section__title d-block text-center">
      <h2 class="ttu bold">Aktualności</h2>
      <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
    </div>
    <div class="post__newest">
      <div class="post__thumb post__thumb--newest">
        <img
          src="@asset('images/unsplash-12.jpg')"
          alt="title">
        <div class="post__overlay"></div>
        <div class="post__date">
          <span>feb</span>
          <p>28</p>
        </div>
      </div>
      <div class="post__excerpt post__excerpt--newest">
        <h3>Zmiana terminu zajęć</h3>
        <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur
          adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet,
          consect sectetur adipisicing elit.</p>
        <a href="#" class="post__perm">Czytaj dalej...</a>
      </div>
    </div>
  </div>
</section>

<section class="section pb-0">
  <div class="container">
    <ul class="post__list">
      <li class="post__list-element">
        <div class="post__single">
          <div class="post__thumb">
            <img
              src="@asset('images/unsplash-12.jpg')"
              alt="title">
            <div class="post__overlay"></div>
            <div class="post__date">
              <span>feb</span>
              <p>28</p>
            </div>
          </div>
          <div class="post__excerpt">
            <h3>Zmiana terminu zajęć</h3>
            <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect
              sectetur
              adipisicing elit.</p>
            <a href="#" class="post__perm">Czytaj dalej...</a>
          </div>
        </div>
      </li>
      <li class="post__list-element">
        <div class="post__single">
          <div class="post__thumb">
            <img
              src="@asset('images/unsplash-12.jpg')"
              alt="title">
            <div class="post__overlay"></div>
            <div class="post__date">
              <span>feb</span>
              <p>28</p>
            </div>
          </div>
          <div class="post__excerpt">
            <h3>Zmiana terminu zajęć</h3>
            <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect
              sectetur
              adipisicing elit.</p>
            <a href="#" class="post__perm">Czytaj dalej...</a>
          </div>
        </div>
      </li>
      <li class="post__list-element">
        <div class="post__single">
          <div class="post__thumb">
            <img
              src="@asset('images/unsplash-12.jpg')"
              alt="title">
            <div class="post__overlay"></div>
            <div class="post__date">
              <span>feb</span>
              <p>28</p>
            </div>
          </div>
          <div class="post__excerpt">
            <h3>Zmiana terminu zajęć</h3>
            <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect
              sectetur
              adipisicing elit.</p>
            <a href="#" class="post__perm">Czytaj dalej...</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="section section--vertical pb-5">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-12 col-md-12 col-lg-6 col-xl-4 d-flex flex-column justify-content-center relative">
        <div class="vertical__title text-center text-md-left text-lg-right relative d-block">
          <h2 class="ttu">O NAS</h2>
          <p class="vertical__subtitle">Witaj w naszym klubie</p>
        </div>
        <div class="vertical__bg vertical__bg--left">
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-6 col-xl-8">
        <div class="vertical__desc">
          <p class="mb-4 pb-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et
            qua.<br />
            <br />
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et
            qua
          </p>
          <a href="#" class="post__perm">Czytaj dalej...</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__title d-block text-center">
      <h2 class="ttu bold">Oferta</h2>
      <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
    </div>
    <ul class="service__list">
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-12.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>basen</h3>
        </div>
      </li>
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-15.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>nauka pływania</h3>
        </div>
      </li>
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-16.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>aqua aerobic</h3>
        </div>
      </li>
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-20.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>fitness</h3>
        </div>
      </li>
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-23.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>treningi personalne</h3>
        </div>
      </li>

      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-11.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>sprzęt cardio</h3>
        </div>
      </li>
      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-10.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>łaźnia parowa</h3>
        </div>
      </li>

      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-1.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>sauna sucha</h3>
        </div>
      </li>

      <li class="service__element">
        <div class="service__top">
          <img class="service__image"
            src="@asset('images/unsplash-19.jpg')"
            alt="">
          <div class="service__overlay"></div>
          <div class="service__desc">
            <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem
              ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
          </div>
        </div>
        <div class="service__title">
          <h3>yoga</h3>
        </div>
      </li>

    </ul>
  </div>
</section>

<section class="section section--dark">
  <div class="container">
    <ul class="icon__list">
      <li class="icon__element">
        <img src="@asset('images/blue/001-swimming-figure-blue.svg')" alt="balonik" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">10</p>
          <p class="icon__info">Torów pływakich</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@asset('images/blue/011-relax-blue.svg')" alt="notes" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">28 &#8451;</p>
          <p class="icon__info">Temperatra wody</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@asset('images/blue/004-help-lifeguard-symbol.svg')" alt="uśmiech" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">5</p>
          <p class="icon__info">Ratowników</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@asset('images/blue/021-dive-1-blue.svg')" alt="puchar" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">8</p>
          <p class="icon__info">Trenerów</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="section section--opinions">
  <div class="container">
    <div class="opinion__wrapper">
      <h2 class="opinion__title">Co mówią o nas klienci?</h2>
      <p class="opinion__quot">"</p>
      <ul class="opinion__list">
        <li class="opinion__single">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et
            qua.<br />
          </p>
        </li>
        <li class="opinion__single">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et
            qua.<br />
          </p>
        </li>
        <li class="opinion__single">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea
            commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et
            qua.<br />
          </p>
        </li>
      </ul>
      <p class="opinion__quot">"</p>
      <ul class="dots relative">
        {{-- <li class="dots__single"></li>
        <li class="dots__single dots__single--active"></li>
        <li class="dots__single"></li> --}}
      </ul>
    </div>
  </div>
</section>

<section class="section section--gallery">
  <div class="gallery__wrapper">
    <div class="gallery__cell gallery__cell--1">
      <div class="gallery__element"><a
          href="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg"><img
            src="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg"
            alt=""></a></div>
    </div>
    <div class="gallery__cell gallery__cell--2">
      <div class="gallery__element gallery__element--small"><a
          href="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg"><img
            src="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg" alt=""></a></div>
      <div class="gallery__element gallery__element--small gallery__element--wider"><a
          href="https://www.harvard.edu/sites/default/files/feature_item_media/021317_features_RL_0077.jpg"><img
            src="https://www.harvard.edu/sites/default/files/feature_item_media/021317_features_RL_0077.jpg" alt=""></a>
      </div>
      <div class="gallery__element gallery__element--small"><a
          href="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg"><img
            src="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg" alt=""></a></div>
      <div class="gallery__element gallery__element--small"><a
          href="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg"><img
            src="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg"
            alt=""></a></div>
      <div class="gallery__element gallery__element--small"><a
          href="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351"><img
            src="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351"
            alt=""></a></div>
    </div>
    <div class="gallery__cell gallery__cell--1">
      <div class="gallery__element gallery__element--higher"><a
          href="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351"><img
            src="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351"
            alt=""></a></div>
    </div>
  </div>
</section>

<section class="section section--main-prices">
  <div class="container">
      <div class="section__title d-block text-center">
          <h2 class="ttu bold">Cennik</h2>
          <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
        </div>
    <ul class="price__list">
      <li class="price__element">
        <h3 class="price__title">Karnet Open</h3>
        <img src="@asset('images/blue/012-beach.png')" alt="ikona pakietu">
        <div class="price">od 80zł <span>/miesięcznie</span></div>
        <ul class="package__list">
          <li class="package__element">
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
            <p>Joga</p>
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
          </li>
        </ul>
      </li>
      <li class="price__element price__element--active">
        <h3 class="price__title">Karnet Open</h3>
        <img src="@asset('images/blue/013-swimmer-1.png')" alt="ikona pakietu">
        <div class="price">od 80zł <span>/miesięcznie</span></div>
        <ul class="package__list">
          <li class="package__element">
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
            <p>Joga</p>
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
          </li>
        </ul>
      </li>
      <li class="price__element">
        <h3 class="price__title">Karnet Open</h3>
        <img src="@asset('images/blue/001-swimming-figure.png')" alt="ikona pakietu">
        <div class="price">od 80zł <span>/miesięcznie</span></div>
        <ul class="package__list">
          <li class="package__element">
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
            <p>Joga</p>
            <p>Zajęcia fitness</p>
            <p>Sauna</p>
          </li>
        </ul>
      </li>
    </ul>
    <div class="text-center bold mt-5 pt-3">
      <a href="#" class="post__perm">Zobacz pełen cennik</a>
    </div>
  </div>
</section>

<section class="section section--baner py-5 bg--primary font--light">  <!-- opcjonalnie bg--second + niżej opcjonalny rozkład - klasy bootstrap-a-->
  <div class="container">
    <div class="d-flex flex-column flex-md-row justify-content-center align-items-center"> 
      <div class="baner__text text-center text-md-right mr-0 mr-md-5">
        <p class="h2 mb-2">Darmowy transport!</p>
        <p class="mb-4 mb-md-0">Dla grup zorganizowanych zapewniamy transport w dwie strony!</p>
      </div>
      <img class="baner__ico" src="@asset('images/001-bus.png')" alt="transport">
    </div>
  </div>
</section>

@endwhile
@endsection
