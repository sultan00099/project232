<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP</title>
    <link rel="stylesheet" href="onlineshop/onlineshop.css">
         <!--Fonts-->    
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
         <!-- Localization(jquery)-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!--TweenMax animation-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>

<body>
<div id="Header">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
			<div class="container-fluid">
				<button class = "navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="collapse navbar-collapse" id="Navbar">
				<ul class="mr-auto navbar-nav" id ="navbarToggle">
					
					@php $locale = session()->get('locale'); @endphp
					<li class="nav-item dropdown">
						 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                     @switch($locale)
                        @case('en')
                                <img src="{{asset('onlineshop/img/USA.png')}}" width="45px"> {{__('English') }}
                               @break
                          @case('ru')
                                <img  src="{{asset('onlineshop/img/ru.png')}}" width="45px"> {{__('Russian') }}
                                @break
                          @case('gm')
                                <img src="{{asset('onlineshop/img/germ.png')}}" width="45px"> {{__('German') }}
                                @break
                         @default
                                <img  src="{{asset('onlineshop/img/USA.png')}}" width="45px"> English
                            @endswitch

						<span class="caret"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/en"><img src="{{asset('onlineshop/img/USA.png')}}" width="45px"> English</a>
                            <a class="dropdown-item" href="/ru"><img src="{{asset('onlineshop/img/ru.png')}}" width="45px"> Russian</a>
                            <a class="dropdown-item" href="/gm"><img src="{{asset('onlineshop/img/germ.png')}}" width="45px"> German</a>

                        </div>
					</li>
				</ul>
				</div>
			</div>
		</nav>
        </div>
 <main class="py-4">
        @yield('content')
    </main>

	</div>


    <div class="navigation">
        <!--header part started-->
        <div class="logo">
            <img src="onlineshop/img/logotype.png" alt="logotype" class="logotype">
        </div>

        <div class="nav-menu">
            <ul class="menu">
                <li class="nav-item"><a href="#" class="nav-link">{{__('Men')}}</a></li>
                <li class="nav-item"><a href="#" class="nav-link">{{__('Women')}}</a></li>
                <li class="nav-item"><a href="#" class="nav-link">{{__('Boys')}}</a></li>
                <li class="nav-item"><a href="#" class="nav-link">{{__('Girls')}}</a></li>
            </ul>
        </div>
        <div class="search-block">
            <div class="search">
                <input type="text" class="search-form" placeholder="Search...">
                <a href="#" class="search-btn"><i class="fas fa-search"></i></a>
            </div>
        </div>
        <div class="personal-item">
            <div class="auth">
                <div class="login"><a href="#" class="auth-link signIn"><i class="fas fa-user-circle"></i>{{__('Feedback')}}</a>
                </div>
                <div class="car"><a href="#" class="auth-link"><i class="fas fa-shopping-cart"></i>{{__('Basket')}}</a></div>
            </div>
        </div>
    </div>
    <!--header part ended-->
   
<form action="/feedback" method="post" enctype="multipart/form-data">
@csrf
    <div class="sign-block">
        <div class="sign">
            <a href="#" class="exit"><i class="fas fa-times"></i></a>
            <h4 class="sign-head">{{__('Feedback')}}</h4>
            <div class="input-data">
                <input type="text" name="name" placeholder="Введите имя" id="">
            </div>
            <div class="input-data">
                <input type="text" name="email" placeholder="Введите email" id="">
            </div>
            <div class="input-data">
                <input type="text" name="message" placeholder="Введите сообщение" id="">
            </div>
            <div class="input-data">
                <input type="file" name="file" id="image">
            </div>

            <div class="input-btn">
                <input type="submit" value="{{__('Send')}}" id="feedback">
            </div>

            <!--<p class="notReg">Еще не зарегистрированы?</p>
            <div class="input-btn notReg-btn">
                <input type="submit" value="Зарегистрироваться">
            </div>-->

        </div>
    </div>
