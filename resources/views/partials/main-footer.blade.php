<section class="section section__contact-map pb-0">
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
                  // el.onload = initialize();
                  // jQuery('body').append(el);
                  
                  // el.src = script;
      
                  
      </script>
      <script defer src="https://maps.google.com/maps/api/js?key=AIzaSyBkJcRS9_dSttwtBABTAe9dpPl-hTPWGvM&callback=initialize" type="text/javascript"> </script>

      @include('partials.adres-block')