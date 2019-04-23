{{--
  Template Name: Front
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
<div class="container pb-5 pt-5">
  <h1>
    <b>Style GUIDE</b>
  </h1>
  <div class="mt-5"></div>
  <h2>Fonty</h2>
  <div class="mb-4"></div>

  <h1>H1 STYLE</h1>
  <h2>H2 STYLE</h2>
  <h3>H3 STYLE</h3>
  <h4>H4 STYLE</h4>
  <h5>H5 STYLE</h5>
  <h6>H6 STYLE</h6>
  <div class="mt-3"></div>
  <p>paragraph</p>
  <p><b>bold paragraph</b></p>
  <a href="#">url style</a>


  <!-- BOXY -->
  <div class="mt-5"></div>
  <h2>Kolorowe boksy</h2>
  <div class="mb-4"></div>

  <ul class="info-box__list">
    <li class="info-box__element">
      <img src="@asset('images/021-dive-1.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Lifeguard certification</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element info-box__element--light">
      <img src="@asset('images/016-waves.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Experienced management</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element">
      <img src="@asset('images/021-dive-1.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Lifeguard certification</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
    <li class="info-box__element info-box__element--light">
      <img src="@asset('images/016-waves.png')" alt="ico" class="info-box__icon">
      <p class="info-box__title">Experienced management</p>
      <p class="info-box__desc">
        Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.
      </p>
    </li>
  </ul>


  <!-- Title -->
  <div class="mt-5"></div>
  <h2>Tytuły</h2>
  <div class="mb-4"></div>

  <div class="section__title d-block text-center">
    <h2 class="ttu bold">nasza oferta</h2>
    <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
  </div>

  <!-- Title -->
  <div class="mt-5"></div>
  <h2>Oferta</h2>
  <div class="mb-4"></div>

  <ul class="service__list">
    <li class="service__element">
      <div class="service__top">
        <img class="service__image"
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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

  </ul>


  <!-- Title -->
  <div class="mt-5"></div>
  <h2>Posty</h2>
  <div class="mb-4"></div>

  <ul class="post__list">
    <li class="post__list-element">
      <div class="post__single">
        <div class="post__thumb">
          <img
            src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
            alt="title">
          <div class="post__overlay"></div>
          <div class="post__date">
            <span>feb</span>
            <p>28</p>
          </div>
        </div>
        <div class="post__excerpt">
          <h3>Zmiana terminu zajęć</h3>
          <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur
            adipisicing elit.</p>
          <a href="#" class="post__perm">Czytaj dalej...</a>
        </div>
      </div>
    </li>
    <li class="post__list-element">
      <div class="post__single">
        <div class="post__thumb">
          <img
            src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
            alt="title">
          <div class="post__overlay"></div>
          <div class="post__date">
            <span>feb</span>
            <p>28</p>
          </div>
        </div>
        <div class="post__excerpt">
          <h3>Zmiana terminu zajęć</h3>
          <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur
            adipisicing elit.</p>
          <a href="#" class="post__perm">Czytaj dalej...</a>
        </div>
      </div>
    </li>
    <li class="post__list-element">
      <div class="post__single">
        <div class="post__thumb">
          <img
            src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
            alt="title">
          <div class="post__overlay"></div>
          <div class="post__date">
            <span>feb</span>
            <p>28</p>
          </div>
        </div>
        <div class="post__excerpt">
          <h3>Zmiana terminu zajęć</h3>
          <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur
            adipisicing elit.</p>
          <a href="#" class="post__perm">Czytaj dalej...</a>
        </div>
      </div>
    </li>
    <li class="post__list-element">
      <div class="post__single">
        <div class="post__thumb">
          <img
            src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
            alt="title">
          <div class="post__overlay"></div>
          <div class="post__date">
            <span>feb</span>
            <p>28</p>
          </div>
        </div>
        <div class="post__excerpt">
          <h3>Zmiana terminu zajęć</h3>
          <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur
            adipisicing elit.</p>
          <a href="#" class="post__perm">Czytaj dalej...</a>
        </div>
      </div>
    </li>
  </ul>

</div>



<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>Najnowszy Post</h2>
  <div class="mb-4"></div>
</div>


<section class="section section--bg">
  <div class="container">
    <div class="post__newest">
      <div class="post__thumb post__thumb--newest">
        <img
          src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23"
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

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>ICONS</h2>
  <div class="mb-4"></div>
</div>

<section class="section section--dark"> <!-- #009ee2 -->
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


<!-- Title -->
<div class="container">
    <div class="mt-5"></div>
    <h2>ADDRESS BLOCK</h2>
    <div class="mb-4"></div>
</div>

<section class="section">
  <div class="container">
    <ul class="address__list">
      <li class="address__box">
        <img src="@asset('images/021-home-button.png')" alt="" class="address__icon">
        <p class="address__title">address</p>
        <p class="address__desc">Elizabeth Tower. 6th Floor Medtown, New York</p>
      </li>
      <li class="address__box address__box--light">
          <img src="@asset('images/022-telephone-handle-silhouette.png')" alt="" class="address__icon">
          <p class="address__title">Telefon</p>
          <p class="address__desc">889 456 789</p>
        </li>
        <li class="address__box">
            <img src="@asset('images/023-black-back-closed-envelope-shape.png')" alt="" class="address__icon">
            <p class="address__title">E-mail</p>
            <p class="address__desc">basen_fbb@wp.pl</p>
          </li>
    </ul>
  </div>
</section>

<!-- Title -->
<div class="container">
    <div class="mt-5"></div>
    <h2>SHORT TEXT SECTION</h2>
    <div class="mb-4"></div>
</div>

<section class="section section--vertical section--vertical-bg">
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
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et qua.<br/>
                  <br/>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et qua
              </p>
              <a href="#" class="post__perm">Czytaj dalej...</a>
            </div>
      </div>
    </div>
  </div>
</section>

<div class="mb-5 mt-5 d-block"></div>

<section class="section section--vertical">
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
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et qua.<br/>
                  <br/>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et qua
              </p>
              <a href="#" class="post__perm">Czytaj dalej...</a>
            </div>
      </div>
    </div>
  </div>
</section>

<!-- Title -->
<div class="container">
    <div class="mt-5"></div>
    <h2>Opinie</h2>
    <div class="mb-4"></div>
</div>

<section class="section">
  <div class="container">
    <div class="opinion__wrapper">
      <h2 class="opinion__title">Co mówią o nas klienci?</h2>
      <p class="opinion__quot">"</p>
      <ul class="opinion__list">
        <li class="opinion__single">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationulaco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in repdan tiutrpeam, eaque ipsa quae ab illo inventore veritatis et qua.<br/>
        </p>
        </li>
      </ul>
      <p class="opinion__quot">"</p>
      <ul class="dots">
        <li class="dots__single"></li>
        <li class="dots__single dots__single--active"></li>
        <li class="dots__single"></li>
      </ul>
    </div>
  </div>
</section>


<!-- Title -->
<div class="container">
    <div class="mt-5"></div>
    <h2>Cennik</h2>
    <div class="mb-4"></div>
</div>

<section class="section">
  <div class="container">
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
    <a href="#" class="post__perm">Zobacz cennik</a>
    </div>
  </div>
</section>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>Footer - big form</h2>
  <div class="mb-4"></div>
</div>

<section class="section">
  <div class="container">
    <div class="contact__wrapper">
      <div class="section__title d-block text-center">
        <h2 class="ttu bold">Kontakt z nami</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
      <form action="">
        <input class="input input--half"  type="text" placeholder="Imię" required>
        <input class="input input--half"  type="text" placeholder="Nazwisko">
        <input class="input input--half"  type="email" placeholder="Adres email" required>
        <input class="input input--half"  type="tel" placeholder="Telefon">
        <input class="input input--full"  type="text" placeholder="Temat">
        <textarea class="textarea" placeholder="Treść wiadomości"></textarea>
        <input class="post__perm" type="submit" value="Wyślij wiadomość">
      </form>
    </div>
  </div>
</section>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>MAPA</h2>
  <div class="mb-4"></div>
</div>

<!-- <section class="section section--map">
    <div id="map">

    </div>
</section> -->


<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>Small Form</h2>
  <div class="mb-4"></div>

</div>

<section>
  <div class="container">
    <div class="row flex-column align-items-center flex-lg-row align-items-md-center">
      <div class="col text-lg-right mb-5 mb-lg-0 pr-0 pr-md-3 pr-lg-4">
        <p class="h1 ttu">Zadaj nam pytanie</p>
        <p>Interesują Cię szczegóły zakupu karnetu, planu zajęć czy dane techniczne naszego obiektu? Napisz do nas, a odpowiemy najszybciej jak to możliwe!</p>
      </div>
      <div class="col">
        <div class="contact__wrapper contact__wrapper--small">
          <div class="section__title d-block text-center">
            <h2 class="ttu bold">Formularz kontaktowy</h2>
            <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
          </div>
          <form action="">
            <input class="input input--half"  type="text" placeholder="Imię" required>
            <input class="input input--half"  type="text" placeholder="Nazwisko">
            <input class="input input--half"  type="email" placeholder="Adres email" required>
            <input class="input input--half"  type="tel" placeholder="Telefon">
            <input class="input input--full"  type="text" placeholder="Temat">
            <textarea class="textarea" placeholder="Treść wiadomości"></textarea>
            <div class="mx-auto d-block text-center">
            <input class="post__perm" type="submit" value="Wyślij wiadomość">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>footer</h2>
  <div class="mb-4"></div>
</div>

<footer class="footer">
  <div class="container">
    <nav class="menu menu--footer">
      <a href="">
        <img src="" alt="logo">
      </a>
      <ul class="menu__list">
        <li class="menu__element menu__element--dark"><a href="">option</a></li>
        <li class="menu__element menu__element--dark"><a href="">option</a></li>
        <li class="menu__element menu__element--dark"><a href="">option</a></li>
        <li class="menu__element menu__element--dark"><a href="">option</a></li>
      </ul>
    </nav>
  </div>
  <div class="footer__bottom">
    <p>Copyright @ 2019 domena.com</p>
  </div> 
</footer>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>HEADER</h2>
  <div class="mb-4"></div>
</div>

<header class="header">
  <div class="container">
    <nav class="menu menu--header">
      <a href="">
        <img src="" alt="logo">
      </a>
      <ul class="menu__list">
        <li class="menu__element"><a href="">option</a></li>
        <li class="menu__element"><a href="">option</a></li>
        <li class="menu__element"><a href="">option</a></li>
        <li class="menu__element"><a href="">option</a></li>
      </ul>
    </nav>
  </div>
</header>


<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>GALLERY</h2>
  <div class="mb-4"></div>
</div>

<section class="section section--gallery">
<div class="gallery__wrapper">
  <div class="gallery__cell gallery__cell--1">         
    <div class="gallery__element"><a href=""><img src="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg" alt=""></a></div>
  </div>
  <div class="gallery__cell gallery__cell--2">
    <div class="gallery__element gallery__element--small"><a href=""><img src="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg" alt=""></a></div>
    <div class="gallery__element gallery__element--small gallery__element--wider"><a href=""><img src="https://www.harvard.edu/sites/default/files/feature_item_media/021317_features_RL_0077.jpg" alt=""></a></div>
    <div class="gallery__element gallery__element--small"><a href=""><img src="https://www.canva.com/learn/wp-content/uploads/2018/11/best-free-stock-photos.jpg" alt=""></a></div>
    <div class="gallery__element gallery__element--small"><a href=""><img src="https://images.pexels.com/photos/207962/pexels-photo-207962.jpeg?cs=srgb&dl=artistic-blossom-bright-207962.jpg&fm=jpg" alt=""></a></div>
    <div class="gallery__element gallery__element--small"><a href=""><img src="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351" alt=""></a></div>
  </div>
  <div class="gallery__cell gallery__cell--1">
    <div class="gallery__element gallery__element--higher"><a href=""><img src="https://cdn.theatlantic.com/assets/media/img/photo/2018/01/photos-of-the-new-year-ringing-in-2/n01_AP18001109875267/main_900.jpg?1514830351" alt=""></a></div>
  </div>
</div>
</section>



<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>BANER z IKONĄ</h2>
  <div class="mb-4"></div>
</div>

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

<div class="d-block pb-5 mb-5"></div>

<section class="section section--baner py-5 bg--second font--light"> <!-- opcjonalnie bg--second -->
  <div class="container">
    <div class="d-flex flex-column flex-md-row-reverse justify-content-center align-items-center">
      <div class="baner__text text-center text-md-left ml-0 ml-md-5">
        <p class="h2 mb-2">Darmowy transport!</p>
        <p class="mb-4 mb-md-0">Dla grup zorganizowanych zapewniamy transport w dwie strony!</p>
      </div>
      <img class="baner__ico" src="@asset('images/001-bus.png')" alt="transport">
    </div>       
  </div>
</section>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>BANER Z TŁEM</h2>
  <div class="mb-4"></div>
</div>

<section class="section relative section--baner section--baner-bg py-5">  <!-- opcjonalnie bg--second -->
<img class="baner__bg" src="https://cdn.flixbus.de/2017-06/driving-flixbus.jpg" alt="">
  <div class="container">
      <div class="w-100 baner__text baner__text--bg text-center text-lg-left">
        <p class="h1 mb-2">Darmowy transport!</p>
        <p class="mb-4 mb-md-0">Dla grup zorganizowanych zapewniamy transport w dwie strony! Dla grup zorganizowanych zapewniamy transport w dwie strony.</p>
        <div class="pt-5 d-block">
          <a href="#" class="post__perm">Skontaktuj się z nami</a>
        </div>
      </div>
  </div>
</section>

<div class="d-block pb-5 mb-5"></div>

<!-- Title -->
<div class="container">
  <div class="mt-5"></div>
  <h2>kontakt z mapą</h2>
  <div class="mb-4"></div>
</div>

<section class="section section__contact-map">
  <div class="container">
    <div class="contact__wrapper relative" style="z-index:5">
      <div class="section__title d-block text-center">
        <h2 class="ttu bold">Kontakt z nami</h2>
        <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
      </div>
      <form action="">
        <input class="input input--half"  type="text" placeholder="Imię" required>
        <input class="input input--half"  type="text" placeholder="Nazwisko">
        <input class="input input--half"  type="email" placeholder="Adres email" required>
        <input class="input input--half"  type="tel" placeholder="Telefon">
        <input class="input input--full"  type="text" placeholder="Temat">
        <textarea class="textarea" placeholder="Treść wiadomości"></textarea>
        <input class="post__perm" type="submit" value="Wyślij wiadomość">
      </form>
    </div>
  </div>
  
    <div id="map-split">
    </div>
  
</section>

<script>
  //['Body Beauty Fit', 52.165351, 21.076764]
      var map;
            var lat=52.165351;
            var lng=21.076764;
            var zoom=10;
            function initialize() {
                var myLatlng = new google.maps.LatLng(lat,lng);
                var myOptions = {
                    zoom: zoom,
                    center: myLatlng,
                    mapTypeId: google.maps.MapTypeId.hybrid,
                    styles: [
                      {
                          "featureType": "water",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#e9e9e9"
                              },
                              {
                                  "lightness": 17
                              }
                          ]
                      },
                      {
                          "featureType": "landscape",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#f5f5f5"
                              },
                              {
                                  "lightness": 20
                              }
                          ]
                      },
                      {
                          "featureType": "road.highway",
                          "elementType": "geometry.fill",
                          "stylers": [
                              {
                                  "color": "#ffffff"
                              },
                              {
                                  "lightness": 17
                              }
                          ]
                      },
                      {
                          "featureType": "road.highway",
                          "elementType": "geometry.stroke",
                          "stylers": [
                              {
                                  "color": "#ffffff"
                              },
                              {
                                  "lightness": 29
                              },
                              {
                                  "weight": 0.2
                              }
                          ]
                      },
                      {
                          "featureType": "road.arterial",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#ffffff"
                              },
                              {
                                  "lightness": 18
                              }
                          ]
                      },
                      {
                          "featureType": "road.local",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#ffffff"
                              },
                              {
                                  "lightness": 16
                              }
                          ]
                      },
                      {
                          "featureType": "poi",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#f5f5f5"
                              },
                              {
                                  "lightness": 21
                              }
                          ]
                      },
                      {
                          "featureType": "poi.park",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#dedede"
                              },
                              {
                                  "lightness": 21
                              }
                          ]
                      },
                      {
                          "elementType": "labels.text.stroke",
                          "stylers": [
                              {
                                  "visibility": "on"
                              },
                              {
                                  "color": "#ffffff"
                              },
                              {
                                  "lightness": 16
                              }
                          ]
                      },
                      {
                          "elementType": "labels.text.fill",
                          "stylers": [
                              {
                                  "saturation": 36
                              },
                              {
                                  "color": "#333333"
                              },
                              {
                                  "lightness": 40
                              }
                          ]
                      },
                      {
                          "elementType": "labels.icon",
                          "stylers": [
                              {
                                  "visibility": "off"
                              }
                          ]
                      },
                      {
                          "featureType": "transit",
                          "elementType": "geometry",
                          "stylers": [
                              {
                                  "color": "#f2f2f2"
                              },
                              {
                                  "lightness": 19
                              }
                          ]
                      },
                      {
                          "featureType": "administrative",
                          "elementType": "geometry.fill",
                          "stylers": [
                              {
                                  "color": "#fefefe"
                              },
                              {
                                  "lightness": 20
                              }
                          ]
                      },
                      {
                          "featureType": "administrative",
                          "elementType": "geometry.stroke",
                          "stylers": [
                              {
                                  "color": "#fefefe"
                              },
                              {
                                  "lightness": 17
                              },
                              {
                                  "weight": 1.2
                              }
                          ]
                      }
                  ]
                }
                var map = new google.maps.Map(document.getElementById("map-split"), myOptions);
                 
                var markers = [
                    ['Body Beauty Fit', 52.165351, 21.076764]
                ];
                 
                var image = '<?php echo get_template_directory_uri(); ?>/../dist/images/001-maps-and-flags.png';
                                 
                for (var i = 0; i < markers.length; i++) {
                    var draftMarker = markers[i];
                    var myLatLng = new google.maps.LatLng(draftMarker[1], draftMarker[2]);
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        title: draftMarker[0],
                        icon: image
                    });
                }
            }   

            jQuery('body').append(el);
            el.onload = initialize();
            el.src = script;

            
