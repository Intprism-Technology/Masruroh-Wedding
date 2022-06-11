@php
#if (strpos($_SERVER['HTTP_HOST'], '127.0.0.1') !== false) {
#    echo "Yes this is indeed the banana.com domain";
#}
@endphp
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#">
    <meta name=title content="{{$data['pria']['short_name']}} Wedding">
    <meta name=author content="Afif Burhanuddin Nur">
    <meta name=language content="Indonesia">
    <meta name=description content="{{$data['pria']['short_name']}} are getting married on {{$data['pria']['akad_date']['day']}}, {{$data['pria']['date']}}.">
    <meta name=keywords content="datengdong,undangan,pernikahan,online,website,wedding,invitation">
    <meta property="og:title" content="{{$data['pria']['short_name']}} Wedding">
    <meta property="og:description" content="{{$data['pria']['short_name']}} are getting married on {{$data['pria']['akad_date']['day']}}, {{$data['pria']['date']}}.">
    <meta property="og:image" content="{{asset('assets/images/1638808563359.webp')}}">
    <title>{{$data['pria']['short_name']}} Wedding</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simplelightbox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets/themes/style.css?v=1.2.1')}}">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="{{asset('assets/themes/evergreen/style.css?v=1.0.6')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-bottom navbar-light bg-light" id="bot-menu">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active"><a class="nav-link" href="#home"><svg width=1em height=1em
                        viewBox="0 0 491.398 491.398" class="bi bi-chat-text-fill" fill="currentColor"
                        xmlns="https://www.w3.org/2000/svg">
                        <g>
                            <g id="Icons_19_">
                                <path
                                    d="M481.765,220.422L276.474,15.123c-16.967-16.918-44.557-16.942-61.559,0.023L9.626,220.422 c-12.835,12.833-12.835,33.65,0,46.483c12.843,12.842,33.646,12.842,46.487,0l27.828-27.832v214.872 c0,19.343,15.682,35.024,35.027,35.024h74.826v-97.62c0-7.584,6.146-13.741,13.743-13.741h76.352 c7.59,0,13.739,6.157,13.739,13.741v97.621h74.813c19.346,0,35.027-15.681,35.027-35.024V239.091l27.812,27.815 c6.425,6.421,14.833,9.63,23.243,9.63c8.408,0,16.819-3.209,23.242-9.63C494.609,254.072,494.609,233.256,481.765,220.422z">
                            </g>
                        </g>
                    </svg><span class="d-none d-lg-block"> Home </span></a></li>
            <li class="nav-item"><a class="nav-link" href="#couple"><svg width=1em height=1em viewBox="0 0 16 16"
                        class="bi bi-heart-fill" fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path>
                    </svg><span class="d-none d-lg-block"> Couple </span></a></li>
            <li class="nav-item"><a class="nav-link" href="#event"><svg width=1em height=1em viewBox="0 0 16 16"
                        class="bi bi-calendar2-check-fill" fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 3.5c0-.276.244-.5.545-.5h10.91c.3 0 .545.224.545.5v1c0 .276-.244.5-.546.5H2.545C2.245 5 2 4.776 2 4.5v-1zm8.854 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z">
                        </path>
                    </svg><span class="d-none d-lg-block"> Event </span></a></li>
            <li class="nav-item"><a class="nav-link" href="#countdown"><i class="fa fa-map-location"></i><span class="d-none d-lg-block"> Location </span></a></li>
            <li class="nav-item"><a class="nav-link" href="#guestbook"><svg width=1em height=1em viewBox="0 0 16 16"
                        class="bi bi-chat-left-dots-fill" fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z">
                        </path>
                    </svg><span class="d-none d-lg-block"> Guest Book </span></a></li>
        </ul>
    </nav>
    <section
        style="background:url({{asset('assets/images/1638808563359.webp')}}) center no-repeat;"
        class="cover" id="home">
        <div class="title text-center">
            <div data-aos="fade-up" data-aos-delay="200">
                <h5 class="mt-4 mb-3 text-uppercase">Hello, You're Invited </h5>
                <div class="d-flex justify-content-center">
                    <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator.png alt="sparator"
                        class="mahkota">
                </div>
                <h5 class="font-weight mt-3 text-uppercase">The Wedding Of</h5>
                <h2 class="mt-5 mb-5 display-4">
                    {{$data['pria']['short_name']}}
                </h2>
                <h5 class="font-weight">{{$data['pria']['date']}}</h5>
                <br>
                <button type=button class="btn btn-md btn-secondary open_invitation px-5" style="z-index:100">Open
                    Invitation</button>
            </div>
        </div>
    </section>


    <section
        style="background:url({{asset('assets/images/1638808563359.webp')}}) center no-repeat;"
        class="curved page-holder bg-cover" id="particles-js">
        <div class="container">
            <header class="text-center text-white vh-100 row align-items-center justify-content-center">
                <div class="col" style="margin-bottom:100px;">
                    <br><br><br>
                    <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator.png alt="sparator"
                        style="max-width:120px;max-height:120px">
                    <h3 class="mt-2">The Wedding Of</h3>
                    <h1 class="display-1 font-weight-bold mb-4">{{$data['pria']['short_name']}}</h1>
                    <p class="lead mb-5">{{$data['pria']['date']}}</p>
                </div>
            </header>
        </div>
        <div class="custom-shape-divider-bottom-1610288749">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator-1.svg alt="">
        </div>
    </section>



    <section class="couple" id="couple">
        <br><br>
        <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator2.png alt="list" class="mb-3"
            style="max-height:60px" data-aos="zoom-in" data-aos-delay="100">
        <div class="d-flex w-100 align-items-center justify-content-center mb-3" data-aos="flip-up"
            data-aos-delay="200">
            <h2 class="caption">Groom & Bride</h2>
        </div>

        <div class="container" data-aos="fade-up">
            <i>السلام عليكم ورحمة الله وبركاته</i><br><br>
            Maha suci Allah SWT yang telah menciptakan makhluk-Nya berpasang-pasangan. <br>Ya Allah, perkenankanlah kami
            merangkai kasih sayang yang Kau ciptakan di antara putra-putri kami:<br><br>
        </div>

        <div class="col-lg-8 mx-auto mb-5">
            <div class="row">
                <div data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                    class="col-lg-5 text-center couples  order-1 ">
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="couple-ring">
                                <img src={{asset('assets/images/lilis.jpeg')}}
                                    alt="Lilis Photo" class="img-fluid">
                            </div>
                            <h2 class="mt-3">
                                <span style="font-size:1.6rem;color:#6792b7">{{$data['pria']['s_name']}}</span>
                                <span class="d-block mt-3 serif">{{$data['pria']['s_full_name']}}</span>
                            </h2>
                            <p>
                                {{$data['pria']['s_couple_sparator']}} <br>
                                <b>{{$data['pria']['s_parent_father']}}
                                    <br>&<br>{{$data['pria']['s_parent_mother']}}</b>
                            </p>


                            <div class="mt-4 socmed">
                                <a href="{{$data['pria']['s_instagram']}}" rel="nofollow" target="_blank"><img
                                        src=https://gurasanatalia.datengdong.com/images/instagram.png width=20px
                                        alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-delay="100" data-aos-duration="1000"
                    class="col-lg-5 text-center couples ">
                    <div class="row">
                        <div class="col-12 px-5">
                            <div class="couple-ring">
                                <img src={{asset('assets/images/afif.jpg')}}
                                    alt="Afif Photo" class="img-fluid">
                            </div>
                            <h2 class="mt-3">
                                <span style="font-size:1.6rem;color:#6792b7">{{$data['pria']['f_name']}}</span>
                                <span class="d-block mt-3 serif">{{$data['pria']['f_full_name']}}</span>
                            </h2>
                            <p>
                                {{$data['pria']['f_couple_sparator']}} <br>
                                <b>{{$data['pria']['f_parent_father']}}
                                    <br>&<br>{{$data['pria']['f_parent_mother']}}</b>
                            </p>


                            <div class="mt-4 socmed">
                                <a href="{{$data['pria']['f_instagram']}}" rel="nofollow" target="_blank"><img
                                        src=https://gurasanatalia.datengdong.com/images/instagram.png width=20px
                                        alt="instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000"
                    class="col-lg-2 end text-center">
                    &
                </div>
            </div>
        </div>
        <br><br><br><br>
    </section>



    <section class="location" id="event"
        style="background:url({{asset('assets/images/1638808563608.webp')}}) center center no-repeat;background-size: cover;">
        <div class="custom-shape-divider-top-1610288850">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator-1.svg alt="brush">
        </div>
        <div class="container py-5">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator.png alt="list" class="mb-3"
                style="max-height:50px" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex w-100 align-items-center justify-content-center mb-5" data-aos="flip-up"
                data-aos-delay="200">
                <h2 class="caption" style="color:#fff">Wedding Schedule</h2>
            </div>
            <div class="row row-eq-height justify-content-center mb-5">
                <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card information h-100">
                        <div class="card-body">
                            <h3 class="mt-4">Akad Nikah
                                <hr>
                            </h3>
                            <div class="row mt-4">
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['akad_date']['day']}} <br> {{$data['pria']['akad_date']['year']}}
                                </div>
                                <div class="col date">
                                    <span class="d-block">{{$data['pria']['akad_date']['day_num']}}</span>
                                    {{$data['pria']['akad_date']['month']}}
                                </div>
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['akad_date']['location']}}
                                </div>
                            </div>
                            <p class="desc-location mt-3">
                                {{$data['pria']['akad_date']['time_range']}} <br>
                                {{$data['pria']['akad_date']['address']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card information h-100">
                        <div class="card-body">
                            <h3 class="mt-4">Resepsi
                                <hr>
                            </h3>
                            <div class="row mt-4">
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['reception_date']['day']}} <br>
                                    {{$data['pria']['reception_date']['year']}}
                                </div>
                                <div class="col date">
                                    <span class="d-block">{{$data['pria']['reception_date']['day_num']}}</span>
                                    {{$data['pria']['reception_date']['month']}}
                                </div>
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['reception_date']['location']}}
                                </div>
                            </div>
                            <p class="desc-location mt-3">
                                {{$data['pria']['reception_date']['time_range']}} <br>
                                {{$data['pria']['reception_date']['address']}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card information h-100">
                        <div class="card-body">
                            <h3 class="mt-4">Resepsi
                                <hr>
                            </h3>
                            <div class="row mt-4">
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['reception_date_s']['day']}} <br>
                                    {{$data['pria']['reception_date_s']['year']}}
                                </div>
                                <div class="col date">
                                    <span class="d-block">{{$data['pria']['reception_date_s']['day_num']}}</span>
                                    {{$data['pria']['reception_date_s']['month']}}
                                </div>
                                <div class="col pt-1 font-weight-bold" style="font-size:0.9rem">
                                    {{$data['pria']['reception_date_s']['location']}}
                                </div>
                            </div>
                            <p class="desc-location mt-3">
                                {{$data['pria']['reception_date_s']['time_range']}} <br>
                                {{$data['pria']['reception_date_s']['address']}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1614342402">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator-1.svg alt="brush">
        </div>
    </section>

    <section id="countdown">
        <div class="container text-center mt-5">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator2.png alt="list" class="mb-3"
                style="max-height:50px" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex w-100 align-items-center justify-content-center mb-5 mt-2" data-aos="flip-up"
                data-aos-delay="200">
                <h2 class="caption">Time To Happy Day</h2>
            </div>
            <div class="col-lg-8 mt-5 mx-auto">
                <div class="row timer-wrapper">
                    <div class="col-lg-3 col-6 text-center" data-aos="fade-right" data-aos-delay="100">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="timer mb-3"><span class="days">00</span></h4>
                                <p class="my-0"><b>Days</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center" data-aos="fade-right" data-aos-delay="200">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="timer mb-3"><span class="hours">00</span></h4>
                                <p class="my-0"><b>Hours</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center" data-aos="fade-right" data-aos-delay="300">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="timer mb-3"><span class="minutes">00</span></h4>
                                <p class="my-0"><b>Minutes</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6 text-center" data-aos="fade-right" data-aos-delay="400">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="timer mb-3"><span class="seconds">00</span></h4>
                                <p class="my-0"><b>Seconds</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <br><br>
                <a href="https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20220724T000000Z%2F20220725T160000Z&text=Afif%20%26%20Lilis%20Wedding&details=Afif%20%26%20Lilis%20Wedding%0A%0AResepsi%20di%20kediaman%20mempelai%20putri%20(24%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FTkSJ387pebujwYNY6%0A%0AResepsi%20di%20kediaman%20mempelai%20pria%20(25%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FDcNhtbiEnCt86Pyj9&location=Kediaman%20Mempelai&allday=false"
                    target="_blank" class="btn btn-secondary mt-2 mx-1" data-aos="fade-up" data-aos-delay="600">Google
                    Calendar</a>
                <a href="https://calendar.yahoo.com/?v=60&title=Afif%20%26%20Lilis%20Wedding&desc=Afif%20%26%20Lilis%20Wedding%0A%0AResepsi%20di%20kediaman%20mempelai%20putri%20(24%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FTkSJ387pebujwYNY6%0A%0AResepsi%20di%20kediaman%20mempelai%20pria%20(25%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FDcNhtbiEnCt86Pyj9&in_loc=Kediaman%20Mempelai&st=20220724T070000&dur=4000"
                    target="_blank" class="btn btn-secondary mt-2 mx-1" data-aos="fade-up" data-aos-delay="700">Yahoo
                    Calendar</a>
                <a href="https://outlook.live.com/calendar/0/deeplink/compose?rru=addevent&path=%2Fcalendar%2Faction%2Fcompose&startdt=2022-07-24T00%3A00%3A00Z&enddt=2022-07-25T16%3A00%3A00Z&subject=Afif%20%26%20Lilis%20Wedding&body=Afif%20%26%20Lilis%20Wedding%0A%0AResepsi%20di%20kediaman%20mempelai%20putri%20(24%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FTkSJ387pebujwYNY6%0A%0AResepsi%20di%20kediaman%20mempelai%20pria%20(25%20July%202022)%0AGoogle%20Maps%3A%20https%3A%2F%2Fgoo.gl%2Fmaps%2FDcNhtbiEnCt86Pyj9&location=Kediaman%20Mempelai&allday=false"
                    target="_blank" class="btn btn-secondary mt-2 mx-1" data-aos="fade-up" data-aos-delay="700">Outlook
                    Calendar</a>
                <br><br><br>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="alert alert-success">Lokasi Kediaman Mempelai Putri</div>
                    <a target="_blank"
                    href="https://maps.google.com/maps?ll=-7.433975,112.434902&z=12&t=m&hl=en&gl=US&mapclient=embed&q=7%C2%B026%2702.3%22S%20112%C2%B026%2705.7%22E%20-7.433976%2C%20112.434902@-7.4339755,112.4349021"
                    class="btn btn-primary mt-1 mb-2 mx-1" data-aos="fade-up" data-aos-delay="500">Open Google Map</a>
                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-7.433975518526124,%20112.43490208190335+(Lilis%20Putri%20Rizqiyah)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
                <div class="col-6">
                    <div class="alert alert-success">Lokasi Kediaman Mempelai Pria</div>
                    <a target="_blank"
                    href="https://maps.google.com/maps?ll=-7.431464,112.414088&z=12&t=m&hl=en&gl=US&mapclient=embed&q=7%C2%B025%2753.3%22S%20112%C2%B024%2750.7%22E%20-7.431464%2C%20112.414088@-7.431464,112.4140877"
                    class="btn btn-primary mt-1 mb-2 mx-1" data-aos="fade-up" data-aos-delay="500">Open Google Map</a>
                    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=-7.431464020941175,%20112.41408769379359+(Afif%20Burhanuddin%20Nur)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <section class="gallery" id="gallery" style="display:none;">
        <div class="container mb-5">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator2.png alt="list" class="mb-3"
                style="max-height:50px" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex w-100 align-items-center justify-content-center mb-5" data-aos="flip-up"
                data-aos-delay="200">
                <h2 class="caption">Our Gallery</h2>
            </div>

            <div class="col-lg-12">
            <div class="row">
                    <div class="col-md-3 col-6 py-2 px-2 frame" data-aos="zoom-in" data-aos-delay="100">
                        <a href="https://demo.datengdong.com/uploads/original/gallery/1949d9111354e8962623050b26440179f5caddd0.jpg">
                            <img src=https://demo.datengdong.com/uploads/thumbs/gallery/1949d9111354e8962623050b26440179f5caddd0MS.jpg alt="Gallery 1" class="img-fluid" style="border:unset !important;"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <section class="parallax text-center mt-5"
        style="background-image: url({{asset('assets/images/2.webp')}});">
        <div class="container">
            <div class="col-md-12 pt-4">
                <p><span>"</span>Tidak ada solusi yang lebih baik bagi dua insan yang saling mencintai di banding
                    pernikahan.<span>"</span></p>
                <h3 class="mb-5">HR. Ibnu Majah</h3>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1614342402">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator-1.svg alt="brush">
        </div>
    </section>
    <section class="guestbook left-flower right-flower" id="guestbook">
        <div class="container">
            <img src=https://gurasanatalia.datengdong.com/themes/evergreen/images/sparator2.png alt="list" class="mb-2"
                style="max-height:50px" data-aos="zoom-in" data-aos-delay="100">
            <div class="d-flex w-100 align-items-center justify-content-center mb-5" data-aos="flip-up"
                data-aos-delay="200">
                <h2 class="caption">Guest Book</h2>
            </div>
        </div>
        <div class="container">
            {!!$successComment!!}
            <div class="col-lg-9 mx-auto">
                <div class="card border-0 shadow">
                    <div class="card-body text-left">
                        <form method="POST" action="{{route('store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="guestName">Nama</label>
                                <input type=text class="form-control" id="guestName" name=name value="{{$visitor??''}}"
                                    placeholder="Your Name" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="attendance">Kedatangan</label>
                                <select class="form-control" id="attendance" name=attendance required>
                                    <option value="1">Hadir</option>
                                    <option value="0">Tidak Hadir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan/Doa</label>
                                <textarea class="form-control" id="message" name=comment rows="3" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type=submit class="btn btn-light btn-wedding">Kirim <img
                                        src=https://demo.datengdong.com/images/send-b.png alt="send icon"
                                        style="width:20px;margin-left:5px"></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="show-guest-book px-2 mt-5 pt-5">
            <div class="container text-left">
                <div class="row justify-content-md-center">
                    @foreach($allComment as $comment)
                    <div class="col-md-12 mb-3">
                        <div class="media px-3 media-comment">
                            <img class="rounded-circle mr-3 d-none d-sm-block d-md-block d-lg-block"
                                src=https://na.ui-avatars.com/api/?name=kak-yulia-frastika&size=50&background=1d9a79&color=ffffff
                                alt="Image Avatar">
                            <div class="media-body">
                                <div class="mb-2">
                                    <h5 class="h6 mb-0 text-secondary">{{$comment->name}}</h5>
                                    <small class="text-muted">{{date_format($comment->created_at, 'D F Y H:i')}}</small>
                                </div>

                                <p>{!!$comment->comment!!}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div style="height:50px;width:60px;position: absolute;bottom:0;z-index:-1;visibility: hidden;">
        <audio id="player" autoplay loop>
            <source src=https://gurasanatalia.datengdong.com/uploads/musics/04.mp3 type=audio/mp3> </audio> </div> <div
                class="play-pause btn-play-pause" id="button-control"><img
                src=https://demo.datengdong.com/images/play-pause.svg alt="play pause" width=25px></div>
    <button type=button class="btn-donation" data-toggle="modal" data-target="#modalGift">
        <img src=https://demo.datengdong.com/images/gift-donation.png alt="donation"
            style="width:18px;margin-right:5px"> Kirim Hadiah
    </button>
    <div class="modal fade" id="modalGift" tabindex="-1" role="dialog" aria-labelledby="modalGiftLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalGiftLabel">Kirim Hadiah</h5>
                    <button type=button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center mb-3">
                        <img src=https://demo.datengdong.com/images/love.png alt="donation" style="max-width: 60px;">
                        <h5 class="font-bold text-center">Kirim Hadiah<br><small>{{$data['pria']['short_name']}}</small></h5>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <b>Mandiri </b><br>
                            <span onClick='copyText(this)'>1560015175435 <img
                                    src=https://demo.datengdong.com/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Afif Burhanuddin Nur <br>

                        </div>
                        <div class="col-4">
                            <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/a/ad/Bank_Mandiri_logo_2016.svg/2560px-Bank_Mandiri_logo_2016.svg.png alt="Bank "
                                style="width:100%;margin-top:25px">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <b>BRI </b><br>
                            <span onClick='copyText(this)'>1560015175435 <img
                                    src=https://demo.datengdong.com/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Lilis Putri Rizqiyah <br>

                        </div>
                        <div class="col-4">
                            <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png alt="Bank "
                                style="width:100%;margin-top:25px">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <b>Dana </b><br>
                            <span onClick='copyText(this)'>081233221294 <img
                                    src=https://demo.datengdong.com/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Afif Burhanuddin Nur <br>

                        </div>
                        <div class="col-4">
                            <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Logo_dana_blue.svg/1200px-Logo_dana_blue.svg.png alt="Bank "
                                style="width:100%;margin-top:25px">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <b>ShopeePay </b><br>
                            <span onClick='copyText(this)'>081233221294 <img
                                    src=https://demo.datengdong.com/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Afif Burhanuddin Nur <br>

                        </div>
                        <div class="col-4">
                            <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Shopee.svg/2560px-Shopee.svg.png alt="Bank "
                                style="width:100%;margin-top:25px">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-8">
                            <b>OVO </b><br>
                            <span onClick='copyText(this)'>081233221294 <img
                                    src=https://demo.datengdong.com/images/copy.png
                                    style="height:13px;margin-top:-5px;cursor:pointer"></span><br>
                            a/n Afif Burhanuddin Nur <br>

                        </div>
                        <div class="col-4">
                            <img src=https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png alt="Bank "
                                style="width:100%;margin-top:25px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="play-pause btn-play-pause" id="button-control">
        <img src=https://gurasanatalia.datengdong.com/images/play-pause.svg alt="play pause" width=25px>
    </div>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js> </script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js> </script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.17.3/simple-lightbox.min.js> </script>
    <script src=https://unpkg.com/aos@2.3.1/dist/aos.js> </script>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.8/plyr.css">
    <script src=https://cdn.plyr.io/3.6.8/plyr.js></script>
    <script src=https://gurasanatalia.datengdong.com/js/musicv2.js?v=1.0.0> </script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js> </script>
    <script src=https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script>
        AOS.init();
        $('.gallery a').simpleLightbox({
            docClose: false,
            disableScroll: true,
            disableRightClick: true
        });
        var countDownDate = new Date("{{$data['pria']['date']}} {{$data['pria']['hour']}}").getTime(),
            x = setInterval(function () {
                var e = (new Date).getTime(),
                    n = countDownDate - e,
                    t = Math.floor(n / 864e5),
                    a = Math.floor(n % 864e5 / 36e5),
                    o = Math.floor(n % 36e5 / 6e4),
                    m = Math.floor(n % 6e4 / 1e3);
                document.getElementsByClassName("days")[0].innerHTML = t, document.getElementsByClassName("hours")[
                        0].innerHTML = a, document.getElementsByClassName("minutes")[0].innerHTML = o, document
                    .getElementsByClassName("seconds")[0].innerHTML = m, n < 0 && (clearInterval(x), document
                        .getElementsByClassName("expired").innerHTML = "EXPIRED")
            }, 1e3);

    </script>
    <script src=https://gurasanatalia.datengdong.com/themes/evergreen/custom.js> </script>
    <script>
        window.addEventListener("contextmenu", function (e) {
            e.preventDefault()
        }, !1);
        function copyText(element) {
            var range, selection, worked;

            if (document.body.createTextRange) {
                range = document.body.createTextRange();
                range.moveToElementText(element);
                range.select();
            } else if (window.getSelection) {
                selection = window.getSelection();
                range = document.createRange();
                range.selectNodeContents(element);
                selection.removeAllRanges();
                selection.addRange(range);
            }

            try {
                document.execCommand('copy');
                alert('Number copied');
            }
            catch (err) {
                alert('Unable to copy number');
            }
        }
    </script>
</body>

</html>
