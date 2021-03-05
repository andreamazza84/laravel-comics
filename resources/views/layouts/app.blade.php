<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DC Comics') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Bebas+Neue&family=Passion+One&display=swap" rel="stylesheet">     
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> 
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header id="header">
            <nav class="menu-top">
                    <ul class="menu-right">
                        <li>
                            <a href="#">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                                    <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                                </svg>
                            </a>
                        </li> 
                        <li>
                            <a href="#">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                                    <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                                </svg>
                                universe
                            </a>
                        </li> 
                        <li>
                            <a href="#">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                                    <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                                </svg>
                                shop
                            </a>
                        </li> 
                        <li>
                            <a href="#">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                                    <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                                </svg>
                                community
                            </a>
                        </li> 
                        <li>
                            <a href="#">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                                    <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                                </svg>
                                on HBO
                            </a>
                        </li>  
                    </ul>
            </nav>
            <nav class="menu-bottom">
                <div class="container">
                    <a href="#" class="logo">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                            <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                        </svg>
                    </a>
                    <ul class="navbar">
                        <li><a href="#">characters</a></li>
                        <li><a href="#" class="active">comics</a></li>
                        <li><a href="#">movies</a></li>
                        <li><a href="#">tv</a></li>
                        <li><a href="#">games</a></li>
                        <li><a href="#">videos</a></li>
                        <li><a href="#">news</a></li>
                        <li><a href="#">shop</a></li>
                    </ul>
                    <div class="searchbar">
                        <div class="wrapper">
                            <input type="text" name="search" id="search" placeholder="Search">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

            </nav>
        </header>

        <main id="main">
            <section id="main-top">
                <div class="container">
                    <h1 class="tag">comics & graphic novels</h1>
                    <nav>
                        <ul class="menu-release">
                            <li><a class="active" href="#">this week</a></li>
                            <li><a href="#">last week</a></li>
                            <li><a href="#">next week</a></li>
                            <li><a href="#">upcoming</a></li>
                            <li><a href="#">see all</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="content">
                    <div class="card">
                        @yield('content')
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/BM_106_300-001_HD_60343a048f2af5.78911718.jpg') }}" alt=""></a>
                        <a href="#" class="title">batman #106</a>
                        <div class="available">available</div>
                        <div class="tag">comic book</div>
                        {{-- da inserire in content --}}
                    </div>

                    <div class="card">
                        @yield('content')
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/BM_106_300-001_HD_60343a048f2af5.78911718.jpg') }}" alt=""></a>
                        <a href="#" class="title">batman #106</a>
                        <div class="available">available</div>
                        <div class="tag">comic book</div>
                        {{-- da inserire in content --}}
                    </div>

                    <div class="card">
                        @yield('content')
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/BM_106_300-001_HD_60343a048f2af5.78911718.jpg') }}" alt=""></a>
                        <a href="#" class="title">batman #106</a>
                        <div class="available">available</div>
                        <div class="tag">comic book</div>
                        {{-- da inserire in content --}}
                    </div>

                    <div class="card">
                        @yield('content')
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/BM_106_300-001_HD_60343a048f2af5.78911718.jpg') }}" alt=""></a>
                        <a href="#" class="title">batman #106</a>
                        <div class="available">available</div>
                        <div class="tag">comic book</div>
                        {{-- da inserire in content --}}
                    </div>

                    <div class="card">
                        @yield('content')
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/BM_106_300-001_HD_60343a048f2af5.78911718.jpg') }}" alt=""></a>
                        <a href="#" class="title">batman #106</a>
                        <div class="available">available</div>
                        <div class="tag">comic book</div>
                        {{-- da inserire in content --}}
                    </div>
                </div>
            </section>
            <section id="main-center">
                <div class="container">
                    <div class="card">
                        <h1 class="tag">must reads</h1>
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/mustRead_DCC_5_v2_5f6b8b49bfd6a9.60761869.jpg') }}" alt=""></a>
                        <div class="advertise">get the inside track on all things dc</div>
                        <a href="#" class="title">dc connect</a>
                        <div class="description">The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</div>
                        {{-- da inserire in content --}}
                    </div>
                    <div class="card">
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/MUSTREAD_20190114_SandmanUniverse_5c3e4bab834ac9.58189616.jpg') }}" alt=""></a>
                        <div class="advertise">get the inside track on all things dc</div>
                        <a href="#" class="title">dc connect</a>
                        <div class="description">The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</div>
                        {{-- da inserire in content --}}
                    </div>
                    <div class="card">
                        {{-- da inserire in content --}}
                        <a class="cover" href="#"><img src="{{ asset('img/MUSTREAD_20190114_WonderComics_5c3e4b8d091c94.82772322.jpg') }}" alt=""></a>
                        <div class="advertise">get the inside track on all things dc</div>
                        <a href="#" class="title">dc connect</a>
                        <div class="description">The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</div>
                        {{-- da inserire in content --}}
                    </div>

                </div>
            </section>
            <section id="main-bottom">
                <div class="container">
                    <h1 class="tag">current series</h1>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>
                    <div class="card">
                        <a href="#" class="cover">
                            <img src="{{ asset('img/SeriesThumb5_Batman_5bd218c153e9a0.67359915.jpg') }}" alt="">
                        </a>
                        <a href="#" class="title">amercan vampire 1976</a>
                    </div>

                </div>
            </section>
        </main>

        <footer id="footer">
            <section id="footer-top">
                <div class="container">
                    <a href="#"><i class="fas fa-tag"></i>digital comics</a>
                    <a href="#"><i class="fas fa-tshirt"></i>dc merchandise</a>
                    <a href="#"><i class="far fa-address-card"></i>print subscriptions</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>comic shop locator</a>
                </div>
            </section>
            <section id="footer-center" style="background-image: url({{ asset('img/footer-bg.jpg') }})">
                <div class="background-logo">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="900.14px" height="900.141px" viewBox="0 0 900.14 900.141" enable-background="new 0 0 900.14 900.141" xml:space="preserve">
                        <path d="M450.069,0C201.503,0,0,201.503,0,450.071s201.503,450.07,450.069,450.07  c248.568,0,450.071-201.503,450.071-450.07S698.637,0,450.069,0z M33.109,450.071c0-48.351,8.128-95.443,24.204-140.321  l43.292,30.07v337.863c-13.458-20.62-25.057-42.439-34.743-65.328C44.137,560.971,33.109,506.372,33.109,450.071z M744.906,744.908  c-38.301,38.299-82.896,68.369-132.543,89.37c-51.384,21.736-105.984,32.753-162.293,32.753c-56.299,0-110.9-11.017-162.282-32.753  c-49.656-21.001-94.244-51.071-132.552-89.37c-12.079-12.089-23.34-24.795-33.757-38.094h230.427l90.743-65.694V283.555  l-90.743-67.571H104.923c14.725-21.659,31.534-41.959,50.313-60.747c38.308-38.309,82.896-68.378,132.552-89.373  c51.382-21.736,105.983-32.753,162.282-32.753c56.309,0,110.91,11.017,162.293,32.753c49.646,20.995,94.242,51.064,132.543,89.373  c18.788,18.787,35.586,39.088,50.312,60.747h-65.882l-14.8,32.679l-43.988-32.679h-102.34l-90.088,67.571V641.12l89.665,65.694  h210.888C768.256,720.113,756.992,732.819,744.906,744.908z M192.605,328.332h82.409c23.058,0,41.743,18.684,41.743,41.742v184.78  c0,23.05-18.685,41.741-41.743,41.741h-49.44V352.225L192.605,328.332z M810.533,659.841V532.432H693.907v64.163h-50.376  c-22.037,0-39.896-17.857-39.896-39.893v-204.43l-32.989-23.94h123.261v70.037h106.904l21.265-136.866  c4.355,8.586,8.43,17.352,12.2,26.275c21.736,51.383,32.756,105.983,32.756,162.292c0,56.301-11.02,110.9-32.756,162.284  C827.342,628.75,819.42,644.592,810.533,659.841z"/>
                    </svg>
                </div>
                <div class="container">
                    <div class="menu-container">
                        <div class="col-25">
                            <ul class="menu">
                                <li class="title">dc comics</li>    
                                <li><a href="#">characters</a></li>
                                <li><a href="#">comics</a></li>
                                <li><a href="#">movies</a></li>
                                <li><a href="#">TV</a></li>
                                <li><a href="#">games</a></li>
                                <li><a href="#">videos</a></li>
                                <li><a href="#">news</a></li>
                            </ul>
    
                            <ul class="menu">
                                <li class="title">shop</li>    
                                <li><a href="#">shop DC</a></li>
                                <li><a href="#">shop DC Collectibles</a></li>
                            </ul>
                        </div>

                        <div class="col-25">
                            <ul class="menu">
                                <li class="title">dc</li>    
                                <li><a href="#">terms of use</a></li>
                                <li><a href="#">privacy policy (new)</a></li>
                                <li><a href="#">advertising</a></li>
                                <li><a href="#">jobs</a></li>
                                <li><a href="#">subscriptions</a></li>
                                <li><a href="#">talent workshop</a></li>
                                <li><a href="#">CPSC cetificates</a></li>
                                <li><a href="#">ratings</a></li>
                                <li><a href="#">shop help</a></li>
                                <li><a href="#">contact us</a></li>
                            </ul>
                        </div>

                        <div class="col-25">
                            <ul class="menu">
                                <li class="title">sites</li>    
                                <li><a href="#">DC</a></li>
                                <li><a href="#">MAD magazine</a></li>
                                <li><a href="#">DC kids</a></li>
                                <li><a href="#">DC universe</a></li>
                                <li><a href="#">DC shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="terms-of-use">
                        All Site Content TM and &copy 2020 DC Entertainment, unless otherwise <a href="">noted here.</a> All rights reserved.<br><a href="#">Cookies Settings</a> 
                    </div>
                </div>
            </section>
            <section id="footer-bottom">
                <div class="container">
                    <a href="#" class="btn">sign-up now!</a>
                    <div class="social-container">
                        <span>follow us</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        
                    </div>
                </div>
            </section>
        </footer>
    </div>
</body>
</html>