</form>

    <!--mobile version-->
    <div class="mobile-navigation">
        <a href="#" class="burger-link">
            <span></span>
        </a>
        <div class="mobile-nav">
            <ul class="mobile-menu">
                <li class="menu-item">
                    <a href="#" class="menu-link signInMobile">{{__('Feedback')}}</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">{{__('Men')}}</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">{{__('Women')}}</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">{{__('Boys')}}</a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">{{__('Girls')}}</a>
                </li>
            </ul>
        </div>
    </div>
    <!--mobile version ended-->

    <div class="main-information">
        <div class="text-inform">
            <h1>{{__('The new')}} <strong>990</strong></h1>
            <p class="tagline">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            <div class="inform-link">
                <div class="inform-btn read">{{__('Learn more')}}</div>
                <div class="inform-btn shop">{{__('Order')}} &nbsp;&nbsp;{{__('now')}}</div>
            </div>
        </div>
        <div class="photo-model">
            <img src="onlineshop/img/model.png" alt="model">
        </div>
    </div>

    <div class="social">
        <div class="find">
            <a href="#" class="findStore"><i class="fas fa-map-marker-alt"></i>{{__('Find')}}</a>
            <a href="{{route('sending')}}" class="nav-link">{{__('Mail Sending')}}</a>
        </div>
        
        <div class="social-menu">
            <h4 class="connect"><b>{{__('Feedback')}}</b></h4>

            <ul class="social-icon">
                <li><a href="#" class="social-link"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-vk"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a></li>
                <li><a href="#" class="social-link"><i class="fab fa-google"></i></a></li>
            </ul>
        </div>
    </div>

    <div class="maps-block">
        <div class="maps">
            <a href="#" class="exit exitMaps"><i class="fas fa-times"></i></a>
            <iframe class="mapStore"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23260.622517713142!2d76.90676453862898!3d43.21834368965263!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836f02727fa5fd%3A0xaf3983a493e72211!2sNew%20Balance!5e0!3m2!1sru!2skz!4v1617625170025!5m2!1sru!2skz"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            /*TweenMax.from(".text-inform h1", 1, {
                delay: .4,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".tagline", 1, {
                delay: .7,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".inform-btn", 1, {
                delay: 1,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".photo-model", 1, {
                delay: .4,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".logo", 1, {
                delay: 1.8,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".menu", 1, {
                delay: 2.0,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".search-block", 1, {
                delay: 2.2,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".personal-item", 1, {
                delay: 2.4,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".find", 1, {
                delay: 2.6,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".connect", 1, {
                delay: 2.8,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".social-icon", 1, {
                delay: 3.0,
                y: 20,
                opacity: 0,
                ease: Expo.easeInOut
            });

            TweenMax.from(".burger-link", 1, {
                delay: 3,
                y: -20,
                opacity: 0,
                ease: Expo.easeInOut
            });*/

            var link = $('.burger-link');
            var link_active = $('.burger-link_active');
            var navigation = $('.mobile-nav');
            var nav_active = $('.nav-active');
            var sign = $('.signIn');
            var signBlock = $('.sign-block');
            var signBlock_active = $('.sign-block_active');
            var exit = $('.exit');
            var signInMobile = $('.signInMobile');

            var findStore = $('.findStore');
            var mapsBlock = $('.maps-block');
            var mapsBlock_active = ('.maps-block_active');


            link.click(function () {
                link.toggleClass('burger-link_active');
                navigation.toggleClass('nav-active');
            });

            link_active.click(function () {
                navigation.removeClass('nav-active');
            });
            //sign-block active
            sign.click(function () {
                signBlock.toggleClass('sign-block_active');
            });

            signInMobile.click(function () {
                signBlock.toggleClass('sign-block_active');
                navigation.removeClass('nav-active');
                link.removeClass('burger-link_active');
            });
            exit.click(function () {
                signBlock.removeClass('sign-block_active');

            });

            findStore.click(function () {
                mapsBlock.toggleClass('maps-block_active');
            });
            exit.click(function () {
                signBlock.removeClass('sign-block_active');
                mapsBlock.removeClass('maps-block_active');
            });
        });
    </script>

</body>

</html>