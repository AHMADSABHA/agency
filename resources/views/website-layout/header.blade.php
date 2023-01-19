@php
$cr=Route::currentRouteName();
@endphp

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
                            <li class="menu-item has-children"><a href="#" class="nav-link">Demos</a>
                                <ul class="sub-menu">
                                    <li class="has-children"><a href="#">Multipage</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('multicreative.view') }}" @class(['active'=>$cr == 'multicreative.view'])>Creative Agency</a></li>
                                            <li><a href="{{ route('multidigital.view') }}">Digital Agency</a></li>
                                            <li><a href="{{ route('Ostudiodesign.view') }}">Design Studio</a></li>
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
                            <li class="menu-item has-children"><a href="/services" @class(['active'=>$cr == 'services.view'])>Services</a>
                                <ul class="sub-menu">
                                    <li><a href="/services" @class(['active'=>$cr == 'services.view'])>Our Service</a></li>
                                    <li><a href="/servicesdetails" @class(['active'=>$cr == 'servicesdetails.view'])>Service Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Portfolio</a>
                                <ul class="sub-menu">
                                    <li><a href="/portfolio"@class(['active'=>$cr == 'portfolio.view']) >Our Portfolio</a></li>
                                    <li><a href="/portfolio-details" @class(['active'=>$cr == 'portfoliodetails.view'])>Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="/aboutus"@class(['active'=>$cr == 'aboutus.view']) >About Us</a></li>
                                    <li><a href="/ourteam"@class(['active'=>$cr == 'ourteam.view']) >Our Team</a></li>
                                    <li><a href="/teamdetails"@class(['active'=>$cr == 'teamdetails.view']) >Team Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item has-children"><a href="#" class="nav-link">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="/blog"@class(['active'=>$cr == 'blogs.view'])>Our Blog</a></li>
                                    <li><a href="/blog-details"@class(['active'=>$cr == 'blogs-details.view'])>Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="/contact"@class(['active'=>$cr == 'contact.view']) class="nav-link">Contact</a></li>
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