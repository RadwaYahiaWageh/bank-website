<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="{{ URL::to('/') }}/guest/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
  <!-- ==== HEADER ==== -->
  <header class="container header">
    <!-- ==== NAVBAR ==== -->
    <nav class="nav">
      <div class="logo">
        <h2>Internet Banking</h2>
      </div>

      <div class="nav_menu" id="nav_menu">
        <button class="close_btn" id="close_btn">
          <i class="ri-close-fill"></i>
        </button>


      </div>

      <button class="toggle_btn" id="toggle_btn">
        <i class="ri-menu-line"></i>
      </button>
    </nav>
  </header>

  <section class="wrapper">
    <div class="container">
      <div class="grid-cols-2">
        <div class="grid-item-1">
          <h1 class="main-heading">
            Welcome to <span>Internet Banking.</span>
            <br />

          </h1>
          <p class="info-text">
            Banking, Redefined: Innovate, Integrate, Inspire.
          </p>

          <div class="btn_wrapper">
            <button class="btn view_more_btn">
              <a href="{{ route('login') }}">Log In<i class="ri-arrow-right-line"></i></a>
            </button>
            @if (Route::has('register'))
                <button class="btn documentation_btn"><a href="{{ route('register') }}">Register</a></button>
            @endif
            
          </div>
        </div>
        <div class="grid-item-2">
          <div class="team_img_wrapper">
            <img src="{{ URL::to('/') }}/guest/img/team.svg" alt="team-img" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
      <div class="grid-cols-3">
        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
          </div>
          <div class="featured_info">
            <span class="title">Online Transactions </span>
            <p>
              Experience easy, secure online transactions with our platform,
              Send money locally or internationally with just a few clicks!
            </p>
          </div>
        </div>
        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
            </svg>
          </div>
          <div class="featured_info">
            <span class="title">Pay Bills</span>
            <p>
              Streamline your bill payments with our convenient service.
              Manage all your bills in one place—from utilities to rent—and set up automatic payments!
            </p>
          </div>
        </div>

        <div class="grid-col-item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </div>
          <div class="featured_info">
            <span class="title">Account History</span>
            <p>
              Easily monitor your finances with our Account History feature.
              Access transaction details, search for specific activities,
              and manage your finances efficiently at any time!
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer></footer>

  <!-- ==== ANIMATE ON SCROLL JS CDN -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- ==== GSAP CDN ==== -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
  <!-- ==== SCRIPT.JS ==== -->
  <script src="{{ URL::to('/') }}/guest/script.js" defer></script>
</body>

</html>
