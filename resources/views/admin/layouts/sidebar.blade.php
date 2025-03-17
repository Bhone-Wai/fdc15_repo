<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <!-- Starter -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#starter" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Starter
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="starter" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/page1') }}">page1</a>
                        <a class="nav-link" href="{{ url('/admin/page2')}}">page2</a>
                        <a class="nav-link" href="{{ url('/admin/page3')}}">page3</a>
                    </nav>
                </div>

                <!-- Routing -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#routing" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Routing
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="routing" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/routing/view-only') }}">View Only</a>
                        <a class="nav-link" href="{{ url('/admin/routing/pass-data-to-view') }}">Pass Data</a>
                        <a class="nav-link" href="{{ url('/admin/routing/route-para/navy/white') }}">Route Para</a>
                    </nav>
                </div>

                <!-- CSRF -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#csrf" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    CSRF
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="csrf" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.lecture') }}">Lecture</a>
                        <a class="nav-link" href="{{ route('admin.ajax') }}">Ajax</a>
                    </nav>
                </div>
                <!-- End of CSRF -->

                <!-- Session -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#session" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Session
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="session" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.getSession') }}">Get Session</a>
                    </nav>
                </div>
                <!-- End of Session -->

                <!-- Blade Template -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#blade-template" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blade Template
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="blade-template" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('admin.component') }}">Component</a>
                        <a class="nav-link" href="{{ route('admin.localization') }}">Localization</a>
                    </nav>
                </div>
                <!-- End of Blade Template -->

                <!-- Project -->
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#project" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Project
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="project" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url('/admin/users') }}">User</a>
                        <a class="nav-link" href="{{ route('portfolios.index') }}">Portfolio</a>
                        <a class="nav-link" href="{{ route('contacts.index') }}">Contact</a>
                        <a class="nav-link" href="{{ route('services.index') }}">Service</a>
                    </nav>
                </div>
                <!-- End of Project -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>