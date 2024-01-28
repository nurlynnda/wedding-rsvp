<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
    rel="stylesheet">
    <title>RSVP</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{url('assets/style.css')}}" rel="stylesheet">


</head>
<body>

   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <a href="#" id="logo">A&L</a>

      <nav id="navbar" >
          <a  href="#hero">Home</a>
          <a  href="#about">About</a>
          <a  href="#wishes">Wishes</a>
      </nav><!-- .navbar -->
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Wedding Invitation</h1>
          <br>
          <br>
          <h2>AZIZAH MYSARAH BINTI MOHAMMAD HOOD &
            LUQMAN NUL HAKIM BIN ROSLIZA</h2>
          <P>Will be deeply honoured by your gracious presence to share with us the joy that fills our hearts on splendid & festive of our wedding ceremony.</P>
          <div class="d-flex justify-content-center justify-content-lg-start">
          <a class="btn-get-started scrollto" href="{{ route('guests.create') }}">Sign Our Guestbook</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-1 hero-img"  data-aos-delay="200">
          <img src="assets/couple.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= About Us Section ======= -->
  <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Event Details</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
            With the permission of Allah, the Most Compassionate and Most Merciful, with hearts filled with gratitude, we,</p>
<p><b>Teacher Mohammad Hood bin Md. Noh
&
Teacher Norhana binti Yusof</b></p>

<p>Request the honor of the presence of Dato’ / Datin / Mr. / Mrs. / Mr. / Miss / Husband and Wife, and family to the Solemnization Ceremony of our beloved child,</p>

<p><b>AZIZAH MYSARAH BINTI MOHAMMAD HOOD

and her partner

LUQMAN NUL HAKIM BIN ROSLIZA
           </b> </p>
            
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p><b>Date: </b>Saturday, 17th February 2024</p>
            <p><b>Venue:</b>No 11, C Lot 2696 Kampung Mesjid 81500 Pekan Nenas, Johor</p>
            <p><b>بسم الله الرحمن الرحيم</b></p>
<p>"Allah, We ask for your blessings... Bless this wedding ceremony, 
  Walk perfectly as you wish, And may this marriage partner last forever until the end of life. Amen, Ya Rabbal Alamin…”</p>
            <a href="https://maps.app.goo.gl/panRLD77r3W4SCim9" class="btn-learn-more">Location</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <div >
        <br>
        @yield('content')
    </div>
    
</body>
</html>