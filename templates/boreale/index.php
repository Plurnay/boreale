<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name = "format-detection" content = "telephone=no" />
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/css/grid.css">
  <link rel="stylesheet" href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/css/touchTouch.css">
  <link rel="stylesheet" href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/css/contact-form.css">
  <link rel="stylesheet" href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/css/style.css">
  <script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/jquery.js"></script>
  <script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/jquery-migrate-1.2.1.js"></script>
  <script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/jquery.equalheights.js"></script>
  <script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/camera.js"></script>
  <script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/touchTouch.jquery.js"></script>
  <script src='//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false'></script> 

  <script>
    $(document).ready(function () {
          $('#camera_wrap').camera({
        loader: true,
        pagination: true,
        thumbnails: false,
        height: '38.43434343434343%',
        caption: true,
        navigation: false,
        fx: 'scrollTop',
        autoAdvance: true
    });
       $('.gallery .gall_item').touchTouch();
    });
  </script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
    <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
      <area shape="rect" coords="62,442,114,397" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
    </map>
  </div>
  <![endif]-->
</head>

<body>
<!--========================================================
                          HEADER
=========================================================-->
<header id="header">
  <div id="stuck_container">
    <div class="container">
      <div class="row">
      <div class="grid_12">
        <h1 class="">
          <a href="index.html">École Boréale<br><span class="">
            Here learning never ends</span></a>
        </h1>
          <nav>
            <jdoc:include type="modules" name="menu" style="none"/>
          </nav>
          </div>
      </div>
    </div>
  </div> 
</header>




<!--========================================================
                          CONTENT
=========================================================-->
<section id="content">
	<jdoc:include type="modules" name="showcase" style="none" />

      <div class="container mar_t_-56">
          <div class="row perspective">        
            <div class="grid_4">
              <div class="banner_1">
                <div class="pad_1">
                  <jdoc:include type="modules" name="box1" style="none" />
                </div>
              </div>
            </div>
              
            <div class="grid_4">
			  <div class="banner_2">
			    <div class="pad_1">
			     <jdoc:include type="modules" name="box2" style="none" />
			    </div>
			  </div>
		    </div>
              
            <div class="grid_4">
              <div class="banner_3">
                <div class="pad_1">
                   <jdoc:include type="modules" name="box3" style="none" />
                </div>
              </div>
            </div>
          </div>
      </div>
 
    <div class="container">
      <div class="wrapper1">
        <div class="row ">
          <div class="grid_12 perspective">
            <h2>Harmonious development of your child’s talents</h2>
			<p class="p4 mar_t_15">Aenean nonummyendrerit maurhasellus porta. Fusce susct varius mi. Cum sociis natoque penatibus et mag dis parturient ontes nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio gravida atcursus nec luctus a lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. </p>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
    <div class="wrapper2">
      <div class="row perspective">
        <div class="grid_6">
            <h3>Welcome</h3>
           <div class="extra-wrap bord_1 pad_b_4">
             <img src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic1.jpg" alt="" class='pic_bord img_indent'>
                       <p class="mar_t_3">
                       <a href="#" class="">Consectetuer adipist lacean.</a><br>
                        Nummy nrerit uris. Pha sellrtsce scipitvarius mi. Cum sociistoque pentibus et magnis diarturtots nascetur rimulug maleada odiorbi dio gravida atcurus necuus a lorem.<br><br>Maecenas tristique ori ac sem. Duis ultrices pharetra gna. Donec accumsan malesuada ornec sit amet eros. Lorem ipsum dolor sit amt consc tetuer aiing elit. Mauris fermentum tum magna. Sed laoreet aliquam leo. Ut te dolor dap.
                       </p>
           </div>
            <a class="btn-link" href="#">more about us</a>
        </div>
        <div class="grid_6">
            <h3>Latest events</h3>
           <div class="bord_1 pad_b_4 perspective">
             <div class="block_1">
                <time datetime="2014-04-30"><span class="">apr `14</span><em>30</em></time>
                <div class="extra-wrap">
                  <a href="#" class="">Aliquam congue fermentum nisl</a>
                  <p class="p10">
                  <span class="">Cum sociis natoque pen et.</span><br>
                    Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuus a lorm ecaistique orci ac sis ultricpharetra gna. Donec accusan malsuad.
                  </p>
                </div>
             </div>
             <div class="block_1 mar_t_7 perspective">
                <time datetime="2014-04-28"><span class="">apr `14</span><em>28</em></time>
                <div class="extra-wrap">
                  <a href="#" class="">Sed ut perspiciatis unde omnis iste</a>
                  <p class="p10">
                  <span class="">Sed ut perspiciatis unde omnis iste.</span><br>
                    Ecaristique orci ac sis ultricpharetra gna. Donec accusan malsurcnec sit amet eros. Lorem ipsum dolor sit t consc tetuer aiing elaurisrm.
                  </p>
                </div>
             </div>
           </div>
            <a class="btn-link" href="#">more news</a>
        </div>
      </div>

    </div>
     <div class="wrapper3 perspective">
     <h3>our teachers</h3>
      <div class="row">
        <div class="gallery">
      <div class="grid_3 s3">
      <a href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic2_big.jpg" class="gall_item pic_bord"><img src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic2.jpg" alt="" class=''></a>
        <div class="max-with_2">
               <a href="#" class="btn_2">Aliquam congue fermentu</a>
              <p class="">
               Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuu.
              </p>
        </div>
      </div>
      <div class="grid_3 s3">
      <a href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic3_big.jpg" class="gall_item pic_bord"><img src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic3.jpg" alt="" class=''></a>
        <div class="max-with_2">
               <a href="#" class="btn_2">Vestibulum iaculis lacini</a>
              <p class="">
               Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuu.
              </p>
        </div>
      </div>
      <div class="grid_3 s3">
      <a href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic4_big.jpg" class="gall_item pic_bord"><img src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic4.jpg" alt="" class=''></a>
        <div class="max-with_2">
               <a href="#" class="btn_2">natus error sit voluptate</a>
              <p class="">
               Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuu.
              </p>
        </div>
      </div>
      <div class="grid_3 s3">
      <a href="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic5_big.jpg" class="gall_item pic_bord"><img src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/p1_pic5.jpg" alt="" class=''></a>
        <div class="max-with_2">
               <a href="#" class="btn_2">Proin dictum elementu</a>
              <p class="">
               Turie ntots nascetur riculus mullamale ada odi dio gravida atcur ecuu.
              </p>
        </div>
      </div>

      </div>
      </div>
    </div>
    <a class="btn-link s3" href="#">view all teachers</a>
  </div>
