<!--====== Start Header Section ======-->
<header class="theme-header transparent-header">
    <!-- header Navigation -->
    <div class="header-navigation navigation-style-v1">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{ route('multicreative.view') }}" class="brand-logo"><img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="Site Logo"></a>
                </div>
                <div class="nav-menu">
                    <!-- Navbar Close -->
                    <div class="navbar-close"><i class="far fa-times"></i></div>
                    <!-- Nav Search -->
                    <div class="nav-search">
                        <form>
                            <div class="form_group">
                                <input type="email" class="form_control" placeholder="Search Here" name="email" required>
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <ul>
                            <li class="menu-item"><a href="#home" class="page-scroll active nav-link">Home</a></li>
                            <li class="menu-item"><a href="#about" class="page-scroll nav-link">About</a></li>
                            <li class="menu-item"><a href="#services" class="page-scroll nav-link">Services</a></li>
                            <li class="menu-item"><a href="#portfolio" class="page-scroll nav-link">Portfolio</a></li>
                            <li class="menu-item "><a href="#testimonial" class="page-scroll nav-link">Testimonial</a></li>
                            <li class="menu-item"><a href="#team" class="page-scroll nav-link">Team</a></li>
                            <li class="menu-item"><a href="#blog" class="page-scroll nav-link">Blog</a></li>
                            <li class="menu-item"><a href="#contact" class="page-scroll nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav">
                    <ul>
                        <li class="bar-item"><a href="#"><img src="{{ asset('assets/images/dot.png') }}" alt="dot"></a></li>
                        <li class="navbar-toggle-btn">
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header><!--====== End Header Section ======-->