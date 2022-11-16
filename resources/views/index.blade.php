<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="Official website of Gold Tech Africa">
    <meta name="author" content="GoldTech">



    <title>Gold Tech Africa</title>
    

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" href="images/logogoldtech.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">
    
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>    

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">

        <a class="navbar-brand logo-text page-scroll" href="{{ url('/') }}">Gold Tech Africa</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>

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

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Learning Center</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('register') }}"><span class="item-text">Inscription</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('login') }}"><span class="item-text">Connexion</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Cours gratuits</span></a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.facebook.com/profile.php?id=100066730981526">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x"></i>
                    </a>
                </span>
                <span class="fa-stack">
                    <a href="https://twitter.com/goldtechafrica2?s=11&t=oJCwbyEKXqWK3dgSsRFrCQ">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x"></i>
                    </a>
                </span>
            </span>
        </div>
    </nav>


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <div class="countdown"></div>
                        <h1>Gold Tech Africa</h1>
                        <p class="p-large">Gold Tech est une initiative qui fait dans la gouvernance locale et le développement. En associant ces derniers avec la technologie nous obtenons un terrain favorable à un avenir meilleur pour les populations africaines. </p>
                        <a class="btn-solid-lg page-scroll" href="#register">S'inscrire</a>
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
                                <p class="text-g1">Gouvernance Locale et développement de technologies</p>
                            </div>
                        </div>
                     

                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/gold2.jpg" alt="alternative">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-g1">Solutions digitales et numériques</p>
                            </div>
                        </div>
                      

                        <div class="swiper-slide">
                            <img class="img-fluid" src="images/gold3.jpg" alt="alternative">
                            <div class="carousel-caption d-none d-md-block">
                                <p class="text-g1">Apprentissages,Formations en présentiel et Applications</p>
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
                        <h2>S'inscrire en utilisant ce formulaire</h2>
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
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body"><strong>Vous recevrez</strong> un email de confirmation en moins de 24h.</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">

                    <!-- Registration Form -->
                    <div class="form-container">
                        <form id="registrationForm" data-toggle="validator" data-focus="false">
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rname" name="rname" required>
                                <label class="label-control" for="rname">Nom Complet</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="remail" name="remail" required>
                                <label class="label-control" for="remail">Adresse Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control-input" id="rphone" name="rphone" required>
                                <label class="label-control" for="rphone">Numéro de Téléphone</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="rterms" value="Agreed-to-Terms" name="rterms" required>J'ai lu et j'accepte les <a href="privacy-policy.html">Politiques de confidentatialités</a> et <a href="terms-conditions.html">Termes et Conditions</a>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">S'inscrire</button>
                            </div>
                            <div class="form-message">
                                <div id="rmsgSubmit" class="h3 text-center hidden"></div>
                            </div>
                        </form>
                    </div> <!-- end of form-container -->
                    <!-- end of registration form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of registration -->


    <!-- Instructor -->
    <div id="instructor" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/logogoldtech.png" width="550px" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container center">
                        <h2>Ce qui nous anime !</h2>
                        <p>L’Afrique Sub-saharien fait face au défi de la croissance démographie, avec une population en majorité jeune, généralement pas assez bien préparée pour faire face aux enjeux du moment, notamment l’accès aux opportunités d’emploi.
                        <p>Cette jeunesse se retrouve coincée dans un engrenage qui appelle à une conjugaison d’efforts et a un sursaut d’orgueil pour imaginer et mettre en œuvre des solutions innovatrices pour identifier et transformer positivement les opportunités disponibles dans cette société mouvante.</p>
                        <p>La transition démographique signifie également que l'offre de main-d'œuvre s'accroît rapidement, ce qui représente une opportunité d'accélérer la croissance économique et de réduire la pauvreté. Si cette jeunesse est bien préparée et que les systèmes de gouvernance au niveau des pays s’améliorent.</p>
                        <p>La perspective du développement commencerait à émerger.</p>
                        <p>Le développement des technologies numériques constitue une opportunité exceptionnelle à saisir pour préparer cette jeunesse à tirer le maximum des dividendes dans cette croissance rapide. Les technologies numériques offrent aussi une opportunité pour améliorer de manière durable,</p>
                        <p>la gouvernance aussi bien au niveau national que local et garantir une redistribution équitable des richesses pour les générations actuelles et futures.</p>
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
                                <h4>Educations numériques(e-learning)</h4>
                                <p>Formation des enseignants, des élèves et étudiants.
                                Mise en ligne des outils de formation numérique pour les institutions d’enseignement.
                                Promotion des centres de formation numériques.</p>
                            </div>
                        </li>
                        <li class="media">
                            <i class="bullet">3</i>
                            <div class="media-body">
                                <h4>Entrepreneuriat des jeunes et de la femme</h4>
                                <p>Accompagnement des initiatives innovatrices et des incubateurs.
                                Développement des produits numériques de promotion du développement humain.
                                Formation et développement des partenariats pour l’accompagnement des entreprises.</p>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <ul class="list-unstyled li-space-lg second">
                        <li class="media">
                            <i class="bullet">2</i>
                            <div class="media-body">
                                <h4>Numérique et Gouvernance Locale</h4>
                                <p>Développement et promotion des applications dans le domaine de la santé, nutrition, éducation, agriculture, etc.
                                Formation des jeunes sur les métiers du numérique et leur placement dans les entreprises.
                                Accompagnement des entités décentralisées pour l’intégration des outils numériques dans la gouvernance locale.
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
                                <h4>Développement d’un centre numérique pilote dans la paroisse de Kiganda
                                    province du
                                    Muramvya, République du Burundi</h4>
                                <p>Depuis l’année scolaire 2011-2012, le Gouvernement Burundais a pris l’option d’introduire les Technologies de l’Information et de la Communication pour l’Education (TICE) dans le système éducatif national.
                                Cependant, cette réforme s’est heurtée à beaucoup de défis, notamment le manque d’enseignants qualifiés en TICS, le manque notoire de matériels informatiques, le problème d’accès à l’électricité, l’insuffisance d'infrastructures adéquates et de la connexion des écoles et des différents services à l’internet.
                            </p>
                            <p>
                            Ce projet vise à promouvoir le développement des espaces numériques de travail(ENT) au sein des écoles, pour permettre d’initier progressivement les enseignants et les écoliers aux principes de base du numérique.
                            Ces espaces numériques serviront aussi comme cadre de formation professionnelle des jeunes filles et garçons, aux métiers du numérique.
                            </p>
                            <p>
                            Ce modèle vise à mobiliser divers acteurs(Gouvernement,partenaires techniques et financiers, société civile, secteur privé, diaspora burundaise, autres volontaires, etc.) pour développer des modèles qui peuvent servir de référence,
                            pour la mise à l’échelle des reformes nationales en matière d’éducation et de laformation des jeunes, particulièrement l’intégration du numériqueau sein du système scolaire.
                            </p>
                            <a class="btn-solid-reg" href="{{ url('/download') }}">Télécharger</a>
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
                        <p>Soutenir l’émergence d’une génération entrepreneuriale et active dans le domaine des innovations et technologies numériques appliquées à l’éducation, à la Gouvernance et au développement en Afrique sub-saharienne</p>
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
                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                <div class="col-lg-8">
                    <div class="image-container">
                        <img class="img-fluid" src="images/logogoldtech.png" alt="alternative" width="450px" height="450px">
                    </div> 
                </div> 
                <div class="col-lg-4">
                    <h3>Les cours proposés</h3>
                    <hr>
                    <h5>Pour tout le monde</h5>
                    <p>Les cours sont destinés à tout apprenant aspirant à mieux consolider ses connaissances et avoir de solides acquis.</p>
                    <ul class="list-unstyled li-space-lg">
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Ecoles Primaires et Secondaires</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">CEM et Lycées</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Formations Professionnelles (Developpement Web,Marketing Digital)</div>
                        </li>
                        <li class="media">
                            <i class="fas fa-square"></i><div class="media-body">Formations spéciales(Agriculture,...)</div>
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
                    <h2>Stratégies</h2>
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
                            <h4 class="card-title">Promotion des espaces numériques de travail</h4>
                            <p>Nous modernisons le service public en offrant à tous les usagers et à leurs familles des services numériques pour apprendre ou accompagner la scolarité de leurs enfants</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-image">
                            <i class="far fa-handshake"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Développement de partenariats stratégiques</h4>
                            <p>Notre organisation analyse les objectifs stratégiques et détermine si un partenariat est le meilleur mécanisme d'investissement pour atteindre un objectif donné.</p>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-image">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Formation et accompagnement technique</h4>
                            <p>Apprenez comment planifier votre stratégie de marketing digital.
                            Renforcer la formation professionnelle et technique et les dispositifs d'accompagnement à l’insertion.</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div> 

    <div class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>En vous abonnant à notre liste de diffusion, vous recevrez toujours les dernières nouvelles et mises à jour de notre part.</h3>
                    
                    <form id="newsletterForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="nemail" required>
                            <label class="label-control" for="nemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="nterms" value="Agreed-to-Terms" required>J'ai lu et accepté les <a href="#">politiques de confidentialités</a> et <a href="#">les termes et conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Envoyer</button>
                        </div>
                        <div class="form-message">
                            <div id="nmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    
                    <div class="icon-container">
                        <span class="fa-stack">
                            <a href="https://www.facebook.com/profile.php?id=100066730981526" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://twitter.com/goldtechafrica2?s=11&t=oJCwbyEKXqWK3dgSsRFrCQ" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        {{-- <span class="fa-stack">
                            <a href="#your-link" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span> --}}
                        <span class="fa-stack">
                            <a href="https://instagram.com/gold_tech_africa?igshid=YWJhMjlhZTc" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/company/governance-and-local-development-technology/">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>      
                </div> 
            </div>
        </div> 
    </div>
   


    <!-- Contact -->
    <div id="contact" class="form-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Details du contact</h2>
                        <p>
                            Pour les questions d'inscription, veuillez nous contacter en utilisant les coordonnées ci-dessous. Pour toute question utilisez le formulaire.</p>
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
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>J'ai lu et j'accepte les déclarations de GoLD Tech <a href="privacy-policy.html">Politiques de confidentialités</a> et <a href="terms-conditions.html">Termes et Conditions</a> 
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
                        <p class="p-small">Nous sommes passionnés par la gouvernance locale mais également les TICS.</p>
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
                        <h5>Réseaux sociaux</h5>
                        <p class="p-small">Pour les nouvelles et les mises à jour, suivez-nous</p>
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
                    <p class="p-small">Copyright © 2022 <a href="#">GoLD Tech Africa</a> - All rights reserved</p>
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