</section>
<section class="content_calendar">
  <jdoc:include type="modules" name="calendar" style="none" />
</section>
<section class="content_gallery">
  <jdoc:include type="modules" name="gallery" style="none" />
  <jdoc:include type="message" />
  <jdoc:include type="component" />
</section>

<section class="content_map">
  <div class="google-map-api"> 
    <div id="map-canvas" class="gmap"></div> 
  </div> 
</section>

<div class="modal fade response-message">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        You message has been sent! We will be in touch soon.
      </div>
    </div>
  </div>
</div>

<!--========================================================
                          FOOTER
=========================================================-->
<footer id="footer">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="grid_3">
          <div class="privacy-block">
          <a href="./" class="logo">elementary school</a><br>
           elementary school &copy; <span id="copyright-year"></span> <a
                  href="index-6.html">Privacy policy</a>
            More Primary School Website Templates at <a rel="nofollow" href="http://www.templatemonster.com/category/primary-school-website-templates/" target="_blank">TemplateMonster.com</a>
          </div>
        </div>
        <div class="grid_3 preffix_3">
        <h3>Contact Us</h3>
          <address class="">
            <span class="width1">Freephone: </span>+1 800 559 6580<br>
            <span class="width1">Telephone: </span>+1 959 603 6035<br>
            <span class="width1">FAX: </span>+1 504 889 9898<br><br>
            E-mail: <a href="#"><!--email_off-->mail@demolink.org<!--/email_off--></a>
          </address>
        </div>
        <div class="grid_3">
        <h3>Locations</h3>
          <p class="">
           8901 Marmora Road<br>Glasgow, DO4 89GR.<br><br>Get Directions
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/js/script.js"></script>

<script type="text/javascript"> 
          google_api_map_init(); 
          function google_api_map_init(){ 
            var map; 
            var coordData = new google.maps.LatLng(parseFloat(62.4422), parseFloat(-114.3975,14)); 
            var markCoord1 = new google.maps.LatLng(parseFloat(40.643180), parseFloat(-73.9874068,14)); 
             var markCoord2 = new google.maps.LatLng(parseFloat(40.6422180), parseFloat(-73.9784068,14)); 
             var markCoord3 = new google.maps.LatLng(parseFloat(40.6482180), parseFloat(-73.9724068,14)); 
             var markCoord4 = new google.maps.LatLng(parseFloat(40.6442180), parseFloat(-73.9664068,14)); 
             var markCoord5 = new google.maps.LatLng(parseFloat(40.6379180), parseFloat(-73.9552068,14)); 
            var marker; 
 
            var styleArray = [
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": 43
            },
            {
                "lightness": -11
            },
            {
                "hue": "#0088ff"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 99
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "lightness": 54
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ece2d9"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ccdca1"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#767676"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#EBE5E0"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    }
  ]
             
            var markerIcon = { 
                url: "<?php echo $this->baseUrl;?>/templates/<?php echo $this->template;?>/images/gmap_marker.png", 
                size: new google.maps.Size(42, 65), 
                origin: new google.maps.Point(0,0), 
                anchor: new google.maps.Point(-180, 50) 
            }; 
            
            function initialize() { 
              var mapOptions = { 
                zoom: 14, 
                center: coordData, 
                scrollwheel: false, 
                styles: styleArray 
              } 
               
              var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); 
              marker = new google.maps.Marker({ 
                map:map, 
                position: markCoord1, 
                icon: markerIcon
              }); 


            google.maps.event.addDomListener(window, 'resize', function() {

              map.setCenter(coordData);

              var center = map.getCenter();
            });
          }

            google.maps.event.addDomListener(window, "load", initialize); 

          } 



           
      </script>
</body>
</html>