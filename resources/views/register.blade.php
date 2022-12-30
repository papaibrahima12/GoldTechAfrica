<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Official website of Gold Tech Africa">
    <meta name="author" content="GoldTech">

    <!-- Website Title -->
    <title>Inscription</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/goldtech.png">
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
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">

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
                        <h2>S'inscrire à la plateforme e-learning</h2>
                        <p>Voulez vous s'inscrire à un cours ?
                        C'est facile, il suffit de remplir le formulaire et de cliquer sur soumettre.
                        Ensuite, vous serez inscrit à l'un de nos cours </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Vos informations</strong> sont nécessaires pour compléter l'inscription</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>C'est en sécurité avec nous</strong> et ne sera pas utilisé à des fins de marketing</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container">

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                
                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                
                                <x-text-input id="name" class="form-control-input" type="text" name="name" :value="old('name')" required autofocus />
                
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                
                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                
                                <x-text-input id="email" class="form-control-input" type="email" name="email" :value="old('email')" required />
                
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                
                            <div class="mt-4">
                                <x-input-label for="phone" :value="__('Phone')" />
                
                                <x-text-input id="email" class="form-control-input" type="text" name="phone" required />
                
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                
                            <div class="mt-4">
                                <x-input-label for="classe" :value="__('Classe')" />
                
                                <x-text-input id="classe" class="form-control-input" type="text" name="classe" required />
                
                                <x-input-error :messages="$errors->get('classe')" class="mt-2" />
                            </div>
                
                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label  for="password" :value="__('Password')" />
                
                                <x-text-input id="password" class="form-control-input"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password"/>
                
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                
                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                
                                <x-text-input id="password_confirmation" class="form-control-input"
                                                type="password"
                                                name="password_confirmation" required autocomplete="new-password"/>
                
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                
                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                
                                <x-primary-button class="ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>
                        </form>

                        {{-- <form method="POST" id="registrationForm" data-toggle="validator" data-focus="false" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control-input" id="name" name="name" required>
                                <label class="label-control" for="name">Nom Complet</label>
                                <div class="help-block with-errors"></div> 
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="email" name="email" required>
                                <label class="label-control" for="email">Adresse Email</label>
                                <div class="help-block with-errors"></div> 
                            </div>
                            {{-- <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="phone" required>
                                <label class="label-control" for="phone">Numéro de Téléphone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rclasse" name="classe" required>
                                <label class="label-control" for="password_confirmation">Classe</label>
                                <div class="help-block with-errors"></div>
                            </div> --}}
                            {{-- <div class="form-group">
                                <input type="password" class="form-control-input" id="password" name="password" required autocomplete="new-password">
                                <label class="label-control" for="password">Mot de passe</label>
                                <div class="help-block with-errors"></div>                            
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control-input" id="password_confirmation" name="password_confirmation" required>
                                <label class="label-control" for="password_confirmation">Confirmez le Mot de passe</label>
                                <div class="help-block with-errors"></div> 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">S'inscrire</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div> --}}
                        {{-- </form> --}}
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