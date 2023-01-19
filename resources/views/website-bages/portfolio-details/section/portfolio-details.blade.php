<!--====== Start Portfolio Details section ======-->
<section class="portfolio-details-section pt-210 pb-130">
    <div class="container">
        <div class="portfolio-details-wrapper wow fadeInUp">
            <div class="portfolio-item">
                <div class="text">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="content">
                                <h3 class="title">{{  $project_det->title }}</h3>
                                <p>{{  $project_det->subtitle }}</p>
                            </div>
                            <div class="content">
                                <h3 class="title">{{  $project_det->title2 }}</h3>
                                <p>{{  $project_det->description }}</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="portfolio-info mb-45">
                                <ul>
                                    <li>
                                        <h4>Category</h4>
                                        <p>{{  $project_det->title2 }}</p>
                                    </li>
                                    <li>
                                        <h4>Clients</h4>
                                        <p>{{ $project_det->client }}</p>
                                    </li>
                                    <li>
                                        <h4>Date</h4>
                                        <p>{{ $project_det->project_date }}</p>
                                    </li>
                                    <li>
                                        <h4>Location</h4>
                                        <p>{{ $project_det->location }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content">
                                <img src="{{ $project_det->cover_image }}" alt="">
                                <h3 class="title">{{ $project_det->title3 }}</h3>
                                <p>{{ $project_det->disc3 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-nav-tag pt-80">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="post-nav-item prev-post">
                            <div class="thumb">
                                <img src="assets/images/portfolio/thumb-1.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4><a href="{{ route('portfoliodetails.view') }}">Creative Web Design</a></h4>
                                <p><a href="{{ route('portfolio.view') }}">Design</a>, <a href="#">Agency</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="post-icon text-center">
                            <img src="assets/images/portfolio/icon-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="post-nav-item next-post">
                            <div class="thumb">
                                <img src="assets/images/portfolio/thumb-2.jpg" alt="">
                            </div>
                            <div class="text">
                                <h4><a href="{{ route('portfoliodetails.view',['project_id'=>1]) }}">Creative Web Design</a></h4>
                                <p><a href="{{ route('portfolio.view') }}">Design</a>, <a href="#">Agency</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--====== End Portfolio Details section ======-->