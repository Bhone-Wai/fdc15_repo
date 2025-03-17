<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('storage/sb-admin-b5/css/styles.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        @yield('style')
    </head>
    <body class="sb-nav-fixed">
        <!-- TopBar -->
        @include('admin.layouts.topbar')
        <!-- End of TopBar -->
        <div id="layoutSidenav">
            <!-- SideBar -->
            @include('admin.layouts.sidebar')
            <!-- End of SideBar -->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mt-3">
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">@yield('header')</li>
                        </ol>
                        <div class="row">
                            <div class="col">
                                @yield('content')
                            </div>
                        </div>
                        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('storage/sb-admin-b5/js/scripts.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @yield('script')
    </body>
</html>
