<!--====== Start Portfolio Section ======-->
<section class="portfolio-area portfolio-area-v1 light-gray-bg pt-130 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-title mb-45 wow fadeInUp">
                    <span class="sub-title st-one">Latest Work</span>
                    <h2>Professional Experience</h2>
                    <p>Professional Design Agency to provide solutions</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter-button mb-50 wow fadeInLeft">
                    <ul class="filter-btn mb-20">
                        <li data-filter="*" class="active">Show All</li>
                        <li data-filter=".cat-1">Design</li>
                        <li data-filter=".cat-2">Branding</li>
                        <li data-filter=".cat-3">Development</li>
                        <li data-filter=".cat-4">SEO</li>
                        <li data-filter=".cat-5">UX/UI Design</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio-grid">
            <div class="col-lg-4 col-md-6 col-sm-12 cat-1 portfolio-column cat-3">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".1s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-1.jpg') }}" alt="Img">
                        <a href="{{ asset('assets/images/portfolio/img-1.jpg') }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Dashboard Design</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-2 cat-4">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".2s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-2.jpg') }}" alt="Img">
                        <a href="{{ asset('assets/images/portfolio/img-2.jpg') }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Landing Pages</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-3 cat-4">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".3s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-3.jpg') }}" alt="Img">
                        <a href="" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Illustration Design</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-3">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".4s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-4.jpg') }}" alt="Img">
                        <a href="{{ asset('assets/images/portfolio/img-4.jpg') }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Dashboard Design</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-5 cat-1">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".5s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-5.jpg') }}" alt="Img">
                        <a href="{{ asset('assets/images/portfolio/img-5.jpg') }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Apps Development</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-4 cat-2">
                <div class="portfolio-item portfolio-style-one mb-55 wow fadeInUp" data-wow-delay=".6s">
                    <div class="img-holder">
                        <img src="{{ asset('assets/images/portfolio/img-6.jpg') }}" alt="Img">
                        <a href="{{ asset('assets/images/portfolio/img-6.jpg') }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view') }}">Website Design</a></h3>
                        <a href="{{ route('portfolio.view') }}" class="cat-link">Creative Design</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Portfolio Section ======-->