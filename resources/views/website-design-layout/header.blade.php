<!--====== Start Header Section ======-->
<header class="theme-header">
    <!-- header Navigation -->
    <div class="header-navigation navigation-style-v3">
        <div class="nav-overlay"></div>
        <div class="container-fluid">
            <div class="primary-menu">
                <div class="site-branding">
                    <a href="{{ route('multicreative.view') }}" class="brand-logo"><img src="{{ asset('assets/images/logo/logo-1.png') }}" alt="Site Logo"></a>
                    <div class="lang-dropdown">
                        <select class="wide">
                            <option value="01">English</option>
                            <option value="02">French</option>
                        </select>
                    </div>
                </div>
                <div class="nav-menu nav-ml-auto">
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
                            <li class="menu-item has-children"><a href="#" class="active nav-link">Demos</a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="#">Multipage</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('multicreative.view') }}">Creative Agency</a></li>
                                            <li><a href="{{ route('multidigital.view') }}">Digital Agency</a></li>
                                            <li><a href="{{ route('Mstudiodesign.view') }}">Design Studio</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children"><a href="#">Onepage</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('onecreative.view') }}">Creative Agency</a></li>
                                            <li><a href="{{ route('onedigital.view') }}">Digital Agency</a></li>
                                            <li><a href="{{ route('Ostudiodesign.view') }}">Design Studio</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('services.view') }}">Our Service</a></li>
                                    <li><a href="{{ route('servicesdetails.view') }}">Service Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('portfolio.view') }}">Our Portfolio</a></li>
                                    <li><a href="{{ route('portfoliodetails.view') }}">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('aboutus.view') }}">About Us</a></li>
                                    <li><a href="{{ route('ourteam.view') }}">Our Team</a></li>
                                    <li><a href="{{ route('teamdetails.view') }}">Team Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('blogs.view') }}">Our Blog</a></li>
                                    <li><a href="{{ route('blogs-details.view') }}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="{{ route('contact.view') }}" class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header-right-nav">
                    <ul>
                        <li class="nav-button"><a href="{{ route('contact.view') }}" class="main-btn arrow-btn">Let’s Talk</a></li>
                        <li class="bar-item"><img src="{{ asset('assets/images/bar.png') }}" alt=""></li>
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