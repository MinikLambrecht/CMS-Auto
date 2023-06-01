<section>
    <div id="Banner" class='d-flex flex-row'>
        <div class="text-center justify-content-end flex-fill BannerShapeL">
            <a target="_blank" href="https://www.facebook.com/CMSAUTOGUDME">
                <p class='fs-2 text-light text-end'>
                    https://www.facebook.com/
                </p>
            </a>
        </div>
        
        <a href="/">
            <img src="src/images/Logo.webp" class="img-fluid BannerImage" />
        </a>

        <div class="text-center justify-content-end flex-fill BannerShapeR">
            <a target="_blank" href="https://www.facebook.com/CMSAUTOGUDME">
                <p class='fs-1 text-info text-start'>
                    CMSAUTOGUDME
                </p>
            </a>
        </div>
    </div>
    <div class="navbar navbar-expand-lg navbar-dark custom-navbar bg-dark custom-navbar">
        <div class="container-fluid">

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon" />
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto mb-2 mb-md-0">
                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : ''; ?>">
                        <a href="/" class="nav-link">
                            Hjem
                        </a>
                    </li>
                    
                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/projekter' ? 'active' : ''; ?>">
                        <a href="/projekter" class="nav-link">
                            Projekter
                        </a>
                    </li>

                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/service-partner' ? 'active' : ''; ?>">
                        <a href="/service-partner" class="nav-link">
                            Service Partner
                        </a>
                    </li>

                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/facebook-feed' ? 'active' : ''; ?>">
                        <a href="/facebook-feed" class="nav-link">
                            Facebook feed
                        </a>
                    </li>

                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/om-os' ? 'active' : ''; ?>">
                        <a href="/om-os" class="nav-link">
                            Om os
                        </a>
                    </li>

                    <li class="nav-item <?php echo $_SERVER['REQUEST_URI'] == '/kontakt-os' ? 'active' : ''; ?>">
                        <a href="/kontakt-os" class="nav-link">
                            Kontakt os
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
