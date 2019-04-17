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
        <img src="@assets('images/001-swimming-figure-blue.svg')" alt="balonik" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">10</p>
          <p class="icon__info">Torów pływakich</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@assets('images/011-relax-blue.svg')" alt="notes" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">28 &#8451;</p>
          <p class="icon__info">Temperatra wody</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@assets('images/004-help-lifeguard-symbol.svg')" alt="uśmiech" class="icon__img">
        <div class="icon__desc">
          <p class="icon__num">5</p>
          <p class="icon__info">Ratowników</p>
        </div>
      </li>
      <li class="icon__element">
        <img src="@assets('images/021-dive-1-blue.svg')" alt="puchar" class="icon__img">
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
        <img src="@assets('images/home.png')" alt="" class="address_icon">
        <p class="address__title">address</p>
        <p class="address__desc">Elizabeth Tower. 6th Floor Medtown, New York</p>
      </li>
      <li class="address__box address__box--light">
          <img src="@assets('images/tel.png')" alt="" class="address_icon">
          <p class="address__title">Telefon</p>
          <p class="address__desc">889 456 789</p>
        </li>
        <li class="address__box">
            <img src="@assets('images/mail.png')" alt="" class="address_icon">
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

<section class="section section--vertical">
  <div class="container">
    <div class="row align-items-stretch">
      <div class="col-12 col-md-6 col-lg-4 d-flex flex-column justify-content-center relative">
          <div class="vertical__title text-center text-md-right relative d-block">
              <h2 class="ttu">O NAS</h2>
              <p class="vertical__subtitle">Witaj w naszym klubie</p>
          </div>
          <div class="vertical__bg vertical__bg--left">
                <img src="" alt="">
          </div>
      </div>
      <div class="col-12 col-md-6 col-lg-8">
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


<div class="d-block pb-5 mb-5"></div>


@endwhile
@endsection
