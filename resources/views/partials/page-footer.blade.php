<aside class="section section--dark">
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
  </aside>
<section class="section section--small-form">
  <div class="container">
    <div class="row flex-column align-items-center flex-lg-row align-items-md-center">
      <div class="col text-lg-right mb-5 mb-lg-0 pr-0 pr-md-3 pr-lg-4">
        <p class="h1 ttu">Zadaj nam pytanie</p>
        <p>Interesują Cię szczegóły zakupu karnetu, planu zajęć czy dane techniczne naszego obiektu? Napisz do nas, a
          odpowiemy najszybciej jak to możliwe!</p>
      </div>
      <div class="col">
        <div class="contact__wrapper contact__wrapper--small" style="background: url('@asset('images/sec-bg.png')');">
          <div class="section__title d-block text-center">
            <h2 class="ttu bold">Formularz kontaktowy</h2>
            <img src="@asset('images/separator.png')" alt="ico" class="title__separator">
          </div>
          @php echo do_shortcode('[contact-form-7 id="72" title="Kontakt"]'); @endphp
          {{-- <form action="">
            <input class="input input--half" type="text" placeholder="Imię" required>
            <input class="input input--half" type="text" placeholder="Nazwisko">
            <input class="input input--half" type="email" placeholder="Adres email" required>
            <input class="input input--half" type="tel" placeholder="Telefon">
            <input class="input input--full" type="text" placeholder="Temat">
            <textarea class="textarea" placeholder="Treść wiadomości"></textarea>
            <div class="mx-auto d-block text-center">
              <input class="post__perm" type="submit" value="Wyślij wiadomość">
            </div>
          </form> --}}
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section section--map pb-0 relative">
  <div id="map"></div>
  <a href="" class="post__perm dojazd">Zobacz dojazd</a>
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
                  var map = new google.maps.Map(document.getElementById("map"), myOptions);
                   
                  var markers = [
                      ['Body Beauty Fit', 52.165351, 21.076764]
                  ];
                   
                  var image = '@asset('images/001-maps-and-flags.png')';
                                   
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
              // el.onload = initialize();
              // jQuery('body').append(el);
              
              // el.src = script;
  
              
  </script>
  <script defer src="https://maps.google.com/maps/api/js?key=AIzaSyBkJcRS9_dSttwtBABTAe9dpPl-hTPWGvM&callback=initialize" type="text/javascript"> </script>

  @include('partials.adres-block')