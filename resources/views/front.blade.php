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
            <img class="service__image" src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="">
            <div class="service__overlay"></div>
            <div class="service__desc">
              <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="service__title">
            <h3>treningi personalne</h3>
          </div>
        </li>
        <li class="service__element">
          <div class="service__top">
            <img class="service__image" src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="">
            <div class="service__overlay"></div>
            <div class="service__desc">
              <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="service__title">
            <h3>treningi personalne</h3>
          </div>
        </li>
        <li class="service__element">
          <div class="service__top">
            <img class="service__image" src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="">
            <div class="service__overlay"></div>
            <div class="service__desc">
              <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="service__title">
            <h3>treningi personalne</h3>
          </div>
        </li>
        <li class="service__element">
          <div class="service__top">
            <img class="service__image" src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="">
            <div class="service__overlay"></div>
            <div class="service__desc">
              <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
            </div>
          </div>
          <div class="service__title">
            <h3>treningi personalne</h3>
          </div>
        </li>
        <li class="service__element">
          <div class="service__top">
            <img class="service__image" src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="">
            <div class="service__overlay"></div>
            <div class="service__desc">
              <p class="paragraph paragraph--small">Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
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
                <img src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="title">
                <div class="post__overlay"></div>
                <div class="post__date">
                  <span>feb</span>
                  <p>28</p>
                </div>
              </div>
              <div class="post__excerpt">
                <h3>Zmiana terminu zajęć</h3>
                <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
                <a href="#" class="post__perm">Czytaj dalej...</a>
              </div>
            </div>
        </li>
        <li class="post__list-element">
            <div class="post__single">
              <div class="post__thumb">
                <img src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="title">
                <div class="post__overlay"></div>
                <div class="post__date">
                  <span>feb</span>
                  <p>28</p>
                </div>
              </div>
              <div class="post__excerpt">
                <h3>Zmiana terminu zajęć</h3>
                <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
                <a href="#" class="post__perm">Czytaj dalej...</a>
              </div>
            </div>
        </li>
        <li class="post__list-element">
            <div class="post__single">
              <div class="post__thumb">
                <img src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="title">
                <div class="post__overlay"></div>
                <div class="post__date">
                  <span>feb</span>
                  <p>28</p>
                </div>
              </div>
              <div class="post__excerpt">
                <h3>Zmiana terminu zajęć</h3>
                <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
                <a href="#" class="post__perm">Czytaj dalej...</a>
              </div>
            </div>
        </li>
        <li class="post__list-element">
            <div class="post__single">
              <div class="post__thumb">
                <img src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="title">
                <div class="post__overlay"></div>
                <div class="post__date">
                  <span>feb</span>
                  <p>28</p>
                </div>
              </div>
              <div class="post__excerpt">
                <h3>Zmiana terminu zajęć</h3>
                <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
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
            <img src="https://scontent.fwaw3-2.fna.fbcdn.net/v/t1.0-9/10685522_450606181743747_1899337410481724985_n.jpg?_nc_cat=100&_nc_ht=scontent.fwaw3-2.fna&oh=7035c0ba3d728f55faaf6e59b24da6a7&oe=5D37FF23" alt="title">
            <div class="post__overlay"></div>
            <div class="post__date">
              <span>feb</span>
              <p>28</p>
            </div>
          </div>
          <div class="post__excerpt post__excerpt--newest">
            <h3>Zmiana terminu zajęć</h3>
            <p>Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit. Lorem ipsum dolor sit amet, consect sectetur adipisicing elit.</p>
            <a href="#" class="post__perm">Czytaj dalej...</a>
          </div>
        </div>
        </div>
      </section>

      <div class="d-block pb-5 mb-5"></div>

    
  @endwhile
@endsection
