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
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="body">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#instructor">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#projects">Nos Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#register">Inscription <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('login') }}">Connexion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>  
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown"></div>
                        <h1>Gold Tech Africa</h1>
                        <p class="p-large">Gold Tech est une initiative qui fait dans la gouvernance locale et le d??veloppement. En associant ces derniers avec la technologie nous obtenons un terrain favorable ?? un avenir meilleur pour les populations africaines. </p>
                        <a class="btn-outline-lg page-scroll" href="#instructor">Vision</a>
                    </div>
                </div> 
            </div> 
        </div> 
        
      
        <div class="outer-container">
            <div class="slider-container">
                <div class="swiper-container image-slider-1">
                    <div class="swiper-wrapper">
                     
                        <div class="swiper-slide" >
                            <img class="img-fluid" src="images/gold1.jpg" alt="alternative">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-g1">Gouvernance Locale et d??veloppement de technologies</p>
                            </div>
                        </div>
                     

                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/gold2.jpg" alt="alternative">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-g1">Solutions digitales et num??riques</p>
                            </div>
                        </div>
                      

                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/gold3.jpg" alt="alternative">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-g1">Apprentissages,Formations en pr??sentiel et Applications</p>
                            </div>
                        </div>

                    </div> 
                    
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                   
                </div> 
            </div>
        </div>
        

    </header>

    


    <!-- Registration -->
    <div id="register" class="form-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>S'inscrire ?? la plateforme e-learning</h2>
                        <p>Voulez vous s'inscrire ?? un cours ?
                        C'est facile, il suffit de remplir le formulaire et de cliquer sur soumettre.
                        Ensuite, vous serez inscrit ?? l'un de nos cours </p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Vos informations</strong> sont n??cessaires pour compl??ter l'inscription</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>C'est en s??curit?? avec nous</strong> et ne sera pas utilis?? ?? des fins de marketing</div>
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
                                <x-input-label for="phone" :value="__('Telephone')" />
                
                                <x-text-input id="email" class="form-control-input" type="text" name="phone" required />
                
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                
                            <div class="mt-4">
                                <x-input-label for="classe" :value="__('Niveau')" />
                
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
                                <label class="label-control" for="phone">Num??ro de T??l??phone</label>
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
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/goldtech.png" width="350px" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container center">
                        <h2>Ce qui nous anime !</h2>
                        <p>L???Afrique Sub-saharien fait face au d??fi de la croissance d??mographie, avec une population en majorit?? jeune, g??n??ralement pas assez bien pr??par??e pour faire face aux enjeux du moment, notamment l???acc??s aux opportunit??s d???emploi.
                        <p>Cette jeunesse se retrouve coinc??e dans un engrenage qui appelle ?? une conjugaison d???efforts et a un sursaut d???orgueil pour imaginer et mettre en ??uvre des solutions innovatrices pour identifier et transformer positivement les opportunit??s disponibles dans cette soci??t?? mouvante.</p>
                        <p>La transition d??mographique signifie ??galement que l'offre de main-d'??uvre s'accro??t rapidement, ce qui repr??sente une opportunit?? d'acc??l??rer la croissance ??conomique et de r??duire la pauvret??. Si cette jeunesse est bien pr??par??e et que les syst??mes de gouvernance au niveau des pays s???am??liorent.</p>
                        <p>La perspective du d??veloppement commencerait ?? ??merger.</p>
                        <p>Le d??veloppement des technologies num??riques constitue une opportunit?? exceptionnelle ?? saisir pour pr??parer cette jeunesse ?? tirer le maximum des dividendes dans cette croissance rapide. Les technologies num??riques offrent aussi une opportunit?? pour am??liorer de mani??re durable,</p>
                        <p>la gouvernance aussi bien au niveau national que local et garantir une redistribution ??quitable des richesses pour les g??n??rations actuelles et futures.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of instructor -->

    <div id="description" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Nos Services</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg first">
                        <li class="media">
                            <i class="bullet">1</i>
                            <div class="media-body">
                                <h4>Educations num??riques(e-learning)</h4>
                                <p>Formation des enseignants, des ??l??ves et ??tudiants.
                                Mise en ligne des outils de formation num??rique pour les institutions d???enseignement.
                                Promotion des centres de formation num??riques.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">3</i>
                            <div class="media-body">
                                <h4>Entrepreneuriat des jeunes et de la femme</h4>
                                <p>Accompagnement des initiatives innovatrices et des incubateurs.
                                D??veloppement des produits num??riques de promotion du d??veloppement humain.
                                Formation et d??veloppement des partenariats pour l???accompagnement des entreprises.</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg second">
                        <li class="media">
                            <i class="bullet">2</i>
                            <div class="media-body">
                                <h4>Num??rique et Gouvernance Locale</h4>
                                <p>D??veloppement et promotion des applications dans le domaine de la sant??, nutrition, ??ducation, agriculture, etc.
                                Formation des jeunes sur les m??tiers du num??rique et leur placement dans les entreprises.
                                Accompagnement des entit??s d??centralis??es pour l???int??gration des outils num??riques dans la gouvernance locale.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->

    <!-- Project -->
    <div id="projects" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Nos Projets</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-13">
                    <ul class="list-unstyled li-space-lg first">
                        <li class="media">
                            <i class="bullet">1</i>
                            <div class="media-body">
                                <h4>D??veloppement d???un centre num??rique pilote dans la paroisse de Kiganda
                                    province du
                                    Muramvya, R??publique du Burundi</h4>
                                <p>Depuis l???ann??e scolaire 2011-2012, le Gouvernement Burundais a pris l???option d???introduire les Technologies de l???Information et de la Communication pour l???Education (TICE) dans le syst??me ??ducatif national.
                                Cependant, cette r??forme s???est heurt??e ?? beaucoup de d??fis, notamment le manque d???enseignants qualifi??s en TICS, le manque notoire de mat??riels informatiques, le probl??me d???acc??s ?? l?????lectricit??, l???insuffisance d'infrastructures ad??quates et de la connexion des ??coles et des diff??rents services ?? l???internet.
                            </p>
                            <p>
                            Ce projet vise ?? promouvoir le d??veloppement des espaces num??riques de travail(ENT) au sein des ??coles, pour permettre d???initier progressivement les enseignants et les ??coliers aux principes de base du num??rique.
                            Ces espaces num??riques serviront aussi comme cadre de formation professionnelle des jeunes filles et gar??ons, aux m??tiers du num??rique.
                            </p>
                            <p>
                            Ce mod??le vise ?? mobiliser divers acteurs(Gouvernement,partenaires techniques et financiers, soci??t?? civile, secteur priv??, diaspora burundaise, autres volontaires, etc.) pour d??velopper des mod??les qui peuvent servir de r??f??rence,
                            pour la mise ?? l?????chelle des reformes nationales en mati??re d?????ducation et de laformation des jeunes, particuli??rement l???int??gration du num??riqueau sein du syst??me scolaire.
                            </p>
                            <a class="btn-solid-reg" href="{{ url('/download') }}">T??l??charger</a>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of projects -->


    <!-- Students -->
    <div class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Nos Objectifs  </h2>
                        <p>Soutenir l?????mergence d???une g??n??ration entrepreneuriale et active dans le domaine des innovations et technologies num??riques appliqu??es ?? l?????ducation, ?? la Gouvernance et au d??veloppement en Afrique sub-saharienne</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox">En savoir plus</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/cible.png" alt="alternative">
                </div> 
            </div>
        </div> 
    </div> 
    


    <!-- Details Lightbox -->
	<div id="details-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="container">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close x-button">??</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/logogoldtech.png" alt="alternative" width="450px" height="450px">
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <h3>Les cours propos??s</h3>
                    <hr>
                    <h5>Pour tout le monde</h5>
                    <p>Les cours sont destin??s ?? tout apprenant aspirant ?? mieux consolider ses connaissances et avoir de solides acquis.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Ecoles Primaires et Secondaires</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">CEM et Lyc??es</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Formations Professionnelles (Developpement Web,Marketing Digital)</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Formations sp??ciales(Agriculture,...)</div>
                        </li>
                    </ul>
                    {{-- <a class="btn-solid-reg mfp-close page-scroll" href="#">S'inscrire</a> <a class="btn-outline-reg mfp-close as-button" href="#screenshots">Retour</a> --}}
                </div> 
            </div> 
        </div> 
    </div> 



    <!-- Video -->
    {{-- <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Course Video Presentation</h2>

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of video --> --}}


   
    <div class="cards">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Strat??gies</h2>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-chalkboard"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Promotion des espaces num??riques de travail</h4>
                            <p>Nous modernisons le service public en offrant ?? tous les usagers et ?? leurs familles des services num??riques pour apprendre ou accompagner la scolarit?? de leurs enfants</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-image">
                            <i class="far fa-handshake"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">D??veloppement de partenariats strat??giques</h4>
                            <p>Notre organisation analyse les objectifs strat??giques et d??termine si un partenariat est le meilleur m??canisme d'investissement pour atteindre un objectif donn??.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Formation et accompagnement technique</h4>
                            <p>Apprenez comment planifier votre strat??gie de marketing digital.
                            Renforcer la formation professionnelle et technique et les dispositifs d'accompagnement ?? l???insertion.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div> 
    <div id="contact" class="form-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Details du contact</h2>
                        <p>
                            Pour les questions d'inscription, veuillez nous contacter en utilisant les coordonn??es ci-dessous. Pour toute question utilisez le formulaire.</p>
                        <h3>Emplacement du bureau principal</h3>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Hann Mariste Dakar, Senegal</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-mobile-alt"></i>
                                <div class="media-body">+221775349745</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a class="light-gray" href="mailto:contact@goldtechafrica.net">contact@goldtechafrica.net</a> <i class="fas fa-globe"></i><a class="light-gray" href="http://www.goldtechafrica.net">www.goldtechafrica.net</a></div>
                            </li>
                        </ul>
                    </div> 
                </div> 
                
                <div class="col-lg-6">
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Nom</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Votre message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>J'ai lu et j'accepte les d??clarations de GoLD Tech <a href="privacy-policy.html">Politiques de confidentialit??s</a> et <a href="terms-conditions.html">Termes et Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Envoyer</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    

                </div> 
            </div> 
        </div>
    </div>
   
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-col first">
                        <h5>A propos de GoLD Tech</h5>
                        <p class="p-small">Nous sommes passionn??s par la gouvernance locale mais ??galement les TICS.</p>
                    </div>
                </div>
                 
                <div class="col-md-6">
                    <div class="footer-col third">
                        <h5>Liens utiles</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#instructor">A propos</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#description">Services</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><a href="#">Gallerie</a></div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end of col -->
                <div class="col-md-3">
                    <div class="footer-col fourth">
                        <h5>R??seaux sociaux</h5>
                        <p class="p-small">Pour les nouvelles et les mises ?? jour, suivez-nous</p>
                        <a href="https://www.facebook.com/profile.php?id=100066730981526" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/goldtechafrica2?s=11&t=oJCwbyEKXqWK3dgSsRFrCQ" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://instagram.com/gold_tech_africa?igshid=YWJhMjlhZTc" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/governance-and-local-development-technology/" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCnHdLSACxKQjRyZeAcrTRLQ" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div> 
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright ?? 2022 <a href="#">GoLD Tech Africa</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->    
    	
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