<header class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bolder" href="/">
                BPDB HR Recruitment
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fw-bold align-items-center">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                            <i class="bi bi-house me-1"></i>
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person-plus me-1"></i>
                            Recruitment
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people me-1"></i>
                            Applicants
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2">
                        <button type="button" class="btn btn-outline-primary" disabled>
                            <i class="bi bi-box-arrow-in-right me-1"></i>
                            Login
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
