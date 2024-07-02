<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('teacher.dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{route('add.course')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Add Course
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></div>
                </a>
                <a class="nav-link" href="{{route('manage.teacher.course')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Manage Course
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></div>
                </a>
                <a class="nav-link" href="{{route('teacher.approved.course')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Approved Course
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-right"></i></div>
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small d-flex">Logged in as: <h6 class="ms-3">Teacher</h6></div>

        </div>
    </nav>
</div>
