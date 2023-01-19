<section class="portfolio-area portfolio-area-v1 light-gray-bg pt-210 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($constant as $item)
            @if ($item->id == 5) 
            
            <div class="col-lg-8">
                <div class="section-title mb-45 text-center wow fadeInUp">
                    <span class="sub-title st-one">{{ $item->section }}</span>
                    <h2>{{ $item->title }}</h2>
                    <p>{{ $item->subtitle }}</p>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="portfolio-filter-button text-center mb-40 wow fadeInUp">
                    <ul class="filter-btn mb-30">
                        <li data-filter="*" class="active">Show All</li>
                        @foreach( $category as $item)
                      
                        <li data-filter=".cat-{{ $item->project_category_id }}">{{ $item->name }}</li>
                        
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row portfolio-grid">
@foreach ($all  as $item )
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column   cat-{{ $item->project_id }} cat-{{ $item->project_category_id }}">
                <div class="portfolio-item portfolio-style-one mb-50 wow fadeInUp" data-wow-delay="{{ $loop->iteration *10 }}">
                    <div class="img-holder">
                        <img src="{{ $item->cover_image }}" alt="Img">
                        <a href="{{ $item->cover_image }}" class="portfolio-hover img-popup">
                            <div class="hover-content">
                                <i class="far fa-plus"></i>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h3 class="title"><a href="{{ route('portfoliodetails.view',['project_id'=>$item->project_id]) }}">{{ $item->title }}</a></h3>
                        <a href="{{ route('portfoliodetails.view') }}" class="cat-link">{{ $item->subtitle }}</a>
                    </div>
                </div>
            </div>
            @endforeach      
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="button-box text-center wow fadeInUp">
                    <a href="{{ route('portfolio.view') }}" class="main-btn arrow-btn">View All Projects</a>
                </div>
            </div>
        </div>
    </div>
    
</section><!--====== End Portfolio Section ======-->