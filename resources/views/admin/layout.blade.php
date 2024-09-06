<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gérez facilement les employés de votre entreprise.">
    <meta name="author" content="Kanjak">
    <title>@yield('title') | EMPLOYEE MANAGER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body class="sb-nav-fixed bg-light">
    <!-- Header -->
    <nav class="sb-topnav navbar navbar-expand bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-5" href="#"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="image ms-4 mt-1 w-50 h-50"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
        
        <div id="layoutSidenav">
            <!-- Menu -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav bg-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-light">Core</div>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                <strong>Dashboard</strong>
                            </a>
                            <div class="sb-sidenav-menu-heading text-light">Pages</div>
                            <a class="nav-link" href="{{ route('admin.staff.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                <strong>Employés</strong>
                            </a>
                            <a class="nav-link" href="{{ route('admin.departement.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-sitemap"></i></div>
                                <strong>Départements</strong>
                            </a>
                           
                            <a class="nav-link" href="{{ route('admin.settings') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                <strong>Paramètres</strong>
                            </a>
            
                            <div class="sb-sidenav-menu-heading text-light">Session</div>
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-arrow-right"></i></div>
                                <strong>Se déconnecter</strong>
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer text-light">
                        <div class="small">Connecté en tant que:</div>
                        <strong class="fs-5 text-capitalize">::session username</strong><br>
                        <span class="badge bg-primary text-capitalize">::session role</span>
                    </div>
                </nav>
            </div> {{-- end Menu --}}

            <div id="layoutSidenav_content">
                <!-- Main -->
                <main>
                    @yield('content')
                </main> 
            </div>
        </div>
    
    <!-- SCRIPTS -->
    <script>
        function confirmDelete(){
            return confirm('Êtes-vous sûr de vouloir supprimer ?');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/datatables-demo.js') }}"></script>
    <script src="{{ asset('js/datatables-simple-demo.js') }}"></script>
</body>
</html>