</script>
<script defer src="https://maps.google.com/maps/api/js?key=AIzaSyBkJcRS9_dSttwtBABTAe9dpPl-hTPWGvM&callback=initialize" type="text/javascript"> </script>
<div class="d-block pb-5 mb-5"></div>

<section class="section section--gallery relative">
    <ul class="slider">
      <li class="slider__element" style="background-image: url('https://images.unsplash.com/photo-1445768593937-05a3f7832b68?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80');">
      <div class="slider__overlay"></div>  
      <div class="container h-100 text-center relative">
          <div class="row h-100 flex-column justify-content-center align-items-center slider__text">
            <p class="h3 ff2">basen</p>
            <h1>Jedyny podgrzewany basen na Woli</h1>
            <p>Nasza woda ma zawsze minimum 25 stopni</p>
            <div class="pt-4 d-block">
              <a href="#" class="post__perm post__perm--transparent">Skontaktuj się z nami</a>
            </div>
          </div>
        </div>
      </li>
      <li class="slider__element" style="background-image: url('https://images.unsplash.com/photo-1445768593937-05a3f7832b68?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80');">
      <div class="slider__overlay"></div>  
      <div class="container h-100 text-center relative">
          <div class="row h-100 flex-column justify-content-center align-items-center slider__text">
            <p class="h3 ff2">yoga</p>
            <p class="h1 ttu">Jedyny podgrzewany basen na Woli</p>
            <p>Nasza woda ma zawsze minimum 25 stopni</p>
          </div>
        </div>
      </li>
      <li class="slider__element" style="background-image: url('https://images.unsplash.com/photo-1445768593937-05a3f7832b68?dpr=1&auto=compress,format&crop=entropy&fit=crop&w=700&h=500&q=80');">
      <div class="slider__overlay"></div>  
      <div class="container h-100 text-center relative">
          <div class="row h-100 flex-column justify-content-center align-items-center slider__text">
            <p class="h3 ff2">siłownia</p>
            <p class="h1 ttu">Jedyny podgrzewany basen na Woli</p>
            <p>Nasza woda ma zawsze minimum 25 stopni</p>
            <div class="pt-4 d-block">
              <a href="#" class="post__perm post__perm--transparent">Cennik</a>
            </div>
          </div>
        </div>
      </li>
    </ul>
    <div class="slider__navigation">
      <button class="slider__arrow slider__arrow--prev arrow__new"></button>
      <button class="slider__arrow slider__arrow--next arrow__new"></button>
    </div>
</section>


@endwhile
@endsection
