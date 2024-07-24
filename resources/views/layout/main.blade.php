<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Data Kursus | @yield('title')</title>
    <link rel="icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="{{ asset('js/scripts.js') }}"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-light bg-info">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/"><img src="{{ asset('assets/img/logo.png') }}" alt=""
                width="40" height="40"> Admin</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class='bx bx-menu'></i>
        </button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="/">
                            <div class="sb-nav-link-icon">
                                <i class='bx bxs-dashboard'></i>
                            </div>
                            Dashboard
                        </a>
                        <a href="/siswa" class="nav-link">
                            <div class="sb-nav-link-icon">
                                <i class='bx bx-folder'></i>
                            </div>
                            Siswa
                        </a>
                        <a href="/program" class="nav-link">
                            <div class="sb-nav-link-icon">
                                <i class='bx bx-folder'></i>
                            </div>
                            Program
                        </a>
                        <a href="/jadwal" class="nav-link">
                            <div class="sb-nav-link-icon">
                                <i class='bx bx-folder'></i>
                            </div>
                            Jadwal
                        </a>
                        <a href="/logout" class="nav-link">
                            <div class="sb-nav-link-icon"><i class='bx bx-log-out bx-flip-horizontal'></i></div>
                            Keluar
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Login sebagai</div>
                    {{-- {{ Auth::user()->name }} --}}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    @yield('content')
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Gilang Risky Mahardika 2024</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('js')
</body>

</html>
