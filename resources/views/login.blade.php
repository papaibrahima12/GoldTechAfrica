<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Official website of Gold Tech Africa">
    <meta name="author" content="GoldTech">

    <!-- Website Title -->
    <title>Connexion</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/logogoldtech.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <a class="navbar-brand logo-text page-scroll" href="{{ url('/') }}">Gold Tech Africa</a>

        <!-- Image Logo -->
        {{-- <a class="navbar-brand logo-image" href="{{ url('/') }}"><p class="text-orange">Gold Tech Africa</p></a>  --}}
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('register') }}">Inscription <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="{{ route('login') }}">Connexion</a>
                </li>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Se connecter à la plateforme e-learning</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Vos informations</strong> sont nécessaires pour compléter l'inscription</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>C'est en sécurité avec nous</strong> et ne sera pas utilisé à des fins de marketing</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Vous recevrez</strong> un email de confirmation en moins de 24h.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lt-6">

                    <!-- Registration Form -->
                    <div class="form-container">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                
                
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                
                                <x-text-input id="email" class="form-control-input" type="email" name="email" :value="old('email')" required />
                
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label  for="password" :value="__('Password')" />
                
                                <x-text-input id="password" class="form-control-input"
                                                type="password"
                                                name="password"
                                                required autocomplete="current-password" />
                
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                 @endif
                
                                <x-primary-button class="ml-4">
                                    {{ __('Se Connecter') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>