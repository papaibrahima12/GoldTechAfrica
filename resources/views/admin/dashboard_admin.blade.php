<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GoLD Tech Africa</title>
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
            <div class="sidebar-brand-icon">
                
            </div>
            <div class="sidebar-brand-text mx-3">GoLD Tech Africa</div>
        </a>

        <hr class="sidebar-divider my-0">
        
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/categorie/add') }}" >
                <span>Ajouter une categorie de cours</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/categories/all') }}" >
                <span>Liste des categories de cours</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/cours/add') }}" >
                <span>Ajouter un cours</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/cours/all') }}" >
                <span>Liste des cours</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ url('/user/all') }}" >
                <span>Liste des utilisateurs</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" id="seachvalue" class="form-control bg-light border-0 small" placeholder="Search anything..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="button" id="seach">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <div class="topbar-divider d-none d-sm-block"></div>

                    <li class="nav-item dropdown">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 <span class="caret">{{ Auth::user()->name }}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </span>
                    </li>

                </ul>

            </nav>
            

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Tableau de bord</h1>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                       @csrf
                       <input class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="submit" value="Deconnexion"/>
                    </form>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nombre de Cours</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $nbr = DB::table('cours')->count(); }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fa fa-book" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Nombre d'utilisateurs</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            {{ $nbr = DB::table('users')->count(); }}
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                      <i class="fa fa-user" aria-hidden="true"></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                @yield('content')

                <!-- Content Row -->
                <div class="row">
                    <!-- Content Column -->
                </div>

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; GoLD Tech Africa 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>


<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>

</body>

</html